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
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">রিপোর্ট সমূহ</h2>

                        <!-- Table -->
                        <x-dashboard.table>

                            {{-- TABLE HEAD --}}
                            <x-slot:head>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">রিপোর্ট আইডি</th>
                                <th class="px-4 py-3 hidden md:table-cell">বায়োডাটা নং</th>
                                <th class="px-4 py-3 ">স্ট্যাটাস</th>
                                <th class="px-4 py-3 hidden md:table-cell">তারিখ</th>
                                <th class="px-4 py-3 hidden md:table-cell">নতুন উত্তর</th>
                                <th class="px-4 py-3 hidden md:table-cell">অপশন</th>
                            </x-slot:head>

                            {{-- TABLE BODY --}}
                            <x-slot:body>
                                <tr>
                                    <td colspan="7" class=" text-gray-700 px-4 py-6 border-b-[#E5E7EB] bg-white shadow-lg  text-sm border-b">
                                        কোনো তথ্য নেই
                                    </td>
                                </tr>
                            </x-slot:body>

                        </x-dashboard.table>

                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>