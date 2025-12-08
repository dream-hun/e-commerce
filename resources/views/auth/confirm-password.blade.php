<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Confirm Password</h2>
        <p class="text-sm text-slate-600 mt-2">This is a secure area of the application. Please confirm your password before continuing.</p>
      </div>

      <form action="{{ route('password.confirm') }}" method="POST" autocomplete="off">
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
            <x-input-label for="password">Password</x-input-label>
            <x-text-input id="password" type="password" name="password" class="w-full" required placeholder="Enter your password" autofocus />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Confirm
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layouts.guest-layout>
