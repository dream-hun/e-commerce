<x-layouts.guest-layout>
    <div class="container mx-auto">
        <h1>{{ $category->name }}</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 sm:gap-6 gap-6">
            @foreach ($products as $product)
                <x-product :$product />
            @endforeach
        </div>
    </div>
</x-layouts.guest-layout>
