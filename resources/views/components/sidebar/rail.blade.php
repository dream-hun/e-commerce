<button
    @click="toggleSidebar"
    {{ $attributes->merge(['class' => 'absolute inset-y-0 -right-4 z-20 hidden w-4 transition-all ease-linear group-data-[side=left]:right-0 group-data-[side=right]:left-0 after:absolute after:inset-y-0 after:left-1/2 after:w-[2px] after:-translate-x-1/2 hover:after:bg-sidebar-border lg:flex']) }}
    aria-label="Toggle sidebar"
>
</button>
