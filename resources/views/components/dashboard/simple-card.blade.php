@props([
    'number',
    'title',
    'desc',
    'btnLink',
    'btnText'
])

<div class="bg-teal-700 text-white rounded shadow text-center p-6">
    <p class="text-4xl">{{ $number }}</p>

    <h2 class="text-lg">
        {{ $title }}
    </h2>

    <p class="text-xs mt-1">
        {{ $desc }}
    </p>

    <a href="{{ $btnLink }}">
        <button
            class="mt-3 cursor-pointer bg-linear-to-r from-teal-500 to-sky-500 px-3 py-1 rounded-full">
            {{ $btnText }}
        </button>
    </a>
</div>
