@props([
    'title',
    'titleColor' => 'text-teal-600',
    'features' => [],
    'buttonLink' => '/payment'
])

<div class="bg-white rounded-lg border border-[#E5E7EB] overflow-hidden">

    <!-- Header -->
    <h2 class="{{ $titleColor }} text-xl p-6 bg-teal-100 font-bold text-center
               mb-4 border-b border-[#E5E7EB] pb-2">
        {{ $title }}
    </h2>

    <!-- Features -->
    <ul class="space-y-4 text-gray-800 text-sm leading-relaxed p-6">
        @foreach($features as $feature)
            <li class="flex items-start">
                <span class="text-green-600 mr-2">✅</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach

        <!-- Button -->
        <a href="{{ $buttonLink }}"
           class="w-full flex justify-center items-center gap-2
                  bg-gradient-to-r from-teal-500 to-sky-500
                  text-white text-lg px-6 py-2 rounded-md hover:opacity-90">
            <i class="fa fa-shopping-bag"></i>
            ক্রয় করুন
        </a>
    </ul>

</div>
