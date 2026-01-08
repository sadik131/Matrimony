  <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>
<div class="relative w-full h-screen overflow-hidden mt-16" id="carousel">
    <!-- Slides -->
    <div class="flex transition-transform duration-700 ease-in-out" id="slides">
      <!-- Slide 1 -->
      <div class="w-full shrink-0 relative">
        <img src="/img/banner 4.png" class="w-full h-full object-cover" />
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/50">
          <p class="max-w-2xl xl:max-w-4xl text-center px-4">
            তোমাদের মধ্যে যারা সঙ্গীবিহীন পুরুষ বা মহিলা, তোমরা তাদেরকে বিবাহ দাও এবং তোমাদের দাস ও দাসীদের মধ্যে যারা
            সৎ-যোগ্য, তাদেরকেও। তারা যদি অভাবগ্রস্ত হলে, তবে আল্লাহ নিজ অনুগ্রহে তাদেরকে অভাবমুক্ত করে দিবেন। আল্লাহ
            প্রাচুর্যময়, সর্বজ্ঞ। [সূরা নূর: ৩২-৩৩]
          </p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="w-full shrink-0 relative">
        <img src="/img/banner 3.png" class="w-full object-cover" />
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/50 ">
          <p class="max-w-2xl xl:max-w-4xl text-center px-4">
            আর এক নিদর্শন এই যে, তিনি তোমাদের জন্যে তোমাদের মধ্য থেকে তোমাদের সঙ্গিনীদের সৃষ্টি করেছেন, যাতে তোমরা তাদের
            কাছে শান্তিতে থাক এবং তিনি তোমাদের মধ্যে পারস্পরিক সম্প্রীতি ও দয়া সৃষ্টি করেছেন।" (সূরা রুম: আয়াত ২১)
            "তারা (স্ত্রীগণ) তোমাদের পোশাক এবং তোমরা (স্বামীগণ) তাদের পোশাকস্বরূপ।" (সূরা বাকারা: আয়াত ১৮৭)।
          </p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="w-full shrink-0 relative">
        <img src="/img/banner 5.png" class="w-full object-cover" />
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/50 ">
          <p class="max-w-2xl xl:max-w-4xl text-center px-4">
            বিয়ে হলো আমার সুন্নাত যে ব্যক্তি আমার সুন্নাত তরিকা ছেড়ে চলবে সে আমার দলভুক্ত নয়।' (বুখারি) 'হে যুবসমাজ!
            তোমাদের মধ্যে যারা বিয়ের সামর্থ্য রাখে, তাদের বিয়ে করা কর্তব্য, কেননা বিয়ে দৃষ্টি নিয়ন্ত্রণকারী, যৌন অঙ্গের
            পবিত্রতা রক্ষাকারী।' (মিশকাত)।
          </p>
        </div>
      </div>
    </div>

    <!-- Prev/Next -->
    <button id="prev"
      class="absolute left-0 top-1/2 -translate-y-1/2 bg-black/30 text-white p-3 z-10">❮</button>
    <button id="next"
      class="absolute right-0 top-1/2 -translate-y-1/2 bg-black/30  text-white p-3 z-10">❯</button>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
      <button class="w-3 h-3 rounded-full bg-white opacity-50" data-slide="0"></button>
      <button class="w-3 h-3 rounded-full bg-white opacity-50" data-slide="1"></button>
      <button class="w-3 h-3 rounded-full bg-white opacity-50" data-slide="2"></button>
    </div>
  </div>