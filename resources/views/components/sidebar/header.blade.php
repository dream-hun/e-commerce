@props([])

<div {{ $attributes->merge(['class' => 'flex h-16 items-center border-b border-slate-100 px-4']) }}
    :class="!open && !isMobile ? 'justify-center' : 'justify-between'"
>
    {{ $slot }}
</div>
