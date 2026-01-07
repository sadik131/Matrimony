@props([
    'question',
    'answer',
    'index'
])

<div class="accordion">

    <button
        @click="active === {{ $index }} ? active = null : active = {{ $index }}"
        class="w-full flex items-center text-left font-semibold py-6
               transition-colors duration-300"
        :class="active === {{ $index }} 
            ? 'text-teal-600' 
            : 'text-slate-900 hover:text-teal-600'">

        <span class="mr-4">{{ $question }}</span>

        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 42 42"
             class="w-3 fill-current ml-auto shrink-0 transition-transform duration-300"
             :class="active === {{ $index }} ? 'rotate-45' : ''">
            <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"/>
        </svg>
    </button>

    <div
        x-show="active === {{ $index }}"
        x-collapse
        class="pb-6">
        <p class="text-sm text-slate-600 leading-relaxed">
            {{ $answer }}
        </p>
    </div>

</div>
