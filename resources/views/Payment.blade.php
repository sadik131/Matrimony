<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <div class="min-h-screen bg-gray-50 p-6">
                        <!-- Heading -->
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">অর্ডার সম্পন্ন করুন</h2>


                        <div class="max-w-4xl mx-auto p-6 border border-[#E5E7EB] rounded-lg shadow-sm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <x-dashboard.pricingInput 
                                lable="আপনার নাম"
                                placeHolder="আপনার ই-মেইল"
                                />
                                <x-dashboard.pricingInput 
                                lable="আপনার ই-মেইল"
                                placeHolder="আপনার ই-মেইল"
                                type="email"
                                />
                                <x-dashboard.pricingInput 
                                lable="আপনার মোবাইল"
                                placeHolder="আপনার মোবাইল 01600000000"
                                />
                                <x-dashboard.pricingInput 
                                lable="বায়োডাটা নাম্বার"
                                placeHolder="000, 000, 000..."
                                :show="true"
                                />
                                <div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center mb-6">
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700">বায়োডাটা সংখ্যা</label>
                                    <select class="w-full border px-4 py-2 rounded bg-teal-500 text-white outline-teal-500">
                                        <option value="1">১</option>
                                        <option value="2">২</option>
                                        <option value="3">৩</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <label class="block mb-1 text-sm font-medium text-gray-700">সর্বমোট মূল্য</label>
                                    <div class="inline-block bg-teal-500 text-white font-bold px-6 py-2 rounded">৳ ১০০</div>
                                </div>
                            </div>


                            <div class="flex flex-col md:flex-row gap-4 justify-center">
                                <button class="bg-[#003E78] text-white px-6 py-2 rounded  transition">
                                    SSL পে করুন
                                </button>
                                <button class=" text-white px-6 py-2 rounded bg-[#CC1165] ">
                                    বিকাশ পে করুন
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>