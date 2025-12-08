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
<body class="bg-slate-50">
    <x-sidebar.provider>
        <x-sidebar>
            <!-- Sidebar Header -->
            <x-sidebar.header>
                <!-- Expanded State -->
                <template x-if="open || isMobile">
                    <div class="flex items-center justify-between w-full">
                        <div class="flex items-center gap-2">
                            <!-- Logo -->
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-teal-600 text-white shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                    <polyline points="9 22 9 12 15 12 15 22"/>
                                </svg>
                            </div>
                            <span class="text-lg font-bold text-slate-800">
                                {{ config('app.name', 'Revello') }}
                            </span>
                        </div>
                        <x-sidebar.trigger />
                    </div>
                </template>

                <!-- Collapsed State - Show expand button -->
                <template x-if="!open && !isMobile">
                    <div class="flex items-center justify-center w-full">
                        <button
                            @click="toggleSidebar"
                            class="flex h-8 w-8 items-center justify-center rounded-lg bg-teal-600 text-white hover:bg-teal-700 transition-colors"
                            title="Expand sidebar"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </button>
                    </div>
                </template>
            </x-sidebar.header>

            <!-- Sidebar Content -->
            <x-sidebar.content>
                <!-- GENERAL Section -->
                <div>
                    <x-sidebar.group-label>General</x-sidebar.group-label>
                    <x-sidebar.menu>
                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="{{ route('dashboard') }}"
                                :active="request()->routeIs('dashboard')"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>'
                            >
                                Dashboard
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>'
                            >
                                Payment
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
                            >
                                Customers
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>'
                            >
                                Message
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>
                    </x-sidebar.menu>
                </div>

                <!-- TOOLS Section -->
                <div>
                    <x-sidebar.group-label>Tools</x-sidebar.group-label>
                    <x-sidebar.menu>
                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="{{ route('shop') }}"
                                :active="request()->routeIs('shop')"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>'
                            >
                                Product
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="{{ route('account.orders.index') }}"
                                :active="request()->routeIs('account.orders.*')"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/><path d="M10 9H8"/></svg>'
                            >
                                Invoice
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>'
                            >
                                Analytics
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>
                    </x-sidebar.menu>
                </div>

                <!-- SUPPORT Section -->
                <div>
                    <x-sidebar.group-label>Support</x-sidebar.group-label>
                    <x-sidebar.menu>
                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="{{ route('settings.password.edit') }}"
                                :active="request()->routeIs('settings.password.edit')"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>'
                            >
                                Settings
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>'
                            >
                                Security
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>

                        <x-sidebar.menu-item>
                            <x-sidebar.menu-button
                                href="#"
                                :active="false"
                                icon='<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>'
                            >
                                Help
                            </x-sidebar.menu-button>
                        </x-sidebar.menu-item>
                    </x-sidebar.menu>
                </div>
            </x-sidebar.content>

            <!-- Sidebar Footer - User Profile -->
            <x-sidebar.footer>
                <div class="flex items-center gap-3" :class="!open && !isMobile ? 'justify-center' : ''">
                    <!-- User Avatar -->
                    <div class="relative shrink-0">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-teal-400 to-teal-600 text-white font-semibold text-sm">
                            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                        </div>
                        <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-2 ring-white"></span>
                    </div>

                    <!-- User Info -->
                    <div class="flex-1 min-w-0" x-show="open || isMobile" x-transition.opacity>
                        <p class="text-sm font-semibold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 truncate">Team Marketing</p>
                    </div>

                    <!-- Dropdown -->
                    <button type="button" class="text-slate-400 hover:text-slate-600" x-show="open || isMobile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                </div>

                <!-- Footer text -->
                <p class="mt-4 text-[10px] text-slate-400 text-center" x-show="open || isMobile" x-transition.opacity>
                    &copy;{{ config('app.name') }} {{ date('Y') }}.
                </p>

                <!-- Logout button for collapsed state -->
                <form method="POST" action="/logout" class="mt-2" x-show="!open && !isMobile">
                    @csrf
                    <button type="submit" class="flex w-full items-center justify-center rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" x2="9" y1="12" y2="12"/>
                        </svg>
                    </button>
                </form>
            </x-sidebar.footer>
        </x-sidebar>

        <!-- Main Content Area -->
        <div
            class="flex flex-1 flex-col min-h-screen transition-all duration-300 ease-in-out"
            :class="isMobile ? 'ml-0' : (open ? 'lg:ml-64' : 'lg:ml-16')"
        >
            <!-- Mobile Header -->
            <header class="lg:hidden sticky top-0 z-30 flex h-14 items-center gap-4 border-b border-slate-200 bg-white px-4">
                <button
                    @click="toggleSidebar"
                    class="inline-flex h-9 w-9 items-center justify-center rounded-md text-slate-600 hover:bg-slate-100 hover:text-slate-900"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12"/>
                        <line x1="4" x2="20" y1="6" y2="6"/>
                        <line x1="4" x2="20" y1="18" y2="18"/>
                    </svg>
                </button>
                <span class="text-lg font-semibold text-slate-800">{{ config('app.name', 'Revello') }}</span>
            </header>

            <!-- Desktop Header -->
            <div class="hidden lg:block">
                <x-dashboard.header />
            </div>

            <main class="flex-1 w-full">
                {{ $slot }}
            </main>
        </div>
    </x-sidebar.provider>
</body>
</html>
