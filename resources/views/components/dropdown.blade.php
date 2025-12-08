@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => ''])

@php
  $alignmentClasses = [
    'left' => 'origin-top-left left-0',
    'right' => 'origin-top-right right-0',
    'top' => 'origin-top',
    'bottom' => 'origin-bottom',
  ][$align] ?? 'origin-top-right right-0';

  $widthClasses = [
    '48' => 'w-48',
  ][$width] ?? 'w-48';
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    @isset($trigger)
        <div @click="open = ! open">
            {{ $trigger }}
        </div>
    @endisset

    <div class="absolute z-50 mt-2 {{ $widthClasses }} rounded-md shadow-lg {{ $alignmentClasses }} {{ $dropdownClasses }} {{ $contentClasses }}" style="display: none;" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        @isset($content)
            {{ $content }}
        @else
            {{ $slot }}
        @endisset
    </div>
</div>
