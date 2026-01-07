@props([
    'icon',
    'title',
    'description'
])

<div class="bg-white rounded-2xl shadow-[0_10px_20px_rgba(0,_0,_0,_0.05)] p-6 text-center shadow-lg transition">
            <div class="text-5xl mb-4 text-teal-600">
                <!-- Replace with icon -->
                 <i class="{{ $icon }}"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
            <p class="text-gray-600 text-sm">
                {{ $description }}
            </p>
        </div>