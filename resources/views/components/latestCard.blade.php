@props([
    'image',
    'number'
])

<div class="slider-slide bg-[#14314d] text-white flex items-center p-4 rounded-md">
    <img src="{{ $image }}" class="w-12 h-12 mr-4" alt="Male Avatar" />
    <div>
        <h4 class="text-lg font-semibold">বায়োডাটা নম্বর</h4>
        <p>{{ $number }}</p>
    </div>
</div>