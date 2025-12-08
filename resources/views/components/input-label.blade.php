@props(['value'])

<label {{ $attributes->merge(['class'=>'block text-slate-900 text-sm font-medium mb-2 block']) }}>
  {{ $value ?? $slot }}
</label>
