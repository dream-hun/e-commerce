<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

uses(RefreshDatabase::class);

test('forgot password screen can be rendered', function (): void {
    $response = $this->get('/forgot-password');

    $response->assertSuccessful();
    $response->assertViewIs('auth.forgot-password');
});

test('reset password link can be requested', function (): void {
    Notification::fake();

    $user = User::factory()->create();

    $response = $this->post('/forgot-password', [
        'email' => $user->email,
    ]);

    Notification::assertSentTo($user, ResetPassword::class);
    $response->assertRedirect();
    $response->assertSessionHas('status');
});

test('reset password link cannot be requested with invalid email', function (): void {
    Notification::fake();

    $response = $this->post('/forgot-password', [
        'email' => 'nonexistent@example.com',
    ]);

    Notification::assertNothingSent();
    $response->assertSessionHasErrors(['email']);
});

test('reset password screen can be rendered', function (): void {
    $user = User::factory()->create();
    $token = resolve(PasswordBroker::class)->createToken($user);

    $response = $this->get('/reset-password/'.$token, [
        'email' => $user->email,
    ]);

    $response->assertSuccessful();
    $response->assertViewIs('auth.reset-password');
});

test('password can be reset with valid token', function (): void {
    Notification::fake();

    $user = User::factory()->create();
    $token = resolve(PasswordBroker::class)->createToken($user);

    $response = $this->post('/reset-password', [
        'token' => $token,
        'email' => $user->email,
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ]);

    $response->assertRedirect('/login');
    $this->assertTrue(Hash::check('new-password', $user->fresh()->password));
});

test('password cannot be reset with invalid token', function (): void {
    $user = User::factory()->create();
    $oldPassword = $user->password;

    $response = $this->post('/reset-password', [
        'token' => 'invalid-token',
        'email' => $user->email,
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ]);

    $response->assertSessionHasErrors(['email']);
    $this->assertTrue(Hash::check('password', $user->fresh()->password));
});

test('password cannot be reset with mismatched passwords', function (): void {
    $user = User::factory()->create();
    $token = resolve(PasswordBroker::class)->createToken($user);

    $response = $this->post('/reset-password', [
        'token' => $token,
        'email' => $user->email,
        'password' => 'new-password',
        'password_confirmation' => 'different-password',
    ]);

    $response->assertSessionHasErrors(['password']);
});

test('password cannot be reset with weak password', function (): void {
    $user = User::factory()->create();
    $token = resolve(PasswordBroker::class)->createToken($user);

    $response = $this->post('/reset-password', [
        'token' => $token,
        'email' => $user->email,
        'password' => '123',
        'password_confirmation' => '123',
    ]);

    $response->assertSessionHasErrors(['password']);
});
