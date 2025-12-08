<button {{ $attributes->merge(['type'=>'submit','class'=>'w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none cursor-pointer']) }}>
  {{ $slot }}
</button>
