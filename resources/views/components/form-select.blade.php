@props([
    'label',
    'options' => [],
    'name' => null
])

<div>
    <label class="block mb-1 font-semibold text-teal-500">
        {{ $label }}
    </label>

    <select
        name="{{ $name }}"
        class="w-full border border-gray-300 rounded-md p-2 bg-gray-50 text-gray-700 outline-none focus:border-teal-500"
    >
        @foreach($options as $option)
            <option value="{{ $option }}">
                {{ $option }}
            </option>
        @endforeach
    </select>
</div>