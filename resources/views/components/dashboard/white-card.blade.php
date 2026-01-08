@props(['number', 'title', 'desc'])

<div class="bg-white rounded shadow text-center p-6 overflow-hidden">
    <p class="text-4xl text-teal-700">{{ $number }}</p>
    <h2 class="text-lg text-teal-700">{{ $title }}</h2>

    <p class="text-xs mt-1 text-gray-700 py-2">
        {{ $desc }}
    </p>

    {{ $slot }}
</div>
