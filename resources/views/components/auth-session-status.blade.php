@props(['status'])

@if ($status)
  <div class="mb-6 bg-green-600 border border-green-700 text-white px-4 py-3 rounded-lg" role="alert">
    {{ $status }}
  </div>
@endif
