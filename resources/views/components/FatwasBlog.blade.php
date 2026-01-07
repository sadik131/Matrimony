@props([
    'title',
    'text',
    'link'
])
<div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
    <h3 class="text-xl font-semibold text-teal-800 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 text-sm">{{$text}}</p>
    <a href="#" class="text-teal-600 mt-2 inline-block text-sm font-medium">সম্পূর্ণ পড়ুন →</a>
</div>