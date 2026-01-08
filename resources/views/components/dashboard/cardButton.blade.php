@props(['text','date'])

<div>
    <button class="bg-teal-700 text-white px-2.5 py-1.5 rounded text-sm">
        {{ $text }}
    </button>
    <p class="pt-1.5 text-gray-700">{{ $date }}</p>
</div>