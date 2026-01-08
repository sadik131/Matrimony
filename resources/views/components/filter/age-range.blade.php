@props([
    'label',
    'min' => 18,
    'max' => 60,
    'minValue' => 18,
    'maxValue' => 60,
])

<div class="bg-white rounded-lg">
    <label class="block mb-1 text-sm text-gray-700">{{ $label }}</label>

    <div class="relative mt-4 slider-container">
        <!-- MIN -->
        <input
            type="range"
            min="{{ $min }}"
            max="{{ $max }}"
            value="{{ $minValue }}"
            class="range-min"
        >

        <!-- MAX -->
        <input
            type="range"
            min="{{ $min }}"
            max="{{ $max }}"
            value="{{ $maxValue }}"
            class="range-max"
        >

        <!-- TRACK -->
        <div class="relative w-full h-2 bg-gray-200 rounded-md mt-2">
            <div
                class="range-track absolute h-2 bg-linear-to-r from-blue-900 to-blue-400 rounded-md"
            ></div>
        </div>
    </div>

    <!-- VALUES -->
    <div class="flex justify-between mt-3 text-gray-600 text-sm">
        <span class="range-min-value">{{ $minValue }}</span>
        <span class="range-max-value">{{ $maxValue }}</span>
    </div>
</div>
