@props([
    'color' => 'text-teal-600'
])

<h2 class="text-xl font-semibold mt-6 mb-2 {{ $color }}">
    {{ $slot }}
</h2>
