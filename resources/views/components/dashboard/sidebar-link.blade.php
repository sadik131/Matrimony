@props([
    'href',
    'currentPath',
    'icon' => null
])

@php
    $isActive = $currentPath === ltrim($href, '/');
@endphp

<a href="{{ $href }}"
   class="flex items-center gap-3 px-3 py-2 rounded
   {{ $isActive
        ? 'bg-gray-50 text-teal-600 font-semibold'
        : 'hover:bg-gray-50 transition text-gray-700' }}">

    @if($icon)
        <i class="{{ $icon }} text-lg {{ $isActive ? 'text-teal-600' : 'text-gray-500' }}"></i>
    @endif

    {{ $slot }}
</a>
