<x-layouts.guest-layout>
  <div class="container mx-auto max-w-md w-full h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Verify Your Email</h2>
        <p class="text-sm text-slate-600 mt-2">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?</p>
      </div>

      @if (session('status') == 'verification-link-sent')
        <div class="mb-6 bg-green-600 border border-green-700 text-white px-4 py-3 rounded-lg" role="alert">
          A new verification link has been sent to the email address you provided during registration.
        </div>
      @endif

      <form action="{{ route('verification.send') }}" method="POST" class="mb-6">
        @csrf
        <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
          Resend Verification Email
        </button>
      </form>

      <form action="{{ route('logout') }}" method="POST" class="text-center">
        @csrf
        <button type="submit" class="text-blue-600 font-medium text-sm hover:underline">
          Log Out
        </button>
      </form>
    </div>
  </div>
</x-layouts.guest-layout>
