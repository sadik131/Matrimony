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
        <section class="bg-teal-100 py-10 pt-24">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-teal-900 mb-3">ফাতওয়া বিভাগ</h2>
                <p class="text-lg text-teal-800">ইসলামিক জ্ঞানের আলোকে আপনার প্রশ্নের উত্তর জানুন বিশ্বস্ত আলেম দ্বারা।</p>
            </div>
        </section>

        <!-- Ask Question Form -->
        <section class="py-10 bg-white">
            <div class="max-w-3xl mx-auto px-4">
                <h2 class="text-2xl font-semibold mb-4 text-teal-700 text-center md:text-start">প্রশ্ন পাঠান</h2>
                <form class="space-y-4 bg-gray-50 p-6 rounded shadow">
                    <x-FormInput title="আপনার নাম" type="text" place="নাম লিখুন" />
                    <x-FormInput title="আপনার ইমেইল" type="email" place="example@email.com" />
                    <div>
                        <label class="block text-sm font-medium">আপনার প্রশ্ন</label>
                        <textarea rows="5" class="w-full mt-1 p-2 border border-gray-300 rounded  outline-none"
                            placeholder="আপনার প্রশ্ন এখানে লিখুন..."></textarea>
                    </div>
                    <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded hover:bg-teal-700 transition">
                        প্রশ্ন পাঠান
                    </button>
            </div>
            </form>
            </div>
        </section>

        <!-- Popular Fatwas -->
    <section class="py-10 bg-gray-100">
      <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl text-center md:text-start font-semibold mb-6 text-teal-700">জনপ্রিয় ফাতওয়া</h2>
        <div class="grid gap-6 md:grid-cols-2">
          <!-- Single Fatwa -->
          <x-FatwasBlog 
          title="ঋণের টাকা দিয়ে হজ করা যাবে কি?"
          text="ঋণগ্রস্থ ব্যক্তির উপর হজ ফরজ হয় না, তাই ঋণ নিয়ে হজ করা ইসলামি শরিয়াহ মতে সঠিক নয়। বিস্তারিত..."
          />
          <x-FatwasBlog 
          title="মেয়েদের জন্য পর্দার সঠিক নিয়ম কি?"
          text="মহিলাদের জন্য পর্দা করা ফরজ এবং এটি শরিয়াহ নির্ধারিত নিয়মে করতে হবে।..."
          />
        </div>
      </div>
    </section>

      <section class="py-10 bg-white">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold mb-4 text-teal-700">ফাতওয়া পাঠানোর নির্দেশিকা</h2>
        <ul class="text-gray-700 list-none  list-inside space-y-2 text-left">
          <li>১. সুস্পষ্ট ভাষায় প্রশ্ন করুন</li>
          <li>২. ব্যক্তিগত তথ্য না দিলে ভালো</li>
          <li>৩.  একই প্রশ্ন বারবার না পাঠানো</li>
          <li>৪.  উত্তরের জন্য ধৈর্য ধারণ করুন</li>
        </ul>
      </div>
    </section>


    @endsection

</body>

</html>