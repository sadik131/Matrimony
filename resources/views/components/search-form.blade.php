<div class=" max-w-4xl xl:max-w-6xl mx-auto bg-white p-4 md:p-14 rounded-lg shadow-lg
relative md:-mt-20 ">
  <form class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
  <x-form-select
    label="আমি খুঁজছি"
    name="type"
    :options="['সকল', 'পাত্র', 'পাত্রী']"
/>

<x-form-select
    label="বৈবাহিক অবস্থা"
    name="status"
    :options="['সকল', 'অবিবাহিত', 'ডিভোর্সড']"
/>

<x-form-select
    label="শিক্ষাগত যোগ্যতা"
    name="education"
    :options="['শিক্ষাগত যোগ্যতা','জেএসসি', 'এসএসসি', 'এইচএসসি', 'স্নাতক','স্নাতকোত্তর']"
/>

<x-form-select
    label="স্থায়ী ঠিকানা"
    name="location"
    :options="['জেলা নির্বাচন করুন','ঢাকা', 'গাজীপুর', 'নারায়ণগঞ্জ', 'চট্টগ্রাম', 'সিলেট','খুলনা']"
/>  

    <!-- Search Button -->
    <div class="w-full md:justify-end flex">
      <a href="/dashboard"
        
        class="w-full md:w-auto flex justify-center items-center gap-2 bg-gradient-to-r from-teal-500 to-sky-500 text-white px-6 py-2 rounded-md hover:opacity-90"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1110 2.5a7.5 7.5 0 016.65 14.15z" />
        </svg>
        বায়োডাটা খুঁজুন
      </a>
    </div>
  </form>
</div>