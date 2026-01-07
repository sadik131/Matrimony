@php
$stats = [
    [
        'image' => '/img/data (1).png',
        'title' => 'মোট দ্বীনদার পাত্র-পাত্রীর বায়োডাটা',
        'value' => '7,620',
    ],
    [
        'image' => '/img/data (4).png',
        'title' => 'মোট পাত্রীর বায়োডাটা',
        'value' => '3,219',
    ],
    [
        'image' => '/img/data (3).png',
        'title' => 'মোট পাত্রের বায়োডাটা',
        'value' => '4,391',
    ],
    [
        'image' => '/img/data (2).png',
        'title' => 'সর্বমোট সফল বিবাহ',
        'value' => '2,338+',
    ],
];
@endphp

<div>
    <h2 class="py-5 text-center text-xl md:text-3xl  text-teal-800 md:mt-10">মুমিনজুটি ডাটাবেজঃ</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto px-4  ">
      <!-- Card -->
       @foreach($stats as $stat)
            <x-MominjotiDBCard
                :image="$stat['image']"
                :title="$stat['title']"
                :value="$stat['value']"
            />
        @endforeach

      
    </div>
  </div>