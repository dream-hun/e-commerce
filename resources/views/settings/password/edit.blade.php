<x-layouts.authenticated-layout>
    <div class="p-6 space-y-6 bg-slate-50 min-h-screen font-sans">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Password Settings</h1>
                <p class="text-sm text-slate-500 mt-1">Update your account password</p>
            </div>
        </div>

        <x-alert />

        <!-- Password Update Form -->
        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm max-w-2xl">
            <form method="POST" action="{{ route('settings.password.update') }}">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <!-- Current Password -->
                    <div>
                        <x-input-label for="current_password" value="Current Password" />
                        <x-text-input
                            id="current_password"
                            type="password"
                            name="current_password"
                            class="w-full"
                            required
                            autofocus
                            placeholder="Enter your current password"
                        />
                        <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                    </div>

                    <!-- New Password -->
                    <div>
                        <x-input-label for="password" value="New Password" />
                        <x-text-input
                            id="password"
                            type="password"
                            name="password"
                            class="w-full"
                            required
                            placeholder="Enter your new password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <p class="mt-2 text-xs text-slate-500">
                            Your password must be at least 8 characters long.
                        </p>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" value="Confirm New Password" />
                        <x-text-input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            class="w-full"
                            required
                            placeholder="Confirm your new password"
                        />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8 flex items-center gap-4">
                    <button
                        type="submit"
                        class="px-6 py-3 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-colors cursor-pointer"
                    >
                        Update Password
                    </button>
                    <a
                        href="{{ route('dashboard') }}"
                        class="px-6 py-3 bg-white border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 transition-colors"
                    >
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.authenticated-layout>
