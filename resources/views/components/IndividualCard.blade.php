@props([
    'title',
    'text'
])

<div class="relative h-full"> 
    <div class="rounded-lg bg-gradient-to-tr from-sky-300 to-teal-300 p-0.5 shadow-lg h-full">
        <div class="bg-white p-7 rounded-md h-full flex flex-col"> 
            <h1 class="text-xl font-bold mb-2">{{ $title }}</h1>
            <p class="text-gray-600 text-sm text-justify flex-grow">{{$text}}</p>
        </div>
    </div>
</div>