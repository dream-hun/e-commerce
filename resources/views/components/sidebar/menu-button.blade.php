@props([
    'href' => null,
    'active' => false,
    'icon' => null,
])

@php
$baseClasses = 'flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-all duration-150';
$activeClasses = $active
    ? 'bg-teal-50 text-teal-700 border-l-[3px] border-teal-600 -ml-[3px] pl-[calc(0.75rem+3px)]'
    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900';
@endphp

@if($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => "$baseClasses $activeClasses"]) }}
        :class="!open && !isMobile ? 'justify-center !px-2 !gap-0' : ''"
        @if($active) data-active="true" @endif
    >
        @if($icon)
            <span class="shrink-0 {{ $active ? 'text-teal-600' : 'text-slate-400' }}">
                {!! $icon !!}
            </span>
        @endif
        <span class="truncate" x-show="open || isMobile" x-transition.opacity>
            {{ $slot }}
        </span>
    </a>
@else
    <button
        type="button"
        {{ $attributes->merge(['class' => "$baseClasses $activeClasses"]) }}
        :class="!open && !isMobile ? 'justify-center !px-2 !gap-0' : ''"
        @if($active) data-active="true" @endif
    >
        @if($icon)
            <span class="shrink-0 {{ $active ? 'text-teal-600' : 'text-slate-400' }}">
                {!! $icon !!}
            </span>
        @endif
        <span class="truncate" x-show="open || isMobile" x-transition.opacity>
            {{ $slot }}
        </span>
    </button>
@endif
