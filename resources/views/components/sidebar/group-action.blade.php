<button
    type="button"
    {{ $attributes->merge(['class' => 'ml-auto h-4 w-4 rounded-sm opacity-50 hover:opacity-100']) }}
>
    {{ $slot }}
</button>
