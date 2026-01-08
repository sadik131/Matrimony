@php
$cards = [
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
    [
        'image' => '/img/data (3).png',
        'code' => 'MJ-108584',
        'status' => 'অবিবাহিত',
        'location' => 'কিশোরগঞ্জ',
        'birth_year' => '১৯৯৯',
        'profession' => 'মাদ্রাসার শিক্ষক',
    ],
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

  <style>
    input[type="range"] {
      -webkit-appearance: none;
      appearance: none;
      width: 100%;
      position: absolute;
      background: transparent;
      pointer-events: none;
      z-index: 2;
    }


    input[type="range"]::-webkit-slider-runnable-track {
      height: 2px;
    }


    input[type="range"]::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 18px;
      height: 18px;
      background: white;
      border: 3px solid #14B7AA;
      border-radius: 50%;
      cursor: pointer;
      pointer-events: auto;
      position: relative;
      z-index: 3;
      transform: translateY(-30%);
    }

    input[type="range"]::-moz-range-thumb {
      width: 18px;
      height: 18px;
      background: white;
      border: 3px solid #14B7AA;
      border-radius: 50%;
      cursor: pointer;
      pointer-events: auto;
      z-index: 3;
      transform: translateY(-30%);
    }


    .slider-container {
      position: relative;
      height: 18px;
    }
  </style>

<body>

    @extends('layout.dashboard')


    @section('content')
    <div
    class=" grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 mt-20 xl:max-w-4xl mx-auto xl:ml-[22rem] pt-5  lg:py-10">
    @foreach($cards as $card)
    <x-FeatureCVCard 
    :image="$card['image']"
    :code="$card['code']"
    :status="$card['status']"
    :location="$card['location']"
    :birth_year="$card['birth_year']"
    :profession="$card['profession']"
    details_link="/bio-data-details"
    />
    @endforeach
</div>

