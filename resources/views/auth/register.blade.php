<x-layouts.guest-layout>
    <div class="container mx-auto max-w-md w-4xl h-screen flex items-center justify-center">
    @if ($errors->any())
        <div class="alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">

          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="space-y-6">
              <div>
                 <label class="text-slate-900 text-sm font-medium mb-2 block">Email</label>
                <input name="email" type="email" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter email" />
              </div>
              <div>
                <label class="text-slate-900 text-sm font-medium mb-2 block">Password</label>
                <input name="password" type="password" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter password" />
              </div>
              <div>
                <label class="text-slate-900 text-sm font-medium mb-2 block">Confirm Password</label>
                <input name="cpassword" type="password" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter confirm password" />
              </div>

              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="remember-me" class="text-slate-600 ml-3 block text-sm">
                  I accept the <a href="#" class="text-blue-600 font-medium hover:underline ml-1">Terms and Conditions</a>
                </label>
              </div>
            </div>

            <div class="mt-12">
              <button type="button" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                Create an account
              </button>
            </div>
            <p class="text-slate-600 text-sm mt-6 text-center">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline ml-1">Login here</a></p>
          </form>
        </div>
</x-layouts.guest-layout>
