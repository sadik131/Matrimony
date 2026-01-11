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
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">ডিলিট বায়োডাটা</h2>

                        <div class="space-y-5 max-w-xl mx-auto mt-4">

                            <p class="text-sm text-slate-600  mb-2">আপনি যদি সাময়িক সময়ের জন্য বায়োডাটা হাইড করতে চান তাহলে
                                মেনু থেকে হাইড
                                করে রাখতে পারেন। আর যদি সম্পূর্ণভাবে মুছে ফেলতে চান তাহলেই ডিলিট করুন। ডিলিট করলে বায়োডাটা
                                আর ফেরত আনতে
                                পারবেন না।</p>
                            <div class="flex items-center mt-5 mb-0">
                                <input type="checkbox" class="w-4 h-4 shrink-0" />
                                <label class="text-sm text-slate-600 ml-3">আমি বুঝতে পেরেছি এবং নিশ্চিতভাবে বায়োডাটা ডিলিট
                                    করতে চাই।</label>
                            </div>
                            <x-dashboard.gradient-button>
                                বায়োডাটা ডিলিট করুন
                            </x-dashboard.gradient-button>
                        </div>

                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>