<header class="sticky top-0 z-30 flex h-14 items-center justify-between gap-4 border-b border-slate-200 bg-white px-6">
    <!-- Search Bar -->
    <div class="flex flex-1 items-center">
        <div class="relative w-full max-w-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input
                type="text"
                placeholder="Search"
                class="h-9 w-full rounded-lg border border-slate-200 bg-slate-50 pl-10 pr-20 text-sm text-slate-600 placeholder-slate-400 outline-none focus:border-teal-500 focus:bg-white focus:ring-1 focus:ring-teal-500"
            >
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 gap-1">
                <kbd class="inline-flex h-5 items-center rounded border border-slate-200 bg-white px-1.5 font-sans text-[10px] font-medium text-slate-400">
                    ⌘
                </kbd>
                <kbd class="inline-flex h-5 items-center rounded border border-slate-200 bg-white px-1.5 font-sans text-[10px] font-medium text-slate-400">
                    F
                </kbd>
            </div>
        </div>
    </div>

    <!-- Right Side Icons -->
    <div class="flex items-center gap-2">
        <!-- Calendar/Grid Icon -->
        <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="7" height="7" x="3" y="3" rx="1"/>
                <rect width="7" height="7" x="14" y="3" rx="1"/>
                <rect width="7" height="7" x="14" y="14" rx="1"/>
                <rect width="7" height="7" x="3" y="14" rx="1"/>
            </svg>
        </button>

        <!-- Notifications -->
        <button type="button" class="relative inline-flex h-9 w-9 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/>
                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/>
            </svg>
            <!-- Notification Badge -->
            <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-red-500"></span>
        </button>

        <!-- Add/Plus Button -->
        <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8"/>
                <path d="M12 8v8"/>
            </svg>
        </button>
    </div>
</header>
