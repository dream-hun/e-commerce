<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <form action="{{ route('register') }}" method="POST" autocomplete="off">
        @csrf
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
            <x-input-label for="name">Name</x-input-label>
            <x-text-input id="name" type="text" name="name" class="w-full" required placeholder="Enter your name" autofocus value="{{ old('name') }}" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="email">Email</x-input-label>
            <x-text-input id="email" type="email" name="email" class="w-full" required placeholder="Enter email" value="{{ old('email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="password">Password</x-input-label>
            <x-text-input id="password" type="password" name="password" class="w-full" required placeholder="Enter password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="password_confirmation">Confirm Password</x-input-label>
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" class="w-full" required placeholder="Confirm password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Create an account
          </button>
        </div>

        <p class="text-slate-600 text-sm mt-6 text-center">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline ml-1">Login here</a></p>
      </form>
    </div>
  </div>
</x-layouts.guest-layout>
