@props([])

<div {{ $attributes->merge(['class' => 'flex flex-1 flex-col gap-6 overflow-y-auto px-4 py-6']) }}>
    {{ $slot }}
</div>
