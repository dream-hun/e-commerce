<button
    type="button"
    {{ $attributes->merge(['class' => 'absolute right-1 top-1.5 ml-auto h-6 w-6 rounded-md opacity-0 hover:bg-sidebar-accent hover:text-sidebar-accent-foreground group-hover/menu-item:opacity-100 peer-data-[active=true]/menu-button:opacity-100']) }}
>
    {{ $slot }}
</button>
