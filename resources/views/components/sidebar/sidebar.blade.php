@props([
    'side' => 'left',
    'variant' => 'sidebar',
    'collapsible' => 'icon',
])

<!-- Mobile Overlay -->
<div
    x-show="isMobile && openMobile"
    x-transition:enter="transition-opacity ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click="openMobile = false"
    class="fixed inset-0 z-40 bg-black/50 lg:hidden"
    style="display: none;"
></div>

<!-- Sidebar -->
<aside
    x-cloak
    :class="[
        'group/sidebar fixed inset-y-0 left-0 z-50 flex h-screen flex-col bg-white border-r border-slate-200',
        isMobile
            ? (openMobile ? 'translate-x-0' : '-translate-x-full')
            : (open ? 'w-64' : 'w-16'),
        !isMobile && 'translate-x-0'
    ]"
    class="transition-all duration-300 ease-in-out"
    {{ $attributes }}
    data-side="{{ $side }}"
    data-variant="{{ $variant }}"
    data-collapsible="{{ $collapsible }}"
    :data-state="open ? 'expanded' : 'collapsed'"
>
    {{ $slot }}
</aside>
