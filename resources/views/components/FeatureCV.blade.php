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

<div>
  <h2
    class="py-5 max-w-6xl mx-auto px-4 border-b border-[#E5E7EB]  mb-3 text-xl md:text-3xl text-center text-teal-800 md:mt-14">
    ফিচারড
    সিভি</h2>
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 pb-4 gap-5 ">

    @foreach($cards as $card)
            <x-FeatureCVCard 
                :image="$card['image']"
                :code="$card['code']"
                :status="$card['status']"
                :location="$card['location']"
                :birth_year="$card['birth_year']"
                :profession="$card['profession']"
                details-link="/bio-data-details.html"
            />
        @endforeach

  </div>
  <div class="flex justify-center">
    <a href="/dashboard.html"
      class=" md:w-auto text-sm flex justify-center items-center gap-2 bg-gradient-to-r from-teal-500 to-sky-500 text-white px-4 py-2 rounded-md hover:opacity-90">

      আরও দেখুন
    </a>
  </div>
</div>