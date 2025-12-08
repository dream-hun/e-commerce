<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Features;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    if (! Features::canManageTwoFactorAuthentication()) {
        $this->markTestSkipped('Two-factor authentication is not enabled.');
    }
});

test('two factor challenge redirects to login when not authenticated', function (): void {
    $response = $this->get(route('two-factor.login'));

    $response->assertRedirect(route('login'));
});

test('two factor challenge can be rendered', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $user->forceFill([
        'two_factor_secret' => encrypt('test-secret'),
        'two_factor_recovery_codes' => encrypt(json_encode(['code1', 'code2'])),
        'two_factor_confirmed_at' => now(),
    ])->save();

    // Attempt login - this should redirect to two-factor challenge
    $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response = $this->get(route('two-factor.login'));

    $response->assertSuccessful();
    $response->assertViewIs('auth.two-factor-challenge');
});

test('two factor authentication endpoint is accessible', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/user/two-factor-authentication');

    // Fortify requires password confirmation for 2FA setup, so it may redirect
    // We just verify the endpoint is accessible and doesn't error
    expect($response->status())->toBeIn([200, 302]);
    expect($response->status())->not->toBe(500);
});

test('two factor authentication disable endpoint is accessible', function (): void {
    $user = User::factory()->create();
    $user->forceFill([
        'two_factor_secret' => encrypt('test-secret'),
        'two_factor_confirmed_at' => now(),
        'two_factor_recovery_codes' => encrypt(json_encode(['code1', 'code2'])),
    ])->save();

    $response = $this->actingAs($user)->delete('/user/two-factor-authentication');

    // Fortify requires password confirmation, so it may redirect
    // We verify the endpoint is accessible
    expect($response->status())->toBeIn([200, 302]);
    expect($response->status())->not->toBe(500);
});

test('two factor qr code requires password confirmation', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    // These endpoints require password confirmation, so they redirect
    $response = $this->actingAs($user)->get('/user/two-factor-qr-code');
    $response->assertRedirect();
});

test('two factor secret key requires password confirmation', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    // These endpoints require password confirmation, so they redirect
    $response = $this->actingAs($user)->get('/user/two-factor-secret-key');
    $response->assertRedirect();
});

test('two factor recovery codes require password confirmation', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    // These endpoints require password confirmation, so they redirect
    $response = $this->actingAs($user)->get('/user/two-factor-recovery-codes');
    $response->assertRedirect();
});

test('two factor recovery codes regeneration endpoint is accessible', function (): void {
    $user = User::factory()->create();
    $user->forceFill([
        'two_factor_secret' => encrypt('test-secret'),
        'two_factor_confirmed_at' => now(),
        'two_factor_recovery_codes' => encrypt(json_encode(['old-code-1', 'old-code-2'])),
    ])->save();

    $response = $this->actingAs($user)->post('/user/two-factor-recovery-codes');

    // Fortify requires password confirmation for regeneration
    // We verify the endpoint is accessible
    expect($response->status())->toBeIn([200, 302]);
    expect($response->status())->not->toBe(500);
});

test('two factor authentication requires confirmation before use', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    // Before confirmation, two_factor_confirmed_at should be null
    $user->refresh();
    expect($user->two_factor_confirmed_at)->toBeNull();
});

test('unauthenticated users cannot enable two factor authentication', function (): void {
    $response = $this->post('/user/two-factor-authentication');

    $response->assertRedirect('/login');
});

test('unauthenticated users cannot disable two factor authentication', function (): void {
    $response = $this->delete('/user/two-factor-authentication');

    $response->assertRedirect('/login');
});

test('unauthenticated users cannot access two factor endpoints', function (): void {
    $response = $this->get('/user/two-factor-qr-code');
    $response->assertRedirect('/login');

    $response = $this->get('/user/two-factor-secret-key');
    $response->assertRedirect('/login');

    $response = $this->get('/user/two-factor-recovery-codes');
    $response->assertRedirect('/login');
});
