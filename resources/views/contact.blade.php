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
        <x-PageHero title="যোগাযোগঃ" />
        
        <!-- contact info start -->
 <div class="py-10 md:py-20">

      <div class="grid sm:grid-cols-2 items-start gap-12  mx-auto max-w-6xl bg-white p-4 rounded-md">
        <div>
          
          <p class="text-md text-slate-500 mt-4 leading-relaxed">যেকোন বিষয়ে সাহায্যের জন্য ফেসবুক পেজের মেসেঞ্জারে যোগাযোগ করুন।</p>
            <a href="#" class="text-md text-teal-500 mt-4 leading-relaxed">https://www.facebook.com/মুমিন জুটি</a>
            <p class="text-md text-slate-500 mt-4 leading-relaxed">মেসেঞ্জারে/ whatsapp এ নক করেও কয়েক ঘন্টায় রিপ্লাই না পেলে সরাসরি হেল্পলাইন:</p>
            <p class="text-md text-slate-500 mt-4 leading-relaxed">শুধুমাত্র ভাইদের জন্যঃ</p>
            <p class="text-md text-slate-500 mt-4 leading-relaxed">সন্ধ্যা ৯ টা থেকে রাত ১০ টা (মঙ্গলবার সকাল ১০-রাত ১০ টা)</p>
             <p class="text-md text-slate-500 mt-4 leading-relaxed">Hotline: +88 01731923101 নম্বরে ফোন দিয়ে ডায়াল করবেন:</p>
             <p class="text-md text-slate-500 mt-4 leading-relaxed">শুধুমাত্র বোনদের জন্যঃ</p>
             <p class="text-md text-slate-500 mt-4 leading-relaxed">সকাল ১০ টা থেকে রাত ১০ টা</p>
             <p class="text-md text-slate-500 mt-4 leading-relaxed">হটলাইন: +৮৮ ০১৯৭৩৯২৩১০৪</p>
             <p class="text-md text-slate-500 mt-4 leading-relaxed">নম্বরে ফোন দিয়ে ডায়াল করবেন:</p>
            
         

         
        </div>

        <form class="space-y-4">
             <p class="text-md text-slate-500 mt-4 leading-relaxed">যেকোন বিষয়ে সাহায্যের জন্য ফেসবুক পেজের মেসেন্জারে/whatsapp এ যোগাযোগ করুন। ফেসবুক না থাকলে আপনার যে কোন জিজ্ঞাসা, নিম্নোক্ত ফর্মে পূরণ করে আমাদের কাছে পাঠিয়ে দিন। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করবো ইন শা আল্লাহ।</p>
          <input type='text' placeholder='আপনার নামঃ'
            class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-teal-500" />
          <input type='email' placeholder='আপনার ইমেইলঃ'
            class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-teal-500" />
          <input type='text' placeholder='বিষয়ঃ'
            class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-teal-500" />
          <textarea placeholder='আপনার বার্তা' rows="6"
            class="w-full text-slate-900 rounded-md px-4 border border-gray-300 text-sm pt-2.5 outline-0 focus:border-teal-500 mb-0"></textarea>
          <button type='button'
            class="text-white bg-teal-500 hover:bg-teal-600 rounded-md text-[15px] font-medium px-4 py-2 w-full cursor-pointer mt-6">পাঠান</button>
        </form>
      </div>
    </div>
<!-- contact info end -->

    @endsection

</body>

</html>