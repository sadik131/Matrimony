@props([
    'href',
    'img',
    'number',
    'title',
    'desc'
])

<a href="{{ $href }}">
    <div class="flex items-center gap-3 bg-white rounded shadow text-end p-6">
        <img class="w-14 h-14" src="{{ $img }}" alt="">
        <div>
            <p class="text-4xl text-teal-700">{{ $number }}</p>
            <h2 class="text-lg text-teal-700">{{ $title }}</h2>
            <p class="text-xs mt-1 py-2">{{ $desc }}</p>
        </div>
    </div>
</a>
