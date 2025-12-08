@props(['showIcon' => false])

<div class="flex items-center gap-2 rounded-md px-2 py-1.5">
    @if($showIcon)
        <div class="h-4 w-4 animate-pulse rounded bg-sidebar-accent"></div>
    @endif
    <div class="h-4 flex-1 animate-pulse rounded bg-sidebar-accent"></div>
</div>
