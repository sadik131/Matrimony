@props([
    'label',
    'required' => false,
    'rows' => 4,
    'hint' => null,
])

<div>
    <label class="text-gray-600 text-sm">
        {{ $label }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>

    <textarea
        rows="{{ $rows }}"
        class="w-full border border-gray-300 rounded-md p-3 bg-gray-50 text-gray-600 text-xs outline-none focus:border-teal-500"
    ></textarea>

    @if($hint)
        <p class="text-xs pt-2 text-teal-600">{!! $hint !!}</p>
    @endif
</div>
