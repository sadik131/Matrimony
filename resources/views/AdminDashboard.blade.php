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

        <div class="flex overflow-hidden mt-20 ">

            <x-dashboard.layout>

                {{-- SIDEBAR --}}
                <x-dashboard.sidebar />

                {{-- MAIN CONTENT --}}
                <div class="flex-1 flex flex-col">
                    {{-- TOGGLE BUTTON --}}

                    <div class="">
                        <x-dashboard.sidebar-toggle />
                    </div>
                    <!-- Content Cards -->
                    <div class="px-6 grid grid-cols-1 lg:grid-cols-3 gap-5 mb-10">
                        {{-- card 1 --}}
                        <x-dashboard.simple-card number="0" title="কানেকশন রয়েছে"
                            desc="প্রতিটি বায়োডাটার যোগাযোগের তথ্য দেখতে ১টি কানেকশন প্রয়োজন।" btnLink="/connection"
                            btnText="কানেকশন কিনুন" />
                        {{-- card 2 --}}
                        <x-dashboard.white-card number="0" title="বায়োডাটা ভিজিট সংখ্যা"
                            desc="আপনার বায়োডাটা যতবার ভিজিট করা হয়েছে।">
                            <div class="mt-2 flex justify-center gap-2">
                                <x-dashboard.cardButton text="শেষ ৩০ দিন" date="0" />
                                <x-dashboard.cardButton text="শেষ ৭ দিন" date="0" />
                                <x-dashboard.cardButton text="আজকে" date="0" />
                            </div>
                        </x-dashboard.white-card>
                        {{-- card 3 --}}
                        <x-dashboard.white-card number="0" title="আপনার বায়োডাটা তালিকাভুক্ত হয়েছে"
                            desc="এটি জন্য আপনার বায়োডাটা পছন্দের তালিকায় রয়েছে।" />

                        <x-dashboard.icon-link-card href="/wishlist.html" img="/img/heart.png" number="0"
                            title="পছন্দের তালিকা" desc="আপনার পছন্দের তালিকাভুক্ত বায়োডাটা সমূহ।" />

                        <x-dashboard.icon-link-card href="/disliked.html" img="/img/heart (1).png" number="0"
                            title="অপছন্দের তালিকা" desc="আপনার অপছন্দের তালিকাভুক্ত বায়োডাটা সমূহ।" />

                        <x-dashboard.icon-link-card href="/orders.html" img="/img/shopping-bag.png" number="0"
                            title="আমার ক্রয়সমূহ" desc="আপনার অপছন্দের তালিকাভুক্ত বায়োডাটা সমূহ।" />
                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>