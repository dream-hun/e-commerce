@props([])

<div
    {{ $attributes->merge(['class' => 'px-2 mb-2 text-[11px] font-semibold uppercase tracking-wider text-slate-400']) }}
    x-show="open || isMobile"
    x-transition.opacity
>
    {{ $slot }}
</div>
