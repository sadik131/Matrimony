@props(['id', 'label', 'checked' => false])

<div class="flex items-center pt-3">
    <input
        id="{{ $id }}"
        type="checkbox"
        class="peer sr-only"
        {{ $checked ? 'checked' : '' }}
    />

    <label for="{{ $id }}"
        class="relative flex items-center justify-center p-1
               peer-checked:before:hidden
               before:block before:absolute before:w-full before:h-full before:bg-white
               w-4 h-4 cursor-pointer border border-teal-500 rounded overflow-hidden">

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-full fill-teal-500"
             viewBox="0 0 520 520">
            <path
                d="M79.423 240.755a47.529 47.529 0 0 0-36.737 77.522
                   l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009
                   c14.654-.787 27.884-8.626 36.319-21.515L486.588 56.773" />
        </svg>
    </label>

    <p class="text-xs text-slate-600 ml-4">{{ $label }}</p>
</div>
