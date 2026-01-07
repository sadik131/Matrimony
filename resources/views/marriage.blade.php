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
        <section class="bg-teal-100 py-10 pt-24">
            <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
                <div>
                    <h2 class="py-5  text-xl md:text-3xl  text-teal-800">প্রি-ম্যারেজ কাউন্সেলিং</h2>
                    <p class="text-lg text-gray-600">একটি টেকসই ও সুখী সম্পর্কের জীবনের প্রস্তুতি শুরু হোক এখান থেকেই</p>
                </div>
                <div>
                    <img src="/img/marriage.png" alt="Couple" class="mx-auto w-56 mb-4" />
                </div>

            </div>
        </section>

        <section class="py-10 bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-2xl font-semibold mb-4 text-teal-700">কাউন্সেলিং কী এবং কেন জরুরি?</h2>
                <p class="text-gray-700 leading-relaxed">
                    বিয়ের আগে নামমিল গ্রহণযোগ্যতা, ব্যবধানের ব্যাখ্যা, সম্পর্কের ভবিষ্যৎ নিয়ে আলোচনার মাধ্যমে প্রস্তুতি
                    গ্রহণ জরুরি।
                    সঠিক দিক নির্দেশনায় কম ফ্রিকশনসহ সম্পর্ক দীর্ঘস্থায়ী হয়।
                </p>
            </div>
        </section>

        <section class="py-10 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                <x-Benefits title="মূল সুবিধাসমূহ" :Items="[
            '✅ সম্পর্ক উন্নয়ন ও বোঝাপড়া',
            '✅ আশা-প্রত্যাশা নির্ধারণ',
            '✅ ঝগড়ার সমাধান কৌশল',
            '✅ পারস্পরিক আলোচনা সক্ষমতা',
        ]" />
        
                <x-Benefits title="কাউন্সেলিং এর সাথে যা পাবেন" :Items="[
            '🕐 ৩টি সেশন, প্রতিটি ৪০ মিনিট',
            '📍 অনলাইন ও সরাসরি উভয়ই',
            '💬 ব্যক্তিগত আলোচনা',
            '📄 সার্টিফিকেট (চাহিদা অনুযায়ী)',
        ]" />
            </div>
        </section>
        <!-- Counselor Info -->
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
    <section class="py-10">
        <div class=" flex flex-col md:flex-row items-center  gap-6">
        <img src="/img/profile.jpg" alt="Counselor" class="w-32 h-32 rounded-full object-cover border" />
        <div>
          <h4 class="text-xl font-semibold text-teal-700">আসাম প্রোমেন</h4>
          <p class="text-gray-600">কাউন্সেলিংয়ে ৩০% বেশি অভিজ্ঞতা</p>
        </div>
      </div>
    </section>
    <section class="py-10 bg-gray-50">
         <x-Benefits title="প্রশ্নোত্তর" :Items="[
            '❓কাউন্সেলিং কতদিন ধরে চলে?',
            '❓অনলাইন কাউন্সেলিং কি সম্ভব?',
            '❓কি ধরনের টপিক আলোচনা হয়?',
        ]" />
    </section>
    </div>
    <!-- Testimonial -->
  <section class="py-10 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <blockquote class="italic text-gray-700 text-lg">“কাউন্সেলিং থাকিলে অনেক অপ্রত্যাশিত সমস্যাও সহজে সমাধান হয়।
        সম্পর্কের গভীরতা বাড়ে।”</blockquote>
    </div>
  </section>

   <!-- Pricing -->
  <section class="py-10">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold mb-4 text-teal-700">মূল্য নির্ধারণ</h2>
      <p class="text-xl font-semibold text-teal-600 mb-4">৳ ৩০০০</p>
      <button class="bg-teal-600 text-white px-6 py-3 rounded hover:bg-teal-700 transition">কাউন্সেলিং বুক করুন</button>
    </div>
  </section>


    @endsection

</body>

</html>