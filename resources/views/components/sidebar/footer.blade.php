@props([])

<div {{ $attributes->merge(['class' => 'mt-auto border-t border-slate-100 p-4']) }}>
    {{ $slot }}
</div>
