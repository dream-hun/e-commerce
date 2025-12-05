<x-layouts.guest-layout>
        <div class="py-2 px-4 sm:px-6">
            <div class="mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
            <h2 class="text-2xl font-bold text-slate-900 mb-10">Top Categories</h2>
            @if ($categories->isNotEmpty())
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 sm:gap-6 gap-6">
                    @foreach ($categories as $category)
                        <x-category :$category />
                    @endforeach
                </div>
            @else
                <div class="text-center text-gray-500">
                    <p>No categories found.</p>
                </div>
            @endif
        </div>
        </div>
        <div class="py-24">
        <div class="mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
          <h2 class="text-2xl sm:text-3xl font-semibold text-slate-900 mb-6 sm:mb-8">Premium Sneakers</h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">
            @foreach ($products as $product)
              <x-product :$product />
            @endforeach
          </div>
        </div>
</x-layouts.guest-layout>
