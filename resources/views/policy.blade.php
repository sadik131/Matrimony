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
        <x-PageHero title="রিফান্ড পলিসি" />

        <x-StaticPage>

            <p class="mb-4 text-gray-700">
                আমাদের ম্যাট্রিমনি সার্ভিসে আপনি সাইন আপ করার মাধ্যমে সম্মত হন নিচের রিফান্ড পলিসিগুলো অনুসরণ করতে।
                আমরা আমাদের গ্রাহকদের সন্তুষ্টি নিশ্চিত করতে অঙ্গীকারবদ্ধ, তবে কিছু সীমাবদ্ধতা রয়েছে।
            </p>

            <x-StaticHeading>
                ১. পরিষেবার ধরণ
            </x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমাদের পরিষেবা একটি ডিজিটাল সাবস্ক্রিপশন পরিষেবা, যার মাধ্যমে আপনি বায়োডাটা দেখা, যোগাযোগ করা
                ইত্যাদি সুবিধা পান। একবার পরিষেবা সক্রিয় হয়ে গেলে সেটি ব্যবহারযোগ্য বিবেচিত হয়।
            </p>

            <x-StaticHeading>
                ২. রিফান্ডের ক্ষেত্রে গ্রহণযোগ্য কারণসমূহ
            </x-StaticHeading>
            <ul class="list-none list-inside mb-4 text-gray-700">
                <li>১. প্রযুক্তিগত কারণে পেমেন্ট কেটে গেলেও অ্যাকাউন্ট সক্রিয় না হলে।</li>
                <li>২. ডুপ্লিকেট পেমেন্ট হয়ে গেলে।</li>
                <li>৩. অ্যাকাউন্ট সক্রিয় হওয়ার আগেই গ্রাহক রিফান্ডের জন্য অনুরোধ করলে।</li>
            </ul>

            <x-StaticHeading>
                ৩. রিফান্ডের সময়সীমা
            </x-StaticHeading>
            <p class="mb-4 text-gray-700">
                রিফান্ড অনুরোধ যাচাই-বাছাইয়ের পর ৭-১০ কার্যদিবসের মধ্যে সম্পন্ন করা হবে।
                পেমেন্ট গেটওয়ে বা ব্যাংকজনিত কারণে বিলম্ব হতে পারে।
            </p>

            <x-StaticHeading>
                ৪. রিফান্ডের জন্য যোগাযোগ
            </x-StaticHeading>
            <p class="mb-4 text-gray-700">
                রিফান্ড সংক্রান্ত যেকোনো প্রশ্ন বা অনুরোধ পাঠাতে নিচের ঠিকানায় ইমেইল করুন:
                <br />
                <span class="text-teal-600 font-medium">refund@yourmatrimony.com</span>
            </p>

            <x-StaticHeading>
                ৫. পরিবর্তনের অধিকার
            </x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা সময় সময় আমাদের রিফান্ড পলিসি পরিবর্তন করার অধিকার রাখি।
                সর্বশেষ আপডেট এই পেজেই প্রকাশ করা হবে।
            </p>

            <p class="mt-8 text-center text-sm text-gray-500">
                সর্বশেষ আপডেট: আগস্ট ২০২৫
            </p>

        </x-StaticPage>

    @endsection

</body>

</html>