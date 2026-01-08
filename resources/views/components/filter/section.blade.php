@props(['title'])

<div x-data="{ open: false }" class="rounded-sm shadow-sm border border-[#E5E7EB] mt-5">
    <button
        type="button"
        class="flex justify-between items-center w-full px-4 py-2 font-medium text-left text-teal-500 bg-teal-50"
        @click="open = !open"
    >
        {{ $title }}

        <svg
            class="w-4 h-4 ml-2 transform transition-transform"
            :class="{ 'rotate-180': open }"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div
        x-show="open"
        {{-- x-transition --}}
        class="px-4 pt-5 pb-4"
    >
        {{ $slot }}
    </div>
</div>
