@props(['title'])

<div
    class="max-w-3xl mx-auto border border-t-2 border-gray-300 border-t-teal-500 mt-5 rounded-md overflow-hidden">
    <div class="bg-white">
        <div class="text-center border-[#E5E7EB] border-b p-4">
            <h2 class="text-xl font-bold text-teal-700">{{ $title }}</h2>
        </div>

        <div class="divide-y">
            {{ $slot }}
        </div>
    </div>
</div>
