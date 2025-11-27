<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>
    <body class="bg-gray-50 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
      <x-header-component/>
        <div class="py-2 px-4 sm:px-6">
            <div class="mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
            <h2 class="text-2xl font-bold text-slate-900 mb-10">Top Categories</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 sm:gap-6 gap-4">

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-1.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Up To 40% OFF</h4>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-2.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Fresh Looks</h4>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-7.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Up To 30% OFF</h4>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-4.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Exclusive Fashion</h4>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-5.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Top Picks for Less</h4>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 shadow-sm overflow-hidden cursor-pointer relative">
                    <div class="aspect-square rounded-full overflow-hidden mx-auto">
                        <img src="https://readymadeui.com/images/fashion-img-6.webp" alt="product1"
                            class="h-full w-full object-cover object-top rounded-lg" />
                    </div>
                    <div class="mt-3 text-center">
                        <h4 class="text-slate-900 text-sm font-semibold">Shop & Save 40%</h4>
                    </div>
                </div>

            </div>
        </div>
        </div>
        <div class="py-24">
        <div class="mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
          <h2 class="text-2xl sm:text-3xl font-semibold text-slate-900 mb-6 sm:mb-8">Premium Sneakers</h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">
            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product9.webp" alt="Product 1"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Sole Elegance</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$10.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product10.webp" alt="Product 2"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Urban Sneakers</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$12.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product11.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Velvet Boots</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$14.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product12.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Summit Hiking</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$12.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product13.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Zenith Glow</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$15.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product14.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Echo Elegance</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$16.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product15.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Pumps</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$12.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>

            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-3">
              <a href="javascript:void(0)" class="block">
                <div class="aspect-[12/11] bg-gray-100 rounded-lg p-4">
                  <img src="https://readymadeui.com/images/product10.webp" alt="Product 3"
                    class="w-full h-full object-contain" />
                </div>

                <div class="flex gap-2 mt-4">
                  <h5 class="text-base font-semibold text-slate-900">Blaze Burst</h5>
                  <h6 class="text-base text-slate-900 font-bold ml-auto">$11.00</h6>
                </div>
                <p class="text-slate-600 text-[13px] mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </a>
              <div class="flex items-center gap-2 mt-6">
                <div
                  class="bg-pink-200 hover:bg-pink-300 w-12 h-9 flex items-center justify-center rounded-lg cursor-pointer" title="Wishlist">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <button type="button" class="text-sm px-2 py-2 font-medium cursor-pointer w-full bg-indigo-600 hover:bg-indigo-700 text-white tracking-wide ml-auto outline-none border-none rounded-lg">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
