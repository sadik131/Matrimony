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
        <x-PageHero title="প্রাইভেসি নীতি" />

        <x-StaticPage>

            <p class="mb-4 text-gray-700">
               আপনার গোপনীয়তা আমাদের জন্য অত্যন্ত গুরুত্বপূর্ণ। এই নীতিমালায় আমরা ব্যাখ্যা করেছি কিভাবে আমরা আপনার ব্যক্তিগত তথ্য সংগ্রহ, ব্যবহার এবং রক্ষা করি যখন আপনি আমাদের ম্যাট্রিমনি সার্ভিস ব্যবহার করেন।
            </p>

            <x-StaticHeading>তথ্য সংগ্রহ</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা আপনার নাম, ইমেইল, মোবাইল নাম্বার, জন্মতারিখ, ঠিকানা এবং অন্যান্য ব্যক্তিগত তথ্য সংগ্রহ করি যা আপনি আমাদের প্ল্যাটফর্মে প্রদান করেন একটি উপযুক্ত জীবনসঙ্গী খুঁজতে।
            </p>

            <x-StaticHeading>তথ্যের ব্যবহার</x-StaticHeading>
            <ul class="list-none list-inside mb-4 text-gray-700">
                <li>১. সঠিক জীবনসঙ্গী খুঁজতে সাহায্য করা</li>
                <li>২. ব্যবহারকারীর অভিজ্ঞতা উন্নয়ন</li>
                <li>৩. আপনার সঙ্গে যোগাযোগ রাখা</li>
            </ul>

            <x-StaticHeading>তথ্য সুরক্ষা</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা আপনার তথ্যের নিরাপত্তা নিশ্চিত করতে আধুনিক নিরাপত্তা ব্যবস্থা ব্যবহার করি। তৃতীয় পক্ষের কাছে আপনার তথ্য প্রকাশ করা হয় না, ব্যতীত আইনগত প্রয়োজনে।
            </p>

            <x-StaticHeading>কুকি নীতি</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমাদের ওয়েবসাইট আপনার অভিজ্ঞতা আরও উন্নত করার জন্য কুকি ব্যবহার করে। আপনি চাইলে কুকি নিষ্ক্রিয় করতে পারেন আপনার ব্রাউজারের সেটিংস থেকে।
            </p>
           
            <x-StaticHeading>নীতি পরিবর্তন</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                এই প্রাইভেসি নীতিতে আমরা সময় অনুযায়ী পরিবর্তন আনতে পারি। যেকোনো পরিবর্তনের ক্ষেত্রে আমরা আপনাকে ইমেইলের মাধ্যমে অবহিত করব বা ওয়েবসাইটে আপডেট প্রকাশ করব।
            </p>

            <x-StaticHeading>যোগাযোগ করুন</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আপনি যদি আমাদের প্রাইভেসি নীতি সম্পর্কে কোনো প্রশ্ন বা উদ্বেগ প্রকাশ করতে চান, অনুগ্রহ করে আমাদের সাথে যোগাযোগ করুন:
                <br>
                <span class="text-teal-700 font-medium">info@yourmatrimony.com</span>
            </p>

        </x-StaticPage>

    @endsection

</body>

</html>