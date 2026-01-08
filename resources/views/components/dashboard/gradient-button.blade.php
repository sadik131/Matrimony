@props([
    'type' => 'button',
    'full' => false
])

<button 
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 
            'cursor-pointer mt-4 text-sm font-medium bg-linear-to-r from-teal-500 to-sky-500 text-white px-6 py-2.5 rounded-md hover:opacity-90 ' 
            . ($full ? 'w-full' : '')
    ]) }}
>
    {{ $slot }}
</button>
