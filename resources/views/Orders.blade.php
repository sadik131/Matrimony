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
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">আমার ক্রয়সমূহ</h2>

                        <div>
                            <!-- Table -->
                            <h3 class="text-center text-gray-500 font-semibold py-2 text-md mb-5 md:mb-0">আপনি এখন পর্যন্ত
                                <span class="text-teal-700">0</span> টি বায়োডাটার যোগাযোগ তথ্য দেখেছেন
                            </h3>
                            <x-dashboard.table>

                                {{-- TABLE HEAD --}}
                                <x-slot:head>
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">বারোডাটা নং</th>
                                    <th class="px-4 py-3">তারিখ</th>
                                    <th class="px-4 py-3">অপশন</th>
                                </x-slot:head>

                                {{-- TABLE BODY --}}
                                <x-slot:body>
                                    <tr>
                                        <td colspan="5"
                                            class="text-gray-700 px-4 py-6 bg-white shadow-lg text-sm border-b border-[#E5E7EB]">
                                            কোনো বায়োডাটার যোগাযোগ তথ্য দেখা হয়নি
                                        </td>
                                    </tr>
                                </x-slot:body>

                            </x-dashboard.table>
                        </div>

                        <div class="mt-10">
                            <!-- Table -->
                            <h3 class="text-center text-gray-500 font-semibold py-2 text-md mb-5 md:mb-0">সর্বশেষ ৫টি
                                প্যাকেজ ক্রয়ের তথ্য </h3>
                            <x-dashboard.table>

                                {{-- TABLE HEAD --}}
                                <x-slot:head>
                                    <th class="px-4 py-3">#</th>
                                    <th class="px-4 py-3">প্যাকেজের নাম</th>
                                    <th class="px-4 py-3">মূল্য</th>
                                    <th class="px-4 py-3 hidden md:table-cell">কানেকশন সংখ্যা</th>
                                    <th class="px-4 py-3 hidden md:table-cell">ট্রানজেকশন</th>
                                    <th class="px-4 py-3 hidden md:table-cell">পেমেন্ট মাধ্যম</th>
                                    <th class="px-4 py-3 hidden md:table-cell">তারিখ</th>
                                </x-slot:head>

                                {{-- TABLE BODY --}}
                                <x-slot:body>
                                    <tr>
                                        <td colspan="7"
                                            class=" text-gray-700 px-4 py-6 border-b border-[#E5E7EB] bg-white shadow-lg  text-sm ">
                                            কোনো প্যাকেজ ক্রয় করা হয়নি
                                        </td>
                                    </tr>
                                </x-slot:body>

                            </x-dashboard.table>
                        </div>

                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>