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
        <x-PageHero title="শর্তাবলী" />

        <x-StaticPage>

            <p class="mb-4 text-gray-700">
                আমাদের ম্যাট্রিমনি প্ল্যাটফর্ম ব্যবহার করার মাধ্যমে আপনি নিম্নলিখিত শর্তাবলী মেনে চলতে সম্মত হচ্ছেন। অনুগ্রহ
                করে এগুলো মনোযোগ সহকারে পড়ুন।
            </p>

            <x-StaticHeading>১. অ্যাকাউন্ট নিবন্ধন</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আপনি যখন আমাদের ওয়েবসাইটে একটি অ্যাকাউন্ট তৈরি করেন, তখন আপনি নিশ্চিত করেন যে আপনি ১৮ বছরের ঊর্ধ্বে এবং আপনি
                প্রদত্ত সকল তথ্য সত্য এবং সঠিক।
            </p>

            <x-StaticHeading>২. ব্যবহারকারীর দায়িত্ব</x-StaticHeading>
            <ul class="list-none list-inside mb-4 text-gray-700">
                <li>১. আপনি আপনার অ্যাকাউন্টের গোপনীয়তা বজায় রাখবেন।</li>
                <li>২. মিথ্যা বা বিভ্রান্তিকর তথ্য প্রদান করা সম্পূর্ণভাবে নিষিদ্ধ।</li>
                <li>৩. অন্য ব্যবহারকারীদের হয়রানি করা বা অবমাননাকর বার্তা পাঠানো নিষিদ্ধ।</li>
            </ul>

            <x-StaticHeading>৩. পরিষেবা ব্যবহার</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমাদের পরিষেবা শুধুমাত্র বিবাহের উদ্দেশ্যে ব্যবহার করা যাবে। ব্যবসায়িক, প্রতারণামূলক বা অনৈতিক উদ্দেশ্যে
                ব্যবহারের ক্ষেত্রে অ্যাকাউন্ট বাতিল করা হবে।
            </p>

            <x-StaticHeading>৪. কনটেন্ট ও মালিকানা</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আপনি যে কনটেন্ট আপলোড করেন (ছবি, বিবরণ ইত্যাদি), তার জন্য আপনি দায়ী থাকবেন। আমরা সেই কনটেন্ট আমাদের পরিষেবা
                উন্নয়নের জন্য ব্যবহার করতে পারি।
            </p>

            <x-StaticHeading>৫. অ্যাকাউন্ট বাতিল</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা যে কোনো সময় কোনো কারণ ছাড়াই আপনার অ্যাকাউন্ট বাতিল করার অধিকার রাখি যদি আমরা মনে করি আপনি আমাদের শর্ত
                ভঙ্গ করেছেন।
            </p>

            <x-StaticHeading>৬. আইনগত বিষয়</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                এই শর্তাবলী বাংলাদেশের আইন অনুযায়ী পরিচালিত হবে এবং সেই অনুযায়ী যেকোনো বিরোধ নিষ্পত্তি হবে।
            </p>

            <x-StaticHeading>৭. শর্তাবলীর পরিবর্তন</x-StaticHeading>
            <p class="mb-4 text-gray-700">
                আমরা যেকোনো সময় এই শর্তাবলী পরিবর্তন করতে পারি এবং সেই পরিবর্তন ওয়েবসাইটে প্রকাশিত হবার পর থেকেই কার্যকর
                হবে। </p>

            <x-StaticHeading>৮. যোগাযোগ</x-StaticHeading>
            <p class="mb-4 text-gray-700">
      আপনি যদি আমাদের শর্তাবলী সম্পর্কে কোনো প্রশ্ন বা উদ্বেগ প্রকাশ করতে চান, অনুগ্রহ করে যোগাযোগ করুন: <br/>
      <span class="text-teal-700 font-medium">support@yourmatrimony.com</span>
    </p>

        </x-StaticPage>

    @endsection

</body>

</html>