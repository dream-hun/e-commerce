<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Forgot Password</h2>
        <p class="text-sm text-slate-600 mt-2">Enter your email address and we'll send you a link to reset your password.</p>
      </div>

      <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
        @csrf
        @if (session('status'))
          <div class="mb-6 bg-green-600 border border-green-700 text-white px-4 py-3 rounded-lg" role="alert">
            {{ session('status') }}
          </div>
        @endif

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
            <x-text-input id="email" type="email" name="email" class="w-full" required placeholder="Enter your email" autofocus value="{{ old('email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Send Reset Link
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
