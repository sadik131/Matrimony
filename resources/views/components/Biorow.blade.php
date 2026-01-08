@props(['label'])

<div class="flex flex-col  border-b-[#E5E7EB] md:flex-row">
    <div class="w-full px-4 py-2 font-medium text-gray-700 border-[#E5E7EB] border-r">
        {{ $label }}
    </div>

    <div class="w-full px-4 py-2 text-sm text-gray-700">
        {{ $slot }}
    </div>
</div>
