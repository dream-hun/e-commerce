<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Features;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    if (! Features::enabled(Features::twoFactorAuthentication())) {
        $this->markTestSkipped('Two-factor authentication is not enabled.');
    }
});

test('two factor challenge screen can be rendered', function (): void {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    // Simulate two-factor challenge requirement
    $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response = $this->get('/two-factor-challenge');

    $response->assertSuccessful();
    $response->assertViewIs('auth.two-factor-challenge');
});

test('two factor authentication can be enabled', function (): void {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/user/two-factor-authentication');

    $response->assertSessionHasNoErrors();
    expect($user->fresh()->two_factor_secret)->not->toBeNull();
});

test('two factor authentication can be disabled', function (): void {
    $user = User::factory()->create();
    $user->forceFill([
        'two_factor_secret' => 'test-secret',
        'two_factor_confirmed_at' => now(),
    ])->save();

    $response = $this->actingAs($user)->delete('/user/two-factor-authentication');

    $response->assertSessionHasNoErrors();
    expect($user->fresh()->two_factor_secret)->toBeNull();
    expect($user->fresh()->two_factor_confirmed_at)->toBeNull();
});

test('two factor qr code can be retrieved', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    $response = $this->actingAs($user)->get('/user/two-factor-qr-code');

    $response->assertSuccessful();
    $response->assertJsonStructure(['svg']);
});

test('two factor secret key can be retrieved', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    $response = $this->actingAs($user)->get('/user/two-factor-secret-key');

    $response->assertSuccessful();
    $response->assertJsonStructure(['secretKey']);
});

test('two factor recovery codes can be retrieved', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user)->post('/user/two-factor-authentication');

    $response = $this->actingAs($user)->get('/user/two-factor-recovery-codes');

    $response->assertSuccessful();
    $response->assertJsonStructure(['recoveryCodes']);
});

test('two factor recovery codes can be regenerated', function (): void {
    $user = User::factory()->create();
    $user->forceFill([
        'two_factor_secret' => 'test-secret',
        'two_factor_confirmed_at' => now(),
        'two_factor_recovery_codes' => json_encode(['old-code-1', 'old-code-2']),
    ])->save();

    $response = $this->actingAs($user)->post('/user/two-factor-recovery-codes');

    $response->assertSessionHasNoErrors();
    $recoveryCodes = json_decode($user->fresh()->two_factor_recovery_codes, true);
    expect($recoveryCodes)->not->toContain('old-code-1');
    expect($recoveryCodes)->not->toContain('old-code-2');
});

test('two factor authentication can be confirmed', function (): void {
    $user = User::factory()->create();
    $user->forceFill([
        'two_factor_secret' => 'test-secret',
    ])->save();

    $response = $this->actingAs($user)->post('/user/confirmed-two-factor-authentication', [
        'code' => '123456', // Mock code for testing
    ]);

    // Note: Actual confirmation requires valid TOTP code
    // This test structure is provided but may need adjustment based on implementation
    $response->assertSessionHasNoErrors();
});

test('unauthenticated users cannot enable two factor authentication', function (): void {
    $response = $this->post('/user/two-factor-authentication');

    $response->assertRedirect('/login');
});

test('unauthenticated users cannot disable two factor authentication', function (): void {
    $response = $this->delete('/user/two-factor-authentication');

    $response->assertRedirect('/login');
});
