<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            position: absolute;
            background: transparent;
            pointer-events: none;
            z-index: 2;
        }

        input[type="range"]::-webkit-slider-runnable-track {
            height: 2px;
        }


        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            background: white;
            border: 3px solid #14B7AA;
            border-radius: 50%;
            cursor: pointer;
            pointer-events: auto;
            position: relative;
            z-index: 3;
            transform: translateY(-30%);
        }

        input[type="range"]::-moz-range-thumb {
            width: 18px;
            height: 18px;
            background: white;
            border: 3px solid #14B7AA;
            border-radius: 50%;
            cursor: pointer;
            pointer-events: auto;
            z-index: 3;
            transform: translateY(-30%);
        }


        .slider-container {
            position: relative;
            height: 18px;
        }
    </style>
</head>

<body>

    @extends('layout.app')


    @section('content')

        <div class="flex overflow-hidden mt-20">

            <x-dashboard.layout>

                {{-- SIDEBAR --}}
                <x-dashboard.sidebar />

                {{-- MAIN CONTENT --}}
                <div class="flex-1 flex flex-col">
                    {{-- TOGGLE BUTTON --}}

                    <div class="">
                        <x-dashboard.sidebar-toggle />
                    </div>
                    {{-- content here --}}
                    <div x-data="{ 
                    step: 1,
                    titles: [
                      'সাধারণ তথ্য', 'ঠিকানা', 'শিক্ষাগত যোগ্যতা', 'পারিবারিক তথ্য', 'ব্যক্তিগত তথ্য',
                      'পেশাগত তথ্য', 'বিবাহ সম্পর্কিত তথ্য', 'প্রত্যাশিত জীবনসঙ্গী', 'অঙ্গীকারনামা', 'যোগাযোগ'
                    ]
                }" class="max-w-6xl mx-auto md:py-10 px-4 md:px-8">

                        <h2 class="text-xl text-center text-teal-700  block md:hidden" x-text="titles[step - 1]"></h2>
                        <p class="text-gray-600 text-center text-sm block md:hidden pt-1.5"> পরবর্তী ধাপ: <span
                                x-text="titles[step - 1]"></span></p>
                        <div class="grid grid-cols-1 md:grid-cols-4 md:gap-6">

                            <!-- Sidebar Stepper -->
                            <x-biodata.stepper />

                            <!-- Main Form Area -->
                            <div class="md:col-span-3 space-y-6 mt-6 md:mt-0">
                                <h2 class="text-xl border-[#E5E7EB] border-b pb-2 text-teal-700 hidden md:block"
                                    x-text="titles[step - 1]">
                                </h2>
                                <!-- Step 1 -->
                                <x-biodata.step-1 />

                                <!-- Step 2 -->
                                <x-biodata.step-2 />


                                <!-- Step 3 -->
                                <x-biodata.step-3 />


                                <!-- Step 4 -->
                                <x-biodata.step-4 />
                                
                                
                                <!-- Step 5 -->
                                <x-biodata.step-5 />
                                
                                <!-- Step 6 -->
                                <x-biodata.step-6 />
                                
                                <!-- Step 7 -->
                                <x-biodata.step-7 />
                                
                                <!-- Step 8 -->
                                <x-biodata.step-8 />
                                
                                <!-- Step 9 -->
                                <x-biodata.step-9 />
                                
                                <!-- Step 10-->
                                <x-biodata.step-10 />
                                
                                <!-- Navigation Buttons -->
                                <x-biodata.navigation />
                            </div>
                        </div>
                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>