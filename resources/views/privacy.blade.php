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
                আপনার গোপনীয়তা আমাদের জন্য অত্যন্ত গুরুত্বপূর্ণ। এই নীতিমালায় আমরা ব্যাখ্যা করেছি
                কিভাবে আমরা আপনার ব্যক্তিগত তথ্য সংগ্রহ, ব্যবহার এবং সুরক্ষা করি।
            </p>

            <x-StaticHeading>তথ্য সংগ্রহ</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা আপনার নাম, ইমেইল, মোবাইল নাম্বার, জন্মতারিখ, ঠিকানা এবং অন্যান্য প্রয়োজনীয় তথ্য সংগ্রহ করি।
            </p>

            <x-StaticHeading>তথ্যের ব্যবহার</x-StaticHeading>
            <ul class="list-none list-inside mb-4 text-gray-700">
                <li>১. সঠিক জীবনসঙ্গী খুঁজতে সাহায্য করা</li>
                <li>২. ব্যবহারকারীর অভিজ্ঞতা উন্নয়ন</li>
                <li>৩. আপনার সঙ্গে যোগাযোগ রাখা</li>
            </ul>

            <x-StaticHeading>তথ্য সুরক্ষা</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা আপনার তথ্যের নিরাপত্তা নিশ্চিত করতে আধুনিক নিরাপত্তা ব্যবস্থা ব্যবহার করি।
            </p>

            <x-StaticHeading>কুকি নীতি</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমাদের ওয়েবসাইট কুকি ব্যবহার করে ব্যবহারকারীর অভিজ্ঞতা উন্নত করে।
            </p>

            <x-StaticHeading>যোগাযোগ</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                যেকোনো প্রশ্নের জন্য যোগাযোগ করুন:
                <br>
                <span class="text-teal-700 font-medium">info@yourmatrimony.com</span>
            </p>

        </x-StaticPage>

    @endsection

</body>

</html>