@php
$packages = [
    [
        'title' => 'বেসিক প্যাকেজ',
        'titleColor' => 'text-pink-600',
        'features' => [
            '১টি কানেকশন',
            'মূল্য ১৫০ টাকা',
            '১ টি কানেকশন দিয়ে ১ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ১০০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment',
    ],
    [
        'title' => 'স্ট্যান্ডার্ড প্যাকেজ',
        'titleColor' => 'text-teal-600',
        'features' => [
            '৫টি কানেকশন',
            '৫০০ টাকা',
            '৫ টি কানেকশন দিয়ে ৫ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ৩৫০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment',
    ],
    [
        'title' => 'পপুলার প্যাকেজ',
        'titleColor' => 'text-green-600',
        'features' => [
            '১০টি কানেকশন',
            '৯০০ টাকা',
            '১০ টি কানেকশন দিয়ে ১০ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ৬০০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment',
    ],
];
@endphp


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
                    <div class="min-h-screen bg-gray-50  md:p-6">
                        <!-- Heading -->
                        <h2 class="text-3xl  text-center text-teal-800 mb-6">কানেকশন সম্পর্কিত তথ্য</h2>

                        <section class="text-center pt-12 bg-white px-4">

                            <div class="max-w-md mx-auto bg-teal-50 rounded-xl shadow-md p-6 mb-6">
                                <div class="text-5xl font-bold text-teal-500 mb-2">0</div>
                                <p class="text-gray-700 font-medium">কানেকশন রয়েছে</p>
                            </div>


                            <div class="mb-10">
                                <a href="#"
                                    class="inline-flex items-center px-6 py-3 bg-white text-sm rounded-full border border-gray-300 text-gray-700 font-semibold shadow hover:shadow-lg transition">
                                    <i class="fa-brands fa-youtube mr-2 text-red-600 text-2xl"></i> যেভাবে কানেকশন করবেন
                                </a>
                            </div>


                            <div class="flex items-center justify-center my-8">
                                <div class="grow border-t border-gray-300"></div>
                                <span class="px-4 text-center text-xl font-semibold text-slate-600">কানেকশন ক্রয়
                                    করুন</span>
                                <div class="grow border-t border-gray-300"></div>
                            </div>
                        </section>


                        <!-- pricing start -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4  max-w-6xl mx-auto px-4">
                            <!-- Card Start -->
                            @foreach($packages as $package)
        <x-pricingCard
            :title="$package['title']"
            :title-color="$package['titleColor']"
            :features="$package['features']"
            :button-link="$package['link']"
        />
    @endforeach
                            <!-- Card End -->
                        </div>

                        <!-- pricing end -->
                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>