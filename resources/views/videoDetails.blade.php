@php
$videos = [
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/videoDetails',
    ],
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/videoDetails',
    ],
    [
        'image' => '/img/video.jpg',
        'category' => 'কুরআন',
        'title' => 'বাক্কা নামের রহস্য',
        'excerpt' => '– আবদুল্লাহ আল মাসউদ। মক্কা শহরের নাম শুনেনি এমন মানুষ খুঁজে পাওয়া যাবে না...',
        'link' => '/videoDetails',
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

    <div class="max-w-6xl mx-auto px-4 mt-16 py-10 ">
        <h2 class=" py-4 md:py-8 text-center text-gray-700 text-2xl md:text-4xl">কুরআনি প্রজন্ম গড়ার কৌশল ও রুপরেখা</h2>

        <iframe
        class="w-full md:h-screen h-80 my-10 rounded-lg"
        src="https://www.youtube.com/embed/JnX7Oc8LqD8"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
        </iframe>
    </div>
      

        <div class="border-t-2 border-teal-500">
            <div class="max-w-6xl mx-auto px-4 py-10">
                <h2 class="py-4 md:py-8  text-teal-800 text-2xl md:text-4xl">জনপ্রিয় ভিডিও</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            @foreach($videos as $video)
                <x-BlogCard 
                    :image="$video['image']"
                    :category="$video['category']"
                    :title="$video['title']"
                    :excerpt="$video['excerpt']"
                    :link="$video['link']"
                />
            @endforeach
                </div>
            </div>
        </div>


    @endsection

</body>

</html>