{{-- sidebar Filter --}}
<div id="filterSidebar"
    class="fixed top-[64px] left-0 w-full md:w-80 h-[calc(100%-64px)] bg-white shadow transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40 overflow-y-auto">
    <!-- Close Button (Mobile) -->
    <div class="flex justify-between items-center px-4 pt-7  md:hidden">
      <h2 class="text-md  text-gray-700">5244 টি বায়োডাটা পাওয়া গেছে!</h2>
      <button id="closeFilterSidebar" class="text-2xl text-teal-600">&times;</button>
    </div>

    <!-- Filters -->
    <div class="p-4 md:pt-10">
      <div class="flex gap-8 items-center justify-center pt-5">
        <div class="bg-white w-full px-2 py-2 shadow-sm rounded-sm cursor-pointer border border-gray-50">
          <p class="text-center text-teal-500">ফিল্টার সমূহ</p>
        </div>
        <div class="bg-teal-50 w-full px-2 py-2 shadow-sm rounded-sm cursor-pointer border border-gray-50">
          <p class="text-center text-gray-700">বায়োডাটা নং</p>
        </div>
      </div>
        <x-filter.section title="প্রাথমিক">

            <x-filter.select label="আমি খুঁজছি">
                <option>সকল</option>
                <option>পাত্রের বায়োডাটা</option>
                <option>পাত্রীর বায়োডাটা</option>
            </x-filter.select>

            <x-filter.select label="বৈবাহিক অবস্থা">
                <option>সকল</option>
                <option>অবিবাহিত</option>
                <option>ডিভোর্সড</option>
            </x-filter.select>

            <x-filter.age-range
        label="বয়স"
        min="18"
        max="60"
        minValue="18"
        maxValue="60"
    />
        </x-filter.section>

    <x-filter.section title="ঠিকানা">

        <x-filter.select
            label="স্থায়ী ঠিকানা"
            id="location1"
            name="permanent_address"
        >
            <option value="">ঠিকানা নির্বাচন করুন</option>
            <option value="dhaka">ঢাকা</option>
            <option value="gazipur">গাজীপুর</option>
            <option value="narayanganj">নারায়ণগঞ্জ</option>
            <option value="chittagong">চট্টগ্রাম</option>
            <option value="sylhet">সিলেট</option>
            <option value="khulna">খুলনা</option>
        </x-filter.select>

        <x-filter.select
            label="বর্তমান ঠিকানা"
            id="location2"
            name="present_address"
        >
            <option value="">ঠিকানা নির্বাচন করুন</option>
            <option value="dhaka">ঢাকা</option>
            <option value="gazipur">গাজীপুর</option>
            <option value="narayanganj">নারায়ণগঞ্জ</option>
            <option value="chittagong">চট্টগ্রাম</option>
            <option value="sylhet">সিলেট</option>
            <option value="khulna">খুলনা</option>
        </x-filter.select>
    </x-filter.section>


    <x-filter.section title="শিক্ষা" class="mt-5">

    {{-- পড়াশোনার মাধ্যম --}}
    <label class="block mb-1 text-sm text-gray-700">পড়াশোনার মাধ্যম</label>

    <div class="grid grid-cols-2">
        <x-filter.checkbox id="edu_general" label="জেনারেল" checked />
        <x-filter.checkbox id="edu_qawmi" label="কওমি" checked />
        <x-filter.checkbox id="edu_alia" label="আলিয়া" checked />
    </div>

    {{-- দ্বীনি শিক্ষাগত যোগ্যতা --}}
    <label class="block mb-1 text-sm text-gray-700 pt-5">দ্বীনি শিক্ষাগত যোগ্যতা</label>

    <div class="grid grid-cols-2">
        <x-filter.checkbox id="deen_hafez" label="হাফেজ" checked />
        <x-filter.checkbox id="deen_mawlana" label="মাওলানা" checked />
        <x-filter.checkbox id="deen_mufti" label="মুফতি" checked />
        <x-filter.checkbox id="deen_mufassir" label="মুফাসসির" checked />
        <x-filter.checkbox id="deen_adib" label="আদিব" checked />
    </div>

    </x-filter.section>

    <x-filter.section title="ব্যক্তিগত" class="mt-5">

        {{-- গাত্রবর্ণ --}}
        <label class="block mb-1 text-sm text-gray-700">গাত্রবর্ণ</label>

        <div class="grid grid-cols-2">
            <x-filter.checkbox id="skin_black" label="কালো" checked />
            <x-filter.checkbox id="skin_shyamla" label="শ্যামলা" checked />
            <x-filter.checkbox id="skin_bright_shyamla" label="উজ্জ্বল শ্যামলা" checked />
            <x-filter.checkbox id="skin_fair" label="ফর্সা" checked />
            <x-filter.checkbox id="skin_bright_fair" label="উজ্জ্বল ফর্সা" checked />
        </div>

        {{-- ফিকহ অনুসরণ --}}
        <label class="block mb-1 text-sm text-gray-700 pt-5">ফিকহ অনুসরণ</label>

        <div class="grid grid-cols-2">
            <x-filter.checkbox id="fiqh_hanafi" label="হানাফি" checked />
            <x-filter.checkbox id="fiqh_maliki" label="মালিকি" checked />
            <x-filter.checkbox id="fiqh_shafii" label="শাফিঈ" checked />
            <x-filter.checkbox id="fiqh_hambali" label="হাম্বলি" checked />
            <x-filter.checkbox id="fiqh_salafi" label="আহলে হাদীস / সালাফি" checked />
        </div>

    </x-filter.section>

    <x-filter.section title="পেশা" class="mt-5">
        <label class="block mb-1 text-sm text-gray-700">পেশা</label>
        <div class="grid grid-cols-2">
            <x-filter.checkbox id="job_imam" label="ইমাম" checked />
            <x-filter.checkbox id="job_madrasa_teacher" label="মাদ্রাসা শিক্ষক" checked />
            <x-filter.checkbox id="job_teacher" label="শিক্ষক" checked />
            <x-filter.checkbox id="job_business" label="ব্যবসায়ী" checked />
            <x-filter.checkbox id="job_govt" label="সরকারী চাকুরী" checked />
            <x-filter.checkbox id="job_private" label="বেসরকারী চাকুরী" checked />
            <x-filter.checkbox id="job_freelancer" label="ফ্রিল্যান্সার" checked />
            <x-filter.checkbox id="job_doctor" label="ডাক্তার" checked />
            <x-filter.checkbox id="job_mbbs_student" label="MBBS / BDS শিক্ষার্থী" checked />
            <x-filter.checkbox id="job_student" label="শিক্ষার্থী" checked />
            <x-filter.checkbox id="job_expat" label="প্রবাসী" checked />
            <x-filter.checkbox id="job_other" label="অন্যান্য" checked />
            <x-filter.checkbox id="job_none" label="পেশা নেই" checked />
        </div>
    </x-filter.section>

    <x-filter.section title="অন্যান্য" class="mt-5">

        {{-- অর্থনৈতিক অবস্থা --}}
        <label class="block mb-1 text-sm text-gray-700">অর্থনৈতিক অবস্থা</label>

        <div class="grid grid-cols-2">
            <x-filter.checkbox id="eco_upper" label="উচ্চবিত্ত" checked />
            <x-filter.checkbox id="eco_upper_middle" label="উচ্চ মধ্যবিত্ত" checked />
            <x-filter.checkbox id="eco_middle" label="মধ্যবিত্ত" checked />
            <x-filter.checkbox id="eco_lower_middle" label="নিম্ন মধ্যবিত্ত" checked />
            <x-filter.checkbox id="eco_lower" label="নিম্নবিত্ত" checked />
        </div>

        {{-- ক্যাটাগরি --}}
        <label class="block mb-1 text-sm text-gray-700 pt-5">ক্যাটাগরি</label>

        <div class="grid grid-cols-2">
            <x-filter.checkbox id="cat_disabled" label="প্রতিবন্ধী" checked />
            <x-filter.checkbox id="cat_infertile" label="বন্ধ্যা" checked />
            <x-filter.checkbox id="cat_new_muslim" label="নওমুসলিম" checked />
            <x-filter.checkbox id="cat_orphan" label="এতিম" checked />
            <x-filter.checkbox id="cat_polygamy" label="মাসনা হতে আগ্রহী" checked />
            <x-filter.checkbox id="cat_tabligh" label="তাবলীগ" checked />
        </div>

    </x-filter.section>


      <div class="w-full md:justify-between gap-1.5 md:gap-0 flex my-2">
        <a href="#"
          class="w-full md:w-auto text-sm flex justify-center items-center bg-teal-400 text-gray-700 px-4 py-2 rounded-md hover:opacity-90">

          ফিল্টার মুছুন
        </a>
        <a href="#"
          class="w-full md:w-auto text-sm flex justify-center items-center gap-2 bg-gradient-to-r from-teal-500 to-sky-500 text-white px-4 py-2 rounded-md hover:opacity-90">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1110 2.5a7.5 7.5 0 016.65 14.15z" />
          </svg>
          বায়োডাটা খুঁজুন
        </a>
      </div>
    </div>

  </div>

    @endsection
    
</body>

</html>