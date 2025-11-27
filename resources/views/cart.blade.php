<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
      <div class="lg:max-w-5xl max-lg:max-w-2xl mx-auto bg-white p-4">
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 bg-gray-100 p-6 rounded-md">
                <h3 class="text-lg font-semibold text-slate-900">Your Cart</h3>
                <hr class="border-gray-300 mt-4 mb-8" />

                <div class="sm:space-y-6 space-y-8">
                    <div class="grid sm:grid-cols-3 items-center gap-4">
                        <div class="sm:col-span-2 flex sm:items-center max-sm:flex-col gap-6">
                            <div class="w-24 h-24 shrink-0 bg-white p-2 rounded-md">
                                <img src='https://readymadeui.com/images/product14.webp' class="w-full h-full object-contain" />
                            </div>
                            <div>
                                <h4 class="text-[15px] font-semibold text-slate-900">Velvet Sneaker</h4>
                                <h6 class="text-xs font-medium text-red-500 cursor-pointer mt-1">Remove</h6>
                                <div class="flex gap-4 mt-4">
                                    <div class="relative group">
                                        <button type="button"
                                            class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs font-medium cursor-pointer outline-0 bg-transparent rounded-md">
                                            XL
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-gray-500 inline ml-2.5" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                    clip-rule="evenodd" data-original="#000000" />
                                            </svg>
                                        </button>
                                        <ul class="group-hover:block hidden absolute rounded-md min-w-[80px] shadow-lg bg-white z-[1000]">
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">SM</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">MD</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XL</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XXL</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs rounded-md">
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 124 124">
                                                    <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                                </svg>
                                            </span>

                                            <span class="mx-3">2</span>
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 42 42">
                                                    <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-auto">
                            <h4 class="text-[15px] font-semibold text-slate-900">$20.00</h4>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 items-center gap-4">
                        <div class="sm:col-span-2 flex sm:items-center max-sm:flex-col gap-6">
                            <div class="w-24 h-24 shrink-0 bg-white p-2 rounded-md">
                                <img src='https://readymadeui.com/images/watch5.webp' class="w-full h-full object-contain" />
                            </div>
                            <div>
                                <h4 class="text-[15px] font-semibold text-slate-900">Smart Watch Timex</h4>
                                <h6 class="text-xs font-medium text-red-500 cursor-pointer mt-1">Remove</h6>
                                <div class="flex gap-4 mt-4">
                                    <div class="relative group">
                                        <button type="button"
                                            class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs font-medium cursor-pointer outline-0 bg-transparent rounded-md">
                                            XL
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-gray-500 inline ml-2.5" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                    clip-rule="evenodd" data-original="#000000" />
                                            </svg>
                                        </button>
                                        <ul class="group-hover:block hidden absolute rounded-md min-w-[80px] shadow-lg bg-white z-[1000]">
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">SM</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">MD</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XL</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XXL</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs rounded-md">
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 124 124">
                                                    <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                                </svg>
                                            </span>

                                            <span class="mx-3">1</span>
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 42 42">
                                                    <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-auto">
                            <h4 class="text-[15px] font-semibold text-slate-900">$120.00</h4>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 items-center gap-4">
                        <div class="sm:col-span-2 flex sm:items-center max-sm:flex-col gap-6">
                            <div class="w-24 h-24 shrink-0 bg-white p-2 rounded-md">
                                <img src='https://readymadeui.com/images/sunglass1.webp' class="w-full h-full object-contain" />
                            </div>
                            <div>
                                <h4 class="text-[15px] font-semibold text-slate-900">Sun Glass</h4>
                                <h6 class="text-xs font-medium text-red-500 cursor-pointer mt-1">Remove</h6>
                                <div class="flex gap-4 mt-4">
                                    <div class="relative group">
                                        <button type="button"
                                            class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs font-medium cursor-pointer outline-0 bg-transparent rounded-md">
                                            XL
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-gray-500 inline ml-2.5" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                    clip-rule="evenodd" data-original="#000000" />
                                            </svg>
                                        </button>
                                        <ul class="group-hover:block hidden absolute rounded-md min-w-[80px] shadow-lg bg-white z-[1000]">
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">SM</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">MD</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XL</li>
                                            <li class="py-2 px-4 hover:bg-gray-100 text-slate-900 text-xs font-medium cursor-pointer">XXL</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="flex items-center px-2.5 py-1.5 border border-gray-300 text-slate-900 text-xs rounded-md">
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 124 124">
                                                    <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                                </svg>
                                            </span>

                                            <span class="mx-3">1</span>
                                            <span class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 fill-current" viewBox="0 0 42 42">
                                                    <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:ml-auto">
                            <h4 class="text-[15px] font-semibold text-slate-900">$50.00</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-100 rounded-md p-6 md:sticky top-0 h-max">
                <h3 class="text-lg font-semibold text-slate-900">Order details</h3>
                <hr class="border-gray-300 mt-4 mb-8" />

                <ul class="text-slate-500 font-medium mt-8 space-y-4">
                    <li class="flex flex-wrap gap-4 text-sm">Discount <span class="ml-auto text-slate-900 font-semibold">$0.00</span></li>
                    <li class="flex flex-wrap gap-4 text-sm">Shipping <span class="ml-auto text-slate-900 font-semibold">$2.00</span></li>
                    <li class="flex flex-wrap gap-4 text-sm">Tax <span class="ml-auto text-slate-900 font-semibold">$4.00</span></li>
                    <li class="flex flex-wrap gap-4 text-sm text-slate-900">Total <span class="ml-auto font-semibold">$216.00</span></li>
                </ul>
                <div class="mt-8 space-y-3">
                    <button type="button" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-blue-600 hover:bg-blue-700 text-white rounded-md cursor-pointer">Checkout</button>
                    <button type="button" class="text-sm px-4 py-2.5 w-full font-medium tracking-wide bg-transparent text-slate-900 border border-gray-300 rounded-md cursor-pointer">Continue Shopping  </button>
                </div>
                <div class="mt-6">
                    <p class="text-slate-900 text-sm font-medium mb-2">Do you have a promo code?</p>
                    <div class="flex border border-blue-600 overflow-hidden rounded-md">
                        <input type="email" placeholder="Promo code"
                            class="w-full outline-0 bg-white text-slate-600 text-sm px-4 py-2.5" />
                        <button type='button' class="flex items-center justify-center font-medium tracking-wide bg-blue-600 hover:bg-blue-700 px-4 text-sm text-white cursor-pointer">
                            Apply
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
