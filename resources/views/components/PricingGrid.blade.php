@php
$packages = [
    [
        'title' => 'বেসিক প্যাকেজ',
        'titleColor' => 'text-pink-600',
        'features' => [
            '১টি কানেকশন',
            'মূল্য ১৫০ টাকা',
            '১ টি কানেকশন দিয়ে ১ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ১০০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment.html',
    ],
    [
        'title' => 'স্ট্যান্ডার্ড প্যাকেজ',
        'titleColor' => 'text-teal-600',
        'features' => [
            '৫টি কানেকশন',
            '৫০০ টাকা',
            '৫ টি কানেকশন দিয়ে ৫ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ৩৫০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment.html',
    ],
    [
        'title' => 'পপুলার প্যাকেজ',
        'titleColor' => 'text-green-600',
        'features' => [
            '১০টি কানেকশন',
            '৯০০ টাকা',
            '১০ টি কানেকশন দিয়ে ১০ টি বায়োডাটার অভিভাবকের যোগাযোগ তথ্য দেখতে পারবেন।',
            'আপনার বায়োডাটা এপ্রুভ হলে ৬০০ টাকায় প্রতিবার প্যাকেজটি ক্রয় করতে পারবেন।',
        ],
        'link' => '/payment.html',
    ],
];
@endphp


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 py-10 md:py-20 max-w-6xl mx-auto px-4">

    @foreach($packages as $package)
        <x-pricingCard
            :title="$package['title']"
            :title-color="$package['titleColor']"
            :features="$package['features']"
            :button-link="$package['link']"
        />
    @endforeach

</div>
