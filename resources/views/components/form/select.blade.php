@props(['label' => null, 'required' => false])

<div>
    @if($label || isset($labelSlot))
        <label class="text-gray-600 text-sm">
            {{ $label ?? '' }}
            {{ $labelSlot ?? '' }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <select
        {{ $attributes->merge([
            'class' => 'w-full border border-gray-300 rounded-md p-3 bg-gray-50 text-gray-600 text-xs outline-none focus:border-teal-500'
        ]) }}
    >
        {{ $slot }}
    </select>
</div>
