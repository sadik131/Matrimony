@props([
    'icon',
    'title',
    'description'
])

<div class="bg-white rounded-2xl p-6 text-center shadow-lg transition">
            <div class="text-5xl mb-4 text-teal-600">
                <!-- Replace with icon -->
                 <i class="{{ $icon }}"></i>
            </div>
            <h3 class="text-xl text-[#262626] font-semibold mb-2">{{ $title }}</h3>
            <p class="text-[#4b5563] text-sm">
                {{ $description }}
            </p>
        </div>