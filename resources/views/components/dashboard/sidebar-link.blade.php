@props([
    'href',
    'icon' => null
])

<a href="{{ $href }}"
   x-bind:class="$root.currentPath === '{{ $href }}'
        ? 'bg-gray-50 text-teal-600 font-semibold'
        : 'hover:bg-gray-50 transition'"
   class="flex items-center gap-3 px-3 py-2 rounded">

    @if($icon)
        <i class="{{ $icon }} text-lg text-gray-500"></i>
    @endif

    {{ $slot }}
</a>
