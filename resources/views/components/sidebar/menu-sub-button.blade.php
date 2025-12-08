@props(['href' => null, 'active' => false])

@php
$classes = 'flex w-full items-center gap-2 rounded-md px-2 py-1 text-sm transition-colors hover:bg-sidebar-accent hover:text-sidebar-accent-foreground';
$activeClasses = $active ? 'bg-sidebar-accent text-sidebar-accent-foreground font-medium' : '';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "$classes $activeClasses"]) }}>
        {{ $slot }}
    </a>
@else
    <button type="button" {{ $attributes->merge(['class' => "$classes $activeClasses"]) }}>
        {{ $slot }}
    </button>
@endif
