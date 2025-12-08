<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('profile information can be updated', function (): void {
    $user = User::factory()->create([
        'name' => 'Old Name',
        'email' => 'old@example.com',
    ]);

    $response = $this->actingAs($user)->put('/user/profile-information', [
        'name' => 'New Name',
        'email' => 'new@example.com',
    ]);

    $response->assertSessionHasNoErrors();
    $this->assertEquals('New Name', $user->fresh()->name);
    $this->assertEquals('new@example.com', $user->fresh()->email);
});

test('profile information cannot be updated with invalid email', function (): void {
    $user = User::factory()->create([
        'email' => 'old@example.com',
    ]);

    $response = $this->actingAs($user)->put('/user/profile-information', [
        'name' => 'New Name',
        'email' => 'invalid-email',
    ]);

    $response->assertSessionHasErrorsIn('updateProfileInformation', ['email']);
});

test('profile information cannot be updated without name', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->put('/user/profile-information', [
        'name' => '',
        'email' => 'new@example.com',
    ]);

    $response->assertSessionHasErrorsIn('updateProfileInformation', ['name']);
});

test('profile information cannot be updated with duplicate email', function (): void {
    User::factory()->create(['email' => 'existing@example.com']);
    $user = User::factory()->create(['email' => 'old@example.com']);

    $response = $this->actingAs($user)->put('/user/profile-information', [
        'name' => 'New Name',
        'email' => 'existing@example.com',
    ]);

    $response->assertSessionHasErrorsIn('updateProfileInformation', ['email']);
});

test('profile information can be updated with same email', function (): void {
    $user = User::factory()->create([
        'name' => 'Old Name',
        'email' => 'test@example.com',
    ]);

    $response = $this->actingAs($user)->put('/user/profile-information', [
        'name' => 'New Name',
        'email' => 'test@example.com',
    ]);

    $response->assertSessionHasNoErrors();
    $this->assertEquals('New Name', $user->fresh()->name);
    $this->assertEquals('test@example.com', $user->fresh()->email);
});

test('unauthenticated users cannot update profile information', function (): void {
    $response = $this->put('/user/profile-information', [
        'name' => 'New Name',
        'email' => 'new@example.com',
    ]);

    $response->assertRedirect('/login');
});
