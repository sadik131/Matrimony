@php
$blogs = [
    [
        'image' => '/img/blog.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/blogDetails',
    ],
    [
        'image' => '/img/blog.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/blogDetails',
    ],
    [
        'image' => '/img/blog.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/blogDetails',
    ],
    [
        'image' => '/img/blog.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/blogDetails',
    ],
    
];

$videos = [
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/video.html',
    ],
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/video.html',
    ],
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/video.html',
    ],
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/video.html',
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

<body>

    @extends('layout.app')


    @section('content')
        <x-PageHero title="বিবাহ পাঠঃ" />


        <!-- blog card start -->
        <x-BlogGrid title="ব্লগ ও আর্টিকেলস" :blogs="$blogs"/>
        <x-BlogGrid title="ভিডিও" :blogs="$videos"/>
        <!-- blog card end -->

    @endsection

</body>

</html>