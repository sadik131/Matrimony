<style>
    .slider-container {
        overflow: hidden;
        position: relative;
    }

    .slider-track {
        display: flex;
        gap: 16px;
    }

    .slider-slide {
        flex: 0 0 calc(33.333%);
    }

    @media (max-width: 768px) {
        .slider-slide {
            flex: 0 0 calc(50% - 16px);
        }
    }

    @media (max-width: 480px) {
        .slider-slide {
            flex: 0 0 100%;
        }
    }
</style>

@php

$cards= [
   [
        'image' => '/img/data (3).png',
        'number' => 'AH-112112',
    ],
    [
        'image' => '/img/data (3).png',
        'number' => 'AH-112100',
    ],
    [
        'image' => '/img/data (3).png',
        'number' => 'AH-112094',
    ],
    [
        'image' => '/img/data (3).png',
        'number' => 'AH-112088',
    ],
    [
        'image' => '/img/data (3).png',
        'number' => 'AH-112082',
    ],
    [
        'image' => '/img/data (3).png',
        'number' => 'AH-112076',
    ],
]

@endphp

<div class="bg-[#0c1f35] py-6 my-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2
                class="text-white text-lg md:text-x font-semibold  border-b border-white inline-block pb-1 whitespace-nowrap">
                সর্বশেষ যুক্ত হওয়া বায়োডাটা</h2>

            <div class="flex space-x-2">
                <button
                    class="slider-prev p-2 rounded-full bg-[#14314d] text-white shadow-md hover:bg-[#1e4a75] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button
                    class="slider-next p-2 rounded-full bg-[#14314d] text-white shadow-md hover:bg-[#1e4a75] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="slider-container">
            <div class="slider-track">
              
            @foreach ($cards as $card)
                <x-latestCard 
                :image="$card['image']" 
                :number="$card['number']" 
                />
            @endforeach

            </div>
        </div>
    </div>
</div>