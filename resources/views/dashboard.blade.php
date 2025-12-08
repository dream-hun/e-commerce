<x-layouts.authenticated-layout>
    <div class="p-6 space-y-6 bg-gray-50 min-h-screen font-sans">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Dashboard</h1>
                <p class="text-sm text-slate-500 mt-1">Saturday, December 3, 2024</p>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <!-- Search (visible on desktop) -->
                <div class="relative hidden lg:block mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Search" class="pl-9 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:border-teal-500 w-64">
                    <div class="absolute right-2 top-1/2 -translate-y-1/2 flex items-center gap-1">
                        <span class="px-1.5 py-0.5 rounded border border-slate-200 bg-slate-50 text-[10px] text-slate-400">⌘</span>
                        <span class="px-1.5 py-0.5 rounded border border-slate-200 bg-slate-50 text-[10px] text-slate-400">F</span>
                    </div>
                </div>

                <button class="flex items-center gap-2 px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Aug 16, 2024 - Sep 16, 2024
                </button>
                <button class="flex items-center gap-2 px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filter
                </button>
                <button class="flex items-center gap-2 px-3 py-2 bg-teal-600 text-white rounded-lg text-sm font-medium hover:bg-teal-700 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Export
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Total Income -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-slate-600">Total Income</span>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-1.5 py-0.5 rounded">↗ 43%</span>
                            <span class="text-xs text-slate-400">Compared to last month</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">$994,373</h3>
                    </div>
                    <!-- Mini Bar Chart -->
                    <div class="flex items-end gap-1 h-10 w-20">
                        <div class="w-2 bg-slate-100 rounded-t h-[60%]"></div>
                        <div class="w-2 bg-slate-100 rounded-t h-[40%]"></div>
                        <div class="w-2 bg-slate-100 rounded-t h-[75%]"></div>
                        <div class="w-2 bg-teal-100 rounded-t h-[50%]"></div>
                        <div class="w-2 bg-teal-200 rounded-t h-[80%]"></div>
                        <div class="w-2 bg-teal-500 rounded-t h-full"></div>
                    </div>
                </div>
            </div>

            <!-- Profit -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-slate-600">Profit</span>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-1.5 py-0.5 rounded">↗ 32%</span>
                            <span class="text-xs text-slate-400">Compared to last month</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">$920,650</h3>
                    </div>
                    <!-- Mini Bar Chart -->
                    <div class="flex items-end gap-1 h-10 w-20">
                         <div class="w-2 bg-slate-100 rounded-t h-[30%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[50%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[40%]"></div>
                         <div class="w-2 bg-teal-100 rounded-t h-[60%]"></div>
                         <div class="w-2 bg-teal-200 rounded-t h-[45%]"></div>
                         <div class="w-2 bg-teal-500 rounded-t h-[70%]"></div>
                    </div>
                </div>
            </div>

            <!-- Pending Orders -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-slate-600">Pending Orders</span>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-red-600 bg-red-50 px-1.5 py-0.5 rounded">↘ 12%</span>
                            <span class="text-xs text-slate-400">Compared to last month</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">420 +</h3>
                    </div>
                    <!-- Mini Bar Chart -->
                     <div class="flex items-end gap-1 h-10 w-20">
                         <div class="w-2 bg-slate-100 rounded-t h-[80%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[60%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[70%]"></div>
                         <div class="w-2 bg-teal-100 rounded-t h-[40%]"></div>
                         <div class="w-2 bg-teal-200 rounded-t h-[50%]"></div>
                         <div class="w-2 bg-teal-500 rounded-t h-[30%]"></div>
                    </div>
                </div>
            </div>

            <!-- Conversion Rate -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-slate-600">Conversion Rate</span>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-1.5 py-0.5 rounded">↗ 15%</span>
                            <span class="text-xs text-slate-400">Compared to last month</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">4,38 %</h3>
                    </div>
                    <!-- Mini Bar Chart -->
                    <div class="flex items-end gap-1 h-10 w-20">
                         <div class="w-2 bg-slate-100 rounded-t h-[40%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[50%]"></div>
                         <div class="w-2 bg-slate-100 rounded-t h-[30%]"></div>
                         <div class="w-2 bg-teal-100 rounded-t h-[60%]"></div>
                         <div class="w-2 bg-teal-200 rounded-t h-[70%]"></div>
                         <div class="w-2 bg-teal-500 rounded-t h-[80%]"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Revenue Over Time -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                         <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">Revenue Over Time</h3>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-2 py-1 rounded hover:bg-slate-50 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                         <button class="text-slate-400 hover:text-slate-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-2 mb-8">
                     <h2 class="text-3xl font-bold text-slate-900">$90,650,278</h2>
                     <span class="text-sm font-medium text-teal-600">↗ 56%</span>
                     <span class="text-sm text-slate-500">Increased vs last month</span>
                </div>

                <!-- Mock Bar Chart -->
                <div class="h-64 flex items-end justify-between gap-2 sm:gap-4 w-full">
                     <!-- Y-Axis labels (hidden for simplicity or mocked side) -->
                     @foreach(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'] as $month)
                     <div class="w-full flex flex-col items-center gap-2 group">
                         <div class="w-full bg-slate-100 rounded-t-sm relative h-48 group-hover:bg-slate-200 flex items-end justify-center gap-[1px]">
                             <!-- Mock Stacked/Grouped Bars -->
                             <div class="w-[30%] bg-teal-600 rounded-t-sm" style="height: {{ rand(30, 90) }}%"></div>
                             <div class="w-[30%] bg-teal-400 rounded-t-sm" style="height: {{ rand(20, 70) }}%"></div>
                             <div class="w-[30%] bg-teal-200 rounded-t-sm" style="height: {{ rand(10, 50) }}%"></div>
                         </div>
                         <span class="text-xs text-slate-400 font-medium">{{ $month }}</span>
                     </div>
                     @endforeach
                </div>
            </div>

            <!-- Revenue Breakdown -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">Revenue Breakdown</h3>
                    </div>
                     <div class="flex items-center gap-2">
                        <button class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-2 py-1 rounded hover:bg-slate-50 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                         <button class="text-slate-400 hover:text-slate-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-2 mb-8">
                     <h2 class="text-3xl font-bold text-slate-900">$4,650,278</h2>
                     <span class="text-sm font-medium text-red-600">↘ 39%</span>
                     <span class="text-sm text-slate-500">Increased vs last month</span>
                </div>

                <!-- Mock Line Chart -->
                <div class="h-64 relative w-full">
                    <!-- Grid Lines -->
                    <div class="absolute inset-0 flex flex-col justify-between text-xs text-slate-400">
                         <div class="flex items-center w-full"><span class="w-8">1800</span><div class="h-px bg-slate-100 flex-1 ml-2"></div></div>
                         <div class="flex items-center w-full"><span class="w-8">1200</span><div class="h-px bg-slate-100 flex-1 ml-2"></div></div>
                         <div class="flex items-center w-full"><span class="w-8">800</span><div class="h-px bg-slate-100 flex-1 ml-2"></div></div>
                         <div class="flex items-center w-full"><span class="w-8">400</span><div class="h-px bg-slate-100 flex-1 ml-2"></div></div>
                         <div class="flex items-center w-full"><span class="w-8">0</span><div class="h-px bg-slate-100 flex-1 ml-2"></div></div>
                    </div>

                    <!-- Line Path SVG -->
                    <svg class="absolute inset-0 left-10 w-[calc(100%-2.5rem)] h-full overflow-visible" preserveAspectRatio="none">
                        <path d="M0 160 L50 160 L100 120 L150 120 L200 120 L250 160 L300 150 L350 110 L400 160 L450 130 L500 130 L550 150 L600 150"
                              fill="none" stroke="#0d9488" stroke-width="2" />
                        <path d="M0 130 L50 130 L100 90 L150 100 L200 130 L250 100 L300 120 L350 140 L400 100 L450 110 L500 140 L550 120 L600 140"
                              fill="none" stroke="#99f6e4" stroke-width="2" />

                        <!-- Tooltip Mock -->
                        <g transform="translate(350, 60)">
                             <rect x="0" y="0" width="100" height="60" rx="4" fill="white" stroke="#e2e8f0" stroke-width="1" filter="url(#shadow)" />
                             <text x="10" y="20" font-size="10" fill="#64748b">May 15, 2024</text>
                             <circle cx="15" cy="35" r="3" fill="#0d9488" />
                             <text x="25" y="38" font-size="10" fill="#1e293b">Online Sales</text>
                             <text x="80" y="38" font-size="10" fill="#1e293b" text-anchor="end">812</text>

                             <circle cx="15" cy="50" r="3" fill="#99f6e4" />
                             <text x="25" y="53" font-size="10" fill="#1e293b">Offline Sales</text>
                             <text x="80" y="53" font-size="10" fill="#1e293b" text-anchor="end">127</text>
                        </g>
                    </svg>

                     <!-- X-Axis -->
                    <div class="absolute bottom-0 left-10 right-0 flex justify-between text-xs text-slate-400 translate-y-6">
                        <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Product Sales -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm lg:col-span-2">
                 <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                         <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">Product Sales</h3>
                    </div>
                    <div class="flex items-center gap-2">
                         <button class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-2 py-1 rounded hover:bg-slate-50 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                         <button class="text-slate-400 hover:text-slate-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-6 mb-8">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="text-2xl font-bold text-slate-900">624,071</h4>
                            <span class="text-sm font-medium text-slate-500">Sales</span>
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-1.5 py-0.5 rounded">↗ 56%</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="text-2xl font-bold text-slate-900">832,210</h4>
                            <span class="text-sm font-medium text-slate-500">Sales</span>
                            <span class="text-xs font-medium text-red-600 bg-red-50 px-1.5 py-0.5 rounded">↘ 12%</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="text-2xl font-bold text-slate-900">454,410</h4>
                            <span class="text-sm font-medium text-slate-500">Sales</span>
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-1.5 py-0.5 rounded">↗ 56%</span>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead>
                            <tr class="text-slate-400 border-b border-slate-100">
                                <th class="pb-3 font-medium">Product Name</th>
                                <th class="pb-3 font-medium text-right">Units Sold</th>
                                <th class="pb-3 font-medium px-6">Product Name</th>
                                <th class="pb-3 font-medium text-right">Units Sold</th>
                                <th class="pb-3 font-medium px-6">Product Name</th>
                                <th class="pb-3 font-medium text-right">Units Sold</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <tr>
                                <td class="py-3 text-slate-600">iPhone 14</td>
                                <td class="py-3 text-right font-semibold text-teal-600">213+</td>
                                <td class="py-3 px-6 text-slate-600">Levi's 501 Jeans</td>
                                <td class="py-3 text-right font-semibold text-teal-600">420+</td>
                                <td class="py-3 px-6 text-slate-600">IKEA Bookcase</td>
                                <td class="py-3 text-right font-semibold text-teal-600">200+</td>
                            </tr>
                             <tr>
                                <td class="py-3 text-slate-600">Galaxy Tab S9</td>
                                <td class="py-3 text-right font-semibold text-teal-600">182+</td>
                                <td class="py-3 px-6 text-slate-600">Nike Air Force 1</td>
                                <td class="py-3 text-right font-semibold text-teal-600">262+</td>
                                <td class="py-3 px-6 text-slate-600">Dyson Air Purifier</td>
                                <td class="py-3 text-right font-semibold text-teal-600">120+</td>
                            </tr>
                             <tr>
                                <td class="py-3 text-slate-600">WH-1000XM5</td>
                                <td class="py-3 text-right font-semibold text-teal-600">142+</td>
                                <td class="py-3 px-6 text-slate-600">Michael Tote Bag</td>
                                <td class="py-3 text-right font-semibold text-teal-600">236+</td>
                                <td class="py-3 px-6 text-slate-600">Instant Pot Duo</td>
                                <td class="py-3 text-right font-semibold text-teal-600">97+</td>
                            </tr>
                             <tr>
                                <td class="py-3 text-slate-600">Garmin Venu 2</td>
                                <td class="py-3 text-right font-semibold text-teal-600">138+</td>
                                <td class="py-3 px-6 text-slate-600">Slim Fit Blazer</td>
                                <td class="py-3 text-right font-semibold text-teal-600">92+</td>
                                <td class="py-3 px-6 text-slate-600">Hue Smart Light</td>
                                <td class="py-3 text-right font-semibold text-teal-600">95+</td>
                            </tr>
                            <tr>
                                <td class="py-3 text-slate-600">PlayStation 5</td>
                                <td class="py-3 text-right font-semibold text-teal-600">85+</td>
                                <td class="py-3 px-6 text-slate-600">Fleece Jacket</td>
                                <td class="py-3 text-right font-semibold text-teal-600">21+</td>
                                <td class="py-3 px-6 text-slate-600">Foam Mattress</td>
                                <td class="py-3 text-right font-semibold text-teal-600">20+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sales by Category -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                 <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                         <div class="p-1.5 bg-teal-50 rounded text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">Sales by Category</h3>
                    </div>
                     <div class="flex items-center gap-2">
                        <button class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-2 py-1 rounded hover:bg-slate-50 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                         <button class="text-slate-400 hover:text-slate-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-center my-8 relative">
                    <svg width="200" height="200" viewBox="0 0 200 200" class="transform -rotate-90">
                        <!-- Circle Background -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#f1f5f9" stroke-width="24" />

                        <!-- Segments -->
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#0f766e" stroke-width="24" stroke-dasharray="180 500" stroke-dashoffset="0" />
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#2dd4bf" stroke-width="24" stroke-dasharray="120 500" stroke-dashoffset="-180" />
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#99f6e4" stroke-width="24" stroke-dasharray="70 500" stroke-dashoffset="-300" />
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="text-slate-500 text-sm font-medium">Total</span>
                        <span class="text-teal-700 text-2xl font-bold">$102,000</span>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                             <div class="w-3 h-3 rounded-full bg-teal-700"></div>
                             <span class="text-sm font-medium text-slate-700">Electronics</span>
                        </div>
                        <div class="text-right">
                             <span class="block text-sm font-bold text-slate-900">54,071</span>
                             <span class="block text-xs text-slate-400">sales</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                             <div class="w-3 h-3 rounded-full bg-teal-400"></div>
                             <span class="text-sm font-medium text-slate-700">Fashion</span>
                        </div>
                        <div class="text-right">
                             <span class="block text-sm font-bold text-slate-900">32,210</span>
                             <span class="block text-xs text-slate-400">sales</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                             <div class="w-3 h-3 rounded-full bg-teal-200"></div>
                             <span class="text-sm font-medium text-slate-700">Home & Living</span>
                        </div>
                        <div class="text-right">
                             <span class="block text-sm font-bold text-slate-900">24,410</span>
                             <span class="block text-xs text-slate-400">sales</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.authenticated-layout>
