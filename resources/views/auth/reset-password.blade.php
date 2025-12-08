<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Reset Password</h2>
        <p class="text-sm text-slate-600 mt-2">Enter your new password below.</p>
      </div>

      <form action="{{ route('password.update') }}" method="POST" autocomplete="off">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        @if ($errors->any())
          <div class="mb-6 bg-red-600 border border-red-700 text-white px-4 py-3 rounded-lg" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="space-y-6">
          <div>
            <x-input-label for="email">Email</x-input-label>
            <x-text-input id="email" type="email" name="email" class="w-full" required readonly value="{{ $email }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="password">New Password</x-input-label>
            <x-text-input id="password" type="password" name="password" class="w-full" required placeholder="Enter new password" autofocus />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="password_confirmation">Confirm Password</x-input-label>
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" class="w-full" required placeholder="Confirm new password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Reset Password
          </button>
        </div>

        <div class="mt-6 text-center">
          <a href="{{ route('login') }}" class="text-blue-600 font-medium text-sm hover:underline">
            Back to login
          </a>
        </div>
      </form>
    </div>
  </div>
</x-layouts.guest-layout>
