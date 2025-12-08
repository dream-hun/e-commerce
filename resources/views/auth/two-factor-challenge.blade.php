<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Two Factor Authentication</h2>
        <p class="text-sm text-slate-600 mt-2">Please confirm access to your account by entering the authentication code provided by your authenticator application.</p>
      </div>

      <form action="{{ route('two-factor.login') }}" method="POST" autocomplete="off">
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
            <x-input-label for="code">Code</x-input-label>
            <x-text-input id="code" type="text" name="code" class="w-full" required placeholder="Enter authentication code" autofocus />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Verify
          </button>
        </div>

        <div class="mt-6">
          <p class="text-sm text-slate-600 text-center mb-4">Or use a recovery code</p>
          <a href="#" onclick="event.preventDefault(); document.getElementById('recovery-form').style.display = 'block'; document.querySelector('form').style.display = 'none';" class="block text-center text-blue-600 font-medium text-sm hover:underline">
            Use Recovery Code
          </a>
        </div>
      </form>

      <form id="recovery-form" action="{{ route('two-factor.login') }}" method="POST" autocomplete="off" style="display: none;">
        @csrf
        <div class="space-y-6">
          <div>
            <x-input-label for="recovery_code">Recovery Code</x-input-label>
            <x-text-input id="recovery_code" type="text" name="recovery_code" class="w-full" required placeholder="Enter recovery code" autofocus />
            <x-input-error :messages="$errors->get('recovery_code')" class="mt-2" />
          </div>
        </div>

        <div class="mt-12">
          <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
            Verify
          </button>
        </div>

        <div class="mt-6">
          <a href="#" onclick="event.preventDefault(); document.getElementById('recovery-form').style.display = 'none'; document.querySelector('form').style.display = 'block';" class="block text-center text-blue-600 font-medium text-sm hover:underline">
            Use Authentication Code
          </a>
        </div>
      </form>
    </div>
  </div>
</x-layouts.guest-layout>
