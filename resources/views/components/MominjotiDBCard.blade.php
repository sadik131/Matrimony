@props([
    'image',
    'title',
    'value'
])

<div class="bg-white shadow-lg rounded-xl p-6 text-center">
    <img src="{{ $image }}" alt="Couple" class="w-24 h-24 mx-auto mb-4" />
    <h3 class="text-teal-800 font-semibold text-sm mb-2">{{ $title }}</h3>
    <p class="text-3xl font-bold text-gray-700">{{ $value }}</p>
</div>