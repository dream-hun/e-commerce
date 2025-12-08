@props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'text-slate-900 bg-white border border-gray-300 text-sm px-4 py-3 rounded-md outline-blue-500']) }} />
