<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('login screen can be rendered', function (): void {
    $response = $this->get('/login');

    $response->assertSuccessful();
    $response->assertViewIs('auth.login');
});

test('users can authenticate using the login screen', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect('/dashboard');
    $this->assertAuthenticatedAs($user);
});

test('users can authenticate with remember me', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $response->assertRedirect('/dashboard');
    $this->assertAuthenticatedAs($user);
    expect($user->fresh()->remember_token)->not->toBeNull();
});

test('users cannot authenticate with invalid password', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertSessionHasErrors();
    $this->assertGuest();
});

test('users cannot authenticate with invalid email', function (): void {
    User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password'),
    ]);

    $response = $this->post('/login', [
        'email' => 'wrong@example.com',
        'password' => 'password',
    ]);

    $response->assertSessionHasErrors();
    $this->assertGuest();
});

test('users can logout', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $response->assertRedirect('/');
    $this->assertGuest();
});

test('login is rate limited', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    for ($i = 0; $i < 6; $i++) {
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);
    }

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertStatus(429);
});
