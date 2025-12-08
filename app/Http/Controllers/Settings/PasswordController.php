<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdatePasswordRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

final class PasswordController extends Controller
{
    /**
     * Show the form for editing the user's password.
     */
    public function edit(Request $request): Factory|View
    {
        return view('settings.password.edit');
    }

    /**
     * Update the user's password.
     */
    public function update(UpdatePasswordRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Logout other devices BEFORE updating password
        // This must happen before password change because it verifies the current password
        Auth::logoutOtherDevices($validated['current_password']);

        // Update the password
        $request->user()->forceFill([
            'password' => Hash::make($validated['password']),
        ])->save();

        // Regenerate the session ID to prevent session fixation attacks
        $request->session()->regenerate();

        return redirect()->route('settings.password.edit')->with('success', __('Password updated successfully.'));
    }
}
