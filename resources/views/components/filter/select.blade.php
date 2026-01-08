@props(['label'])

<div class="mb-4">
    <label class="block mb-1 text-sm text-gray-700">{{ $label }}</label>
    <select
        {{ $attributes->merge([
            'class' => 'w-full border border-[#E5E7EB] px-3 py-2 rounded outline-none text-xs text-slate-600'
        ]) }}>
        {{ $slot }}
    </select>
</div>
