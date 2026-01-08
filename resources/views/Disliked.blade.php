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
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">অপছন্দের তালিকা</h2>

                        <!-- Table -->
                        <x-dashboard.table>

                            {{-- TABLE HEAD --}}
                            <x-slot:head>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">বারোডাটা নং</th>
                                <th class="px-4 py-3">জন্ম সাল</th>
                                <th class="px-4 py-3 hidden lg:block">ঠিকানা</th>
                                <th class="px-4 py-3">অপশন</th>
                            </x-slot:head>

                            {{-- TABLE BODY --}}
                            <x-slot:body>
                                <tr>
                                    <td colspan="5"
                                        class="text-gray-700 px-4 py-6 bg-white shadow-lg text-sm border-b border-[#E5E7EB]">
                                        অপছন্দের তালিকায় কোনো বায়োডাটা নেই ।
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