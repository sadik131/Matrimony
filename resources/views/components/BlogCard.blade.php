@props([
    'image',
    'category',
    'title',
    'excerpt',
    'link' => '#'
])

<div class="rounded overflow-hidden shadow-lg">

    <div class="relative">
        <a href="{{ $link }}">
            <img class="w-full h-44 object-cover" src="{{ $image }}" alt="">
            <div
                class="hover:bg-transparent transition duration-300 absolute inset-0 bg-gray-900 opacity-25">
            </div>
        </a>

        <div
            class="absolute bottom-0 left-0 bg-teal-600 px-4 py-2 text-white text-sm
                   hover:bg-white hover:text-teal-600 transition duration-500">
            {{ $category }}
        </div>
    </div>

    <div class="px-6 py-4">
        <a href="{{ $link }}"
           class="font-semibold text-lg inline-block hover:text-teal-600 transition">
            {{ $title }}
        </a>

        <p class="text-gray-500 text-sm mt-1">
            {{ $excerpt }}
        </p>
    </div>

    <div class="px-6 py-4">
        <a href="{{ $link }}" class="text-teal-500 text-sm font-medium">
            Read More
        </a>
    </div>

</div>
