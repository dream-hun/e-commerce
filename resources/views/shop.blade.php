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
<div>
      <div class="flex">
        <div class="bg-gray-50 w-full max-w-[280px] border-r border-gray-100 shrink-0 px-6 sm:px-8 py-6">
          <div class="flex items-center border-b border-gray-300 pb-2 mb-6">
            <h3 class="text-slate-900 text-lg font-semibold">Filter</h3>
            <button type="button" class="text-sm text-red-500 font-semibold ml-auto cursor-pointer">Clear all</button>
          </div>

          <div class="filter-options space-y-6">
            <div>
              <div class="flex items-center gap-2 justify-between cursor-pointer">
                <h4 class="text-slate-900 text-base font-semibold">Price</h4>
              </div>
              <div class="relative mt-4">
                <div class="h-1.5 bg-gray-300 relative">
                  <div id="activeTrack" class="absolute h-1.5 bg-pink-500 rounded-full w-9/12"></div>
                </div>
                <input type="range" id="minRange" min="0" max="1000" value="0" class="absolute top-0 w-full h-1.5 bg-transparent appearance-none cursor-pointer
                      [&::-webkit-slider-thumb]:appearance-none
                      [&::-webkit-slider-thumb]:w-5
                      [&::-webkit-slider-thumb]:h-5
                      [&::-webkit-slider-thumb]:bg-pink-500
                      [&::-webkit-slider-thumb]:rounded-full
                      [&::-webkit-slider-thumb]:border-2
                      [&::-webkit-slider-thumb]:border-white
                      [&::-webkit-slider-thumb]:shadow-md
                      [&::-webkit-slider-thumb]:cursor-pointer
                      [&::-moz-range-thumb]:w-5
                      [&::-moz-range-thumb]:h-5
                      [&::-moz-range-thumb]:bg-pink-500
                      [&::-moz-range-thumb]:rounded-full
                      [&::-moz-range-thumb]:border-2
                      [&::-moz-range-thumb]:border-white
                      [&::-moz-range-thumb]:shadow-md
                      [&::-moz-range-thumb]:cursor-pointer
                      [&::-moz-range-thumb]:border-none" />

                <input type="range" id="maxRange" min="0" max="1000" value="750" class="absolute top-0 w-full h-1.5 bg-transparent appearance-none cursor-pointer
                      [&::-webkit-slider-thumb]:appearance-none
                      [&::-webkit-slider-thumb]:w-5
                      [&::-webkit-slider-thumb]:h-5
                      [&::-webkit-slider-thumb]:bg-pink-500
                      [&::-webkit-slider-thumb]:rounded-full
                      [&::-webkit-slider-thumb]:border-2
                      [&::-webkit-slider-thumb]:border-white
                      [&::-webkit-slider-thumb]:shadow-md
                      [&::-webkit-slider-thumb]:cursor-pointer
                      [&::-moz-range-thumb]:w-5
                      [&::-moz-range-thumb]:h-5
                      [&::-moz-range-thumb]:bg-pink-500
                      [&::-moz-range-thumb]:rounded-full
                      [&::-moz-range-thumb]:border-2
                      [&::-moz-range-thumb]:border-white
                      [&::-moz-range-thumb]:shadow-md
                      [&::-moz-range-thumb]:cursor-pointer
                      [&::-moz-range-thumb]:border-none" />

                <div class="flex justify-between text-slate-600 font-medium text-sm mt-4">
                  <span id="minPrice">$750</span>
                  <span id="maxPrice">$1000</span>
                </div>
              </div>
            </div>

            <div>
              <div class="header flex items-center gap-2 justify-between cursor-pointer">
                <h4 class="text-slate-900 text-base font-semibold">Category</h4>
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="arrow w-[14px] h-[14px] fill-slate-800 transition-all duration-300 -rotate-90"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                    data-original="#000000" />
                </svg>
              </div>
              <div class="collape-content overflow-hidden transition-all duration-300">
                <div class="mt-4">
                  <div
                    class="flex px-3 py-2 rounded-sm border border-gray-300 bg-gray-50 focus-within:bg-white overflow-hidden">
                    <input type="email" placeholder="Search category"
                      class="w-full bg-transparent outline-none text-gray-900 text-sm" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" class="w-3 fill-gray-600">
                      <path
                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                      </path>
                    </svg>
                  </div>
                  <ul class="mt-6 space-y-4">
                    <li class="flex items-center gap-3">
                      <input id="T-Shirts" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="T-Shirts" class="text-slate-600 font-medium text-sm cursor-pointer">T-Shirts</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Jackets" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Jackets" class="text-slate-600 font-medium text-sm cursor-pointer">Jackets</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Sweaters" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Sweaters" class="text-slate-600 font-medium text-sm cursor-pointer">Sweaters</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Sneakers" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Sneakers" class="text-slate-600 font-medium text-sm cursor-pointer">Sneakers</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Crossbody-Bags" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Crossbody-Bags" class="text-slate-600 font-medium text-sm cursor-pointer">Crossbody
                        Bags</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Hair-Tie" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Hair-Tie" class="text-slate-600 font-medium text-sm cursor-pointer">Hair Tie</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Luxury-Timepieces" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Luxury-Timepieces" class="text-slate-600 font-medium text-sm cursor-pointer">Luxury
                        Timepieces</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="Sunglasses" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="Sunglasses" class="text-slate-600 font-medium text-sm cursor-pointer">Sunglasses</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div>
              <div class="header flex items-center gap-2 justify-between cursor-pointer">
                <h4 class="text-slate-900 text-base font-semibold">Brand</h4>
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="arrow w-[14px] h-[14px] fill-slate-800 transition-all duration-300 rotate-90"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                    data-original="#000000" />
                </svg>
              </div>
              <div class="collape-content h-0 overflow-hidden transition-all duration-300">
                <div class="mt-4">
                  <div
                    class="flex px-3 py-2 rounded-sm border border-gray-300 bg-gray-50 focus-within:bg-white overflow-hidden">
                    <input type="email" placeholder="Search brand"
                      class="w-full bg-transparent outline-none text-gray-900 text-sm" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" class="w-3 fill-gray-600">
                      <path
                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                      </path>
                    </svg>
                  </div>
                  <ul class="mt-6 space-y-4">
                    <li class="flex items-center gap-3">
                      <input id="zara" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="zara" class="text-slate-600 font-medium text-sm cursor-pointer">Zara</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="hm" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="hm" class="text-slate-600 font-medium text-sm cursor-pointer">H&M</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="uniqlo" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="uniqlo" class="text-slate-600 font-medium text-sm cursor-pointer">Uniqlo</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="levis" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="levis" class="text-slate-600 font-medium text-sm cursor-pointer">Levi’s</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="nike" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="nike" class="text-slate-600 font-medium text-sm cursor-pointer">Nike</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="adidas" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="adidas" class="text-slate-600 font-medium text-sm cursor-pointer">Adidas</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="puma" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="puma" class="text-slate-600 font-medium text-sm cursor-pointer">Puma</label>
                    </li>
                    <li class="flex items-center gap-3">
                      <input id="tommy" type="checkbox" class="w-4 h-4 cursor-pointer" />
                      <label for="tommy" class="text-slate-600 font-medium text-sm cursor-pointer">Tommy Hilfiger</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div>
              <div class="header flex items-center gap-2 justify-between cursor-pointer">
                <h4 class="text-slate-900 text-base font-semibold">Size</h4>
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="arrow w-[14px] h-[14px] fill-slate-800 transition-all duration-300 rotate-90"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                    data-original="#000000" />
                </svg>
              </div>
              <div class="collape-content h-0 overflow-hidden transition-all duration-300">
                <div class="mt-4">
                  <div class="flex flex-wrap gap-3">
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">XS</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">S</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">M</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">L</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">XL</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">XXL</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">XXXL</button>
                    <button type="button"
                      class="cursor-pointer border border-gray-300 hover:border-blue-600 rounded-md text-[13px] text-slate-600 font-medium py-1 px-1 min-w-14">4XL</button>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="header flex items-center gap-2 justify-between cursor-pointer">
                <h4 class="text-slate-900 text-base font-semibold">Color</h4>
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="arrow w-[14px] h-[14px] fill-slate-800 transition-all duration-300 rotate-90"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M382.678 226.804 163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"
                    data-original="#000000" />
                </svg>
              </div>

              <div class="collape-content h-0 overflow-hidden transition-all duration-300">
                <div class="mt-4">
                  <div class="flex flex-wrap gap-3">
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-blue-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-purple-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-pink-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-orange-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-red-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-yellow-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-black w-8 h-8 hover:scale-[1.05] transition-all"></button>
                    <button type="button"
                      class="cursor-pointer rounded-full text-[13px] text-white font-medium bg-gray-700 w-8 h-8 hover:scale-[1.05] transition-all"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full py-6 px-8">
          <div>
            <h3 class="text-slate-900 text-lg font-semibold mb-4">Recent Searches</h3>
            <div class="flex flex-wrap gap-3">
              <button type="button"
                class="flex items-center gap-2 border border-gray-300 rounded-md text-[13px] text-slate-600 font-medium py-1 px-2">Jackets
                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500"
                  viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
                </svg>
              </button>
              <button type="button"
                class="flex items-center gap-2 border border-gray-300 rounded-md text-[13px] text-slate-600 font-medium py-1 px-2">Tommy
                Hilfiger
                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500"
                  viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
                </svg>
              </button>
              <button type="button"
                class="flex items-center gap-2 border border-gray-300 rounded-md text-[13px] text-slate-600 font-medium py-1 px-2">Orange
                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500"
                  viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
                </svg>
              </button>
              <button type="button"
                class="flex items-center gap-2 border border-gray-300 rounded-md text-[13px] text-slate-600 font-medium py-1 px-2">Zara
                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500"
                  viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
                </svg>
              </button>
              <button type="button"
                class="flex items-center gap-2 border border-gray-300 rounded-md text-[13px] text-slate-600 font-medium py-1 px-2">Jackets
                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500"
                  viewBox="0 0 320.591 320.591">
                  <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                  <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
            <div class="bg-gray-100 w-full h-48 rounded-md"></div>
          </div>
        </div>
      </div>
    </div>
    <x-footer-component/>
</body>
</html>
