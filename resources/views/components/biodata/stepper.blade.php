

<div class="relative">
    <div class="absolute left-3.5 top-5 bottom-5 w-0.5 bg-gray-300 md:h-[470px]"></div>

    <ul class="space-y-4 flex md:flex-col gap-2">
        <template x-for="i in 10" :key="i">
            <li
                class="flex items-center space-x-3 mb-0 md:mt-4 cursor-pointer"
                :class="step === i ? 'text-teal-700' : 'text-gray-600'"
                @click="step = i"
            >
                <span
                    class="w-7 h-7 relative z-10 mr-0 md:mr-3 rounded-full flex items-center justify-center text-sm border-2"
                    :class="step === i
                        ? 'border-[#28CFBA] bg-[#28CFBA] text-white'
                        : 'border-gray-300 bg-white text-gray-700'"
                    x-text="i"
                ></span>

                <span class="hidden md:block text-sm"
                      x-text="titles[i - 1]"></span>
            </li>
        </template>
    </ul>
</div>
