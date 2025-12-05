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
<div class="bg-gray-50 px-4 py-8">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex flex-wrap justify-between items-center gap-6">
                    <div class="max-w-96">
                        <h2 class="text-slate-900 text-2xl font-bold mb-3">Order History</h2>
                        <p class="text-base text-slate-600">View and manage your past orders</p>
                    </div>
                    <div>
                        <input
                            type="text"
                            class="px-4 py-2.5 bg-white border border-gray-400 text-slate-900 w-full text-sm rounded-md focus:outline-indigo-600"
                            placeholder="Search orders..."
                        />
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-8 mt-12">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="text-[15px] font-medium text-slate-600">Filter by:</span>
                        <button class="px-4 py-2 cursor-pointer bg-indigo-600 border border-indigo-600 text-white rounded-md text-sm font-medium hover:bg-indigo-700 transition">All Orders</button>
                        <button class="px-4 py-2 cursor-pointer bg-white border border-gray-300 text-slate-900 rounded-md text-sm font-medium hover:bg-gray-50 transition">Completed</button>
                        <button class="px-4 py-2 cursor-pointer bg-white border border-gray-300 text-slate-900 rounded-md text-sm font-medium hover:bg-gray-50 transition">Processing</button>
                        <button class="px-4 py-2 cursor-pointer bg-white border border-gray-300 text-slate-900 rounded-md text-sm font-medium hover:bg-gray-50 transition">Cancelled</button>
                    </div>
                    <div class="ml-auto">
                        <select class="appearance-none px-4 py-2.5 bg-white border border-gray-400 text-slate-900 w-full text-sm rounded-md focus:outline-indigo-600 cursor-pointer">
                            <option>Sort by: Newest</option>
                            <option>Sort by: Oldest</option>
                            <option>Sort by: Price (High to Low)</option>
                            <option>Sort by: Price (Low to High)</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-6 mt-6">
                    <div class="bg-white rounded-xl border border-gray-300 overflow-hidden p-6">
                        <div class="flex flex-wrap justify-between gap-6">
                            <div class="max-w-96">
                                <div class="flex items-center gap-4">
                                    <span class="text-[15px] font-semibold text-slate-600">Order #3245</span>
                                    <span class="px-3 py-1.5 bg-green-100 text-green-900 text-xs font-medium rounded-md">Delivered</span>
                                </div>
                                <p class="text-slate-600 text-sm mt-3">Placed on May 12, 2025 at 12:30 PM</p>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-semibold text-slate-900">$248.75</p>
                                <p class="text-slate-600 text-sm mt-2">3 items</p>
                            </div>
                        </div>

                        <hr class="border-gray-300 my-6" />

                        <div class="flex flex-wrap items-center gap-8">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/dark-green-tshirt-2.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Tshirt</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/product14.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Echo Elegance</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/watch5.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Smart Watch Timex</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 511.999 511.999">
                                    <path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" data-original="#000000" />
                                    <path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" data-original="#000000" />
                                </svg>
                                View Details
                            </button>
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M12.005 23.8c-3.186 0-6.136-1.18-8.378-3.422-.472-.472-.472-1.18 0-1.652s1.18-.472 1.652 0c1.888 1.77 4.248 2.714 6.726 2.714 5.192 0 9.44-4.248 9.44-9.44s-4.248-9.44-9.44-9.44c-2.478 0-4.838.944-6.726 2.714-.944.944-2.95 3.304-3.068 3.422-.472.472-1.18.59-1.652.118s-.59-1.18-.118-1.652c.118-.118 2.124-2.478 3.186-3.422C5.869 1.38 8.819.2 12.005.2c6.49 0 11.8 5.31 11.8 11.8s-5.31 11.8-11.8 11.8z" data-original="#000000" />
                                    <path d="M6.105 9.05h-4.72c-.708 0-1.18-.472-1.18-1.18V3.15c0-.708.472-1.18 1.18-1.18s1.18.472 1.18 1.18v3.54h3.54c.708 0 1.18.472 1.18 1.18s-.472 1.18-1.18 1.18z" data-original="#000000" />
                                </svg>
                                Reorder
                            </button>
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 512 512">
                                    <path d="m433.798 106.268-96.423-91.222C327.119 5.343 313.695 0 299.577 0H116C85.673 0 61 24.673 61 55v402c0 30.327 24.673 55 55 55h280c30.327 0 55-24.673 55-55V146.222c0-15.049-6.27-29.612-17.202-39.954zM404.661 120H330c-2.757 0-5-2.243-5-5V44.636zM396 482H116c-13.785 0-25-11.215-25-25V55c0-13.785 11.215-25 25-25h179v85c0 19.299 15.701 35 35 35h91v307c0 13.785-11.215 25-25 25z" data-original="#000000" />
                                    <path d="M363 200H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h220c8.284 0 15-6.716 15-15s-6.716-15-15-15zm0 80H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h220c8.284 0 15-6.716 15-15s-6.716-15-15-15zm-147.28 80H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h72.72c8.284 0 15-6.716 15-15s-6.716-15-15-15z" data-original="#000000" />
                                </svg>
                                Invoice
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-gray-300 overflow-hidden p-6">
                        <div class="flex flex-wrap justify-between gap-6">
                            <div class="max-w-96">
                                <div class="flex items-center gap-4">
                                    <span class="text-[15px] font-semibold text-slate-600">Order #8651</span>
                                    <span class="px-3 py-1.5 bg-green-100 text-green-900 text-xs font-medium rounded-md">Delivered</span>
                                </div>
                                <p class="text-slate-600 text-sm mt-3">Placed on May 16, 2025 at 10:30 AM</p>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-semibold text-slate-900">$208.00</p>
                                <p class="text-slate-600 text-sm mt-2">3 items</p>
                            </div>
                        </div>

                        <hr class="border-gray-300 my-6" />

                        <div class="flex flex-wrap items-center gap-8">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/sunscreen-img-6.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Organic Sunscreen</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/faceclin-facewash-img-1.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Facewash</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 p-1 rounded-md overflow-hidden">
                                    <img src="https://readymadeui.com/images/purple-sweaters-3.webp" alt="Product" class="w-full h-full object-contain" />
                                </div>
                                <div>
                                    <p class="text-[15px] font-medium text-slate-900">Sweater</p>
                                    <p class="text-xs text-slate-600 mt-1">Qty: 1</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 511.999 511.999">
                                    <path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 0 0 0 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 0 0 0-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z" data-original="#000000" />
                                    <path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z" data-original="#000000" />
                                </svg>
                                View Details
                            </button>
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M12.005 23.8c-3.186 0-6.136-1.18-8.378-3.422-.472-.472-.472-1.18 0-1.652s1.18-.472 1.652 0c1.888 1.77 4.248 2.714 6.726 2.714 5.192 0 9.44-4.248 9.44-9.44s-4.248-9.44-9.44-9.44c-2.478 0-4.838.944-6.726 2.714-.944.944-2.95 3.304-3.068 3.422-.472.472-1.18.59-1.652.118s-.59-1.18-.118-1.652c.118-.118 2.124-2.478 3.186-3.422C5.869 1.38 8.819.2 12.005.2c6.49 0 11.8 5.31 11.8 11.8s-5.31 11.8-11.8 11.8z" data-original="#000000" />
                                    <path d="M6.105 9.05h-4.72c-.708 0-1.18-.472-1.18-1.18V3.15c0-.708.472-1.18 1.18-1.18s1.18.472 1.18 1.18v3.54h3.54c.708 0 1.18.472 1.18 1.18s-.472 1.18-1.18 1.18z" data-original="#000000" />
                                </svg>
                                Reorder
                            </button>
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm text-slate-900 font-medium cursor-pointer hover:bg-gray-50 transition flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 512 512">
                                    <path d="m433.798 106.268-96.423-91.222C327.119 5.343 313.695 0 299.577 0H116C85.673 0 61 24.673 61 55v402c0 30.327 24.673 55 55 55h280c30.327 0 55-24.673 55-55V146.222c0-15.049-6.27-29.612-17.202-39.954zM404.661 120H330c-2.757 0-5-2.243-5-5V44.636zM396 482H116c-13.785 0-25-11.215-25-25V55c0-13.785 11.215-25 25-25h179v85c0 19.299 15.701 35 35 35h91v307c0 13.785-11.215 25-25 25z" data-original="#000000" />
                                    <path d="M363 200H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h220c8.284 0 15-6.716 15-15s-6.716-15-15-15zm0 80H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h220c8.284 0 15-6.716 15-15s-6.716-15-15-15zm-147.28 80H143c-8.284 0-15 6.716-15 15s6.716 15 15 15h72.72c8.284 0 15-6.716 15-15s-6.716-15-15-15z" data-original="#000000" />
                                </svg>
                                Invoice
                            </button>
                        </div>
                    </div>
                </div>


                <div class="mt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-slate-600">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">12</span> orders
                    </div>

                    <div class="flex gap-3">
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-50 transition disabled:opacity-50" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 492 492">
                                <path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" data-original="#000000" />
                            </svg>
                        </button>
                        <button class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm font-medium hover:bg-indigo-700 transition cursor-pointer">1</button>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-50 transition cursor-pointer">2</button>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-50 transition cursor-pointer">3</button>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-50 transition cursor-pointer">4</button>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm font-medium hover:bg-gray-50 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 492.004 492.004">
                                <path d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z" data-original="#000000" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
