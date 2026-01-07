@php
    $steps = [
        [
            'icon' => 'fa fa-user-plus',
            'title' => 'একাউন্ট খুলুন dsfasdf',
            'description' => 'বিনামূল্যে রেজিস্ট্রেশন করুন',
        ],
        [
            'icon' => 'fa fa-search',
            'title' => 'বায়োডাটা তৈরি করুন',
            'description' => 'খুব সহজেই বিনামূল্যে মুমিন জুটিতে বায়োডাটা তৈরি করতে পারবেন।',
        ],
        [
            'icon' => 'fa fa-phone',
            'title' => 'পছন্দের বায়োডাটা খুঁজুন',
            'description' => 'বয়স, উপজেলা, পেশা, শিক্ষাগত যোগ্যতা সহ অনেক ফিল্টার ব্যবহার করুন।',
        ],
        [
            'icon' => 'fa fa-lightbulb-o',
            'title' => 'বায়োডাটা সাজেশন পান',
            'description' => 'আপনার পছন্দ অনুযায়ী বায়োডাটা সাজেশন পান।',
        ],
        [
            'icon' => 'fa fa-shopping-bag',
            'title' => 'কানেকশন কিনুন ও যোগাযোগ করুন',
            'description' => 'পছন্দ হলে সরাসরি অভিভাবকের সাথে যোগাযোগ করুন।',
        ],
        [
            'icon' => 'fa fa-check-square-o',
            'title' => 'বিবাহ সম্পন্ন করুন',
            'description' => 'খোঁজ নিয়ে সুন্নতি বিবাহ সম্পন্ন করুন।',
        ],
    ];
@endphp


<div>
    <h2 class=" md:pt-14 mb-10 md:mb-0 md:py-5 md:mt-10  text-center text-xl md:text-3xl  text-teal-800 "><span
            class="text-teal-500">মুমিন জুটি </span>

        যেভাবে কাজ করে?</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4 ">
        <!-- Card Item -->
        @foreach($steps as $step)
            <x-MominCard
                :icon="$step['icon']"
                :title="$step['title']"
                :description="$step['description']"
            />
        @endforeach
    </div>
</div>