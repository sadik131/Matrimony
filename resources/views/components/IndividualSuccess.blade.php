@props([
    'title',
    'text'
])

<div class="border-[#] border-t border-b border-r border-l-4 border-l-teal-500 p-5 rounded-md">
    <h1 class="text-xl font-bold mb-2 border-[#E5E7EB] border-b pb-2">{{ $title }} </h1>
    <p class="text-gray-600 text-sm text-justify flex-grow">{{ $text }}</p>
</div>