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
     
    <!-- Hero Section -->
        <section class="bg-teal-100 py-10 pt-28">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-xl md:text-3xl  font-bold text-teal-900 mb-4">
                    ইসলামিক বিবাহ ও তালাক সংক্রান্ত<br> ফরজে আইন কোর্স
                </h1>
                <p class="text-lg md:text-xl text-teal-800 mb-6">
                    অনলাইন ও অফলাইনে সাশ্রয়ী মূল্যে কুরআন-সুন্নাহ ভিত্তিক প্রশিক্ষণ
                </p>
                <a href="#register" class="bg-teal-700 text-white px-6 py-3 rounded shadow hover:bg-teal-800 transition">
                    এখনই ভর্তি হন
                </a>
            </div>
        </section>

        <!-- Course Overview -->
    <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
        <div>
          <img src="https://img.freepik.com/free-vector/islamic-marriage-concept-illustration_114360-8749.jpg?w=740" alt="Course" class=" w-96" />
        </div>
        <div>
          <h2 class="text-2xl text-center md:text-start font-bold text-teal-800 mb-4">কোর্স সম্পর্কে</h2>
          <p class="text-gray-700 leading-relaxed">
            ইসলামিক বিবাহ ও তালাক সংক্রান্ত এই কোর্সে আপনি জানতে পারবেন কীভাবে শরীয়তের আলোকে বৈবাহিক জীবন পরিচালনা করবেন, এবং তালাক সংক্রান্ত সঠিক নির্দেশনা কী।
            <br/><br/>
            এই কোর্সটি নবদম্পতি, অভিভাবক, ইসলামিক স্কলার ও সাধারণ মানুষের জন্য সমানভাবে প্রযোজ্য।
          </p>
        </div>
      </div>
    </section>

     <!-- Course Modules -->
    <section class="py-12 bg-gray-100">
      <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-teal-800 mb-6 text-center">কোর্সের বিষয়বস্তু</h2>
        <div class="grid md:grid-cols-2 gap-6">
          <ul class="space-y-3 text-gray-700 list-none list-inside">
            <li>১. বিবাহের শরয়ী শর্তসমূহ</li>
            <li>২. মাহর, গোপন ও প্রকাশ্য বিবাহ</li>
            <li>৩.  ইসলামে তালাকের সঠিক পদ্ধতি</li>
            <li>৪.  ইদ্দতের বিধান</li>
          </ul>
          <ul class="space-y-3 text-gray-700 list-none list-inside">
            <li>৫. স্ত্রীর অধিকার ও দায়িত্ব</li>
            <li>৬.  স্বামীর অধিকার ও দায়িত্ব</li>
            <li>৭.  বিচ্ছেদ পরবর্তী সম্পর্ক</li>
            <li>৮.  ইসলামিক দৃষ্টিভঙ্গি ও দাওয়াহ</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Registration -->
    <section id="register" class="py-12 bg-white">
      <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-teal-800 mb-4">কোর্সে রেজিস্ট্রেশন করুন</h2>
        <p class="mb-6 text-gray-600">আপনার নাম, ফোন নাম্বার ও ইমেইল দিয়ে সহজেই রেজিস্ট্রেশন করুন।</p>
        <form class="space-y-4 text-left">
          <x-FormInput place="আপনার নাম" type="text" />
          <x-FormInput place="মোবাইল নম্বর" type="tel" />
          <x-FormInput place="ইমেইল" type="email" />
          <button type="submit" class="bg-teal-700 text-white px-6 py-3 rounded hover:bg-teal-800 transition w-full">
            সাবমিট করুন
          </button>
        </form>
      </div>
    </section>


    @endsection

</body>

</html>