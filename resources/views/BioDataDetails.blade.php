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

        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-5 max-w-6xl mx-auto px-4 mt-14 md:mt-8 py-10 md:py-24">
            <div class="w-full mx-auto col-span-1">
                <div class="border border-gray-300 p-4  bg-teal-100 rounded-md">
                    <div class="flex justify-center">
                        <img class="w-32 h-32" src="/img/data (4).png" alt="">
                    </div>
                    <!-- Header -->
                    <h1 class="text-xl font-bold mb-4 text-center">বায়োডাটা নং: ODF-7376</h1>

                    <!-- Table -->
                    <table class="w-full mb-6 border-collapse">
                        <tbody>
                            <x-table-row label="বায়োডাটার ধরন" value="পাত্রীর বায়োডাটা" />

                            <x-table-row label="বৈবাহিক অবস্থা" value="অবিবাহিত" />

                            <x-table-row label="জন্মসন" value="আগস্ট, 2004" />

                            <x-table-row label="উচ্চতা" value="৪'৭" />

                            <x-table-row label="গাত্রবর্ণ" value="শ্যামলা" />

                            <x-table-row label="ওজন" value="৩৯ কেজি" />

                            <x-table-row label="রক্তের গ্রুপ" value="বি+" />

                            <x-table-row label="জাতীয়তা" value="বাংলাদেশী" />
                        </tbody>
                    </table>

                </div>

                <div class="w-full md:justify-center gap-5 flex my-2">
                    <a href="#"
                        class="w-full text-sm flex  justify-center items-center  gap-2 border border-teal-500 hover:bg-teal-500 hover:text-white text-teal-500 px-4 py-2 rounded-md hover:opacity-90">
                        <i class="fa-regular fa-star text-teal-500 "></i>
                        শর্টলিস্ট
                    </a>
                    <a href="#"
                        class="w-full  text-sm flex justify-center items-center gap-2 border border-red-500  text-red-500 px-4 py-2 rounded-md hover:opacity-90 hover:bg-red-500 hover:text-white">
                        <i class="fa fa-ban text-red-500"></i>
                        উপেক্ষা করুন
                    </a>
                </div>
                <a href="#"
                    class="w-full  text-sm flex justify-center items-center gap-2 bg-linear-to-r from-teal-500 to-sky-500 text-white px-4 py-2 rounded-md hover:opacity-90">
                    <i class="fa fa-copy"></i>
                    বায়োডাটা লিংক কপি করুন
                </a>
            </div>

            <div class="col-span-2">
                <x-BioDetailsSection title="ঠিকানা">

                    <x-Biorow label="স্থায়ী ঠিকানা">
                        গোপালগঞ্জ সদর, গোপালগঞ্জ, ঢাকা, বাংলাদেশ<br />
                        এলাকার নাম: হোরা বাড়ি
                    </x-Biorow>

                    <x-Biorow label="বর্তমান ঠিকানা">
                        দিনাজপুর সদর, দিনাজপুর, রংপুর, বাংলাদেশ<br />
                        এলাকার নাম: মুদিপাড়া
                    </x-Biorow>

                    <x-Biorow label="কোথায় বড় হয়েছেন?">
                        দিনাজপুর
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="শিক্ষাগত যোগ্যতা">

                    <x-Biorow label="আপনার শিক্ষা মাধ্যম">জেনারেল</x-Biorow>

                    <x-Biorow label="এস.এস.সি/দাখিল/সমমান পাসের সন">2020</x-Biorow>

                    <x-Biorow label="বিভাগ">বিজ্ঞান বিভাগ</x-Biorow>

                    <x-Biorow label="ফলাফল">A+</x-Biorow>

                    <x-Biorow label="স্নাতক/স্নাতক (সম্মান) / ফাজিল অধ্যয়নের বিষয়">
                        রাষ্ট্রবিজ্ঞান
                    </x-Biorow>

                    <x-Biorow label="বিভাগ">বিজ্ঞান বিভাগ</x-Biorow>

                    <x-Biorow label="শিক্ষাপ্রতিষ্ঠানের নাম">
                        টঙ্গী সরকারি কলেজ
                    </x-Biorow>

                    <x-Biorow label="কোন বর্ষে পড়ছেন?">১ম</x-Biorow>

                    <x-Biorow label="অন্যান্য শিক্ষাগত যোগ্যতা">
                        ১ম জামাত, খাদিজাতুল কুবরা মহিলা মাদ্রাসা, দিনাজপুর।
                    </x-Biorow>

                </x-BioDetailsSection>


                <x-BioDetailsSection title="পারিবারিক তথ্য">

                    <x-Biorow label="আপনার পিতা কি জীবিত?">জী, জীবিত</x-Biorow>

                    <x-Biorow label="পিতার পেশার বিবরণ">
                        মাদ্রাসার শিক্ষক, প্রতিষ্ঠাতা ও পরিচালক। মদিনা মাদ্রাসা, দিনাজপুর।
                    </x-Biorow>

                    <x-Biorow label="আপনার মাতা কি জীবিত?">জী, জীবিত</x-Biorow>

                    <x-Biorow label="মাতার পেশার বিবরণ">গৃহিণী</x-Biorow>

                    <x-Biorow label="আপনার কতজন ভাই আছে?">৩</x-Biorow>

                    <x-Biorow label="ভাইদের তথ্য">
                        বড় ভাই হাফেজ + স্বর্ণব্যবসায়ী। ,
                        মেজভাই এসএসসি ২০২২ ,
                        ছোটভাই ৭ম শ্রেণী
                    </x-Biorow>

                    <x-Biorow label="আপনার কতজন বোন আছে?">8</x-Biorow>

                    <x-Biorow label="বোনদের তথ্য">
                        বড়বোন-স্নাতক কমপ্লিট, বিবাহিত, স্টুডেন্ট। (বড় দুলাভাই আর্মি হতে র‍্যাবে পোস্টিং আছেন) ,
                        মেজবোন - ডিপ্লোমা কমপ্লিট, বিবাহিত। (মেজ দুলাভাই স্বর্ণ ও গাড়ি ব্যবসায়ী)
                    </x-Biorow>

                    <x-Biorow label="চাচা মামাদের পেশা">
                        মামা ২ জন। ২ মামা-ই মাওলানা, মুফতী, মাদ্রাসার শিক্ষক। , চাচা ১ জন জীবিত। ব্যবসায়ী।
                    </x-Biorow>

                    <x-Biorow label="পারিবারিক অর্থনৈতিক অবস্থা">মধ্যবিত্ত</x-Biorow>

                    <x-Biorow label="অর্থনৈতিক অবস্থার বর্ণনা">
                        আলহামদুলিল্লাহ মধ্যবিত্ত, দিনাজপুর শহরে ছোট জায়গা, স্বর্ণের শে তবে সাধারণ জীবনযাপন করা হয়।
                    </x-Biorow>

                    <x-Biorow label="পারিবারিক দ্বীনি পরিবেশ কেমন?">
                        আলহামদুলিল্লাহ দ্বীন কমপ্লিটলি মেইনটেইন করার চেষ্টা করে।
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="ব্যক্তিগত তথ্য">

                    <x-Biorow label="ঘরের বাহিরে সাধারণত কি ধরণের পোষাক পরেন?">
                        বোরকা, হিজাব, নিকাব। হাত-পা মোজা (মাঝে মাঝে)
                    </x-Biorow>

                    <x-Biorow label="কবে থেকে নিকাব সহ পর্দা করছেন?">
                        ৭ম শ্রেণী থেকে।
                    </x-Biorow>

                    <x-Biorow label="প্রতিদিন পাঁচ ওয়াক্ত নামাজ পড়েন কি? কবে থেকে পড়ছেন?">
                        ৭ থেকে শুরু, মধ্যে গ্যাপ গেছে, এখন নিয়মিত ইং শা আল্লাহ।
                    </x-Biorow>

                    <x-Biorow label="সাধারণত সপ্তাহে কত ওয়াক্ত নামায আপনার কাযা হয়?">
                        ফজর মাঝে মাঝে
                    </x-Biorow>

                    <x-Biorow label="মাহরাম/নন-মাহরাম মেনে চলেন কি?">জ্বি</x-Biorow>

                    <x-Biorow label="শুদ্ধভাবে কুরআন তিলওয়াত করতে পারেন?">জ্বি</x-Biorow>

                    <x-Biorow label="কোন ফিকহ অনুসরণ করেন?">হানাফি</x-Biorow>

                    <x-Biorow label="নাটক/সিনেমা/সিরিয়াল / গান এসব দেখেন বা শুনেন?">
                        মাঝে মাঝে শিক্ষণীয়
                    </x-Biorow>

                    <x-Biorow label="আপনার মানসিক বা শারীরিক কোনো রোগ আছে?">
                        না আলহামদুলিল্লাহ।
                    </x-Biorow>

                    <x-Biorow label="দ্বীনের কোন বিশেষ মেহনতে যুক্ত আছেন?">
                        তাবলীগ তালিম
                    </x-Biorow>

                    <x-Biorow label="মাজার সম্পর্কে আপনার ধারণা বা বিশ্বাস কি?">
                        শিরক
                    </x-Biorow>

                    <x-Biorow label="আপনার পড়া হয়েছে এমন অন্তত ৩ টি ইসলামি বই এর নাম লিখুন">
                        সোনালী সংসার, ফাজায়ালে আমল, মুন্তাখাব হাদিস।
                    </x-Biorow>

                    <x-Biorow label="আপনার পছন্দের অন্তত ৩ জন আলেমের নাম লিখুন">
                        শায়েখ আহমাদুল্লাহ, মাওলানা অছিকুর রহমান, আবু ত্বহা আদনান।
                    </x-Biorow>

                    <x-Biorow label="নিজের শখ, পছন্দ-অপছন্দ, রুচিবোধ, স্বপ্ন ইত্যাদি বিষয়ে লিখুন">
                        ঘুরতে ভালোবাসি, অন্যথায় ঘরকেন্দ্রিক। নাজুক প্রকৃতির। রান্না ভালোবাসি।
                        ক্রাফটে আগ্রহ আছে। গজল ভালো গাই। পর্দার নিয়মের মধ্যে সাজগোজ পছন্দ করি।
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="পেশাগত তথ্য">

                    <x-Biorow label="পেশা">
                        শিক্ষার্থী
                    </x-Biorow>

                    <x-Biorow label="পেশার বিস্তারিত বিবরণ">
                        বর্তমানে টঙ্গী সরকারি কলেজে অনার্স ১ম বর্ষে নতুন ভর্তি হয়েছি।
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="বিবাহ সম্পর্কিত তথ্য">

                    <x-Biorow label="অভিভাবক আপনার বিয়েতে রাজি কি না?">
                        জ্বি। হ্যা।
                    </x-Biorow>

                    <x-Biorow label="আপনি কি বিয়ের পর চাকরি করতে ইচ্ছুক?">
                        না।
                    </x-Biorow>

                    <x-Biorow label="বিয়ের পর পড়াশোনা চালিয়ে যেতে চান?">
                        পাত্রের ইচ্ছা স্বাপেক্ষে।
                    </x-Biorow>

                    <x-Biorow label="কেন বিয়ে করছেন? বিয়ে সম্পর্কে আপনার ধারণা কি?">
                        আল্লাহ'র সন্তুষ্টির জন্য।
                    </x-Biorow>

                    <x-Biorow label="বিয়ে একটি সুন্নাহ। ইমান ও চরিত্র ঠিক রাখতে বিয়ে করা উচিৎ।">
                        দ্বীন পরিপূর্ণ করতে, চরিত্র হেফাজত করতে এবং দ্বীনি জীবনযাপনে মানসিক শান্তি পেতে একজন দ্বীনি সঙ্গীর
                        সাপোর্ট প্রয়োজন।
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="প্রত্যাশিত জীবনসঙ্গী">

                    <x-Biorow label="বয়স">
                        23-33
                    </x-Biorow>

                    <x-Biorow label="গাত্রবর্ণ">
                        শ্যামলা, উজ্জল শ্যামলা, ফর্সা, উজ্জল ফর্সা
                    </x-Biorow>

                    <x-Biorow label="উচ্চতা">
                        ৫.৪- মানানসই
                    </x-Biorow>

                    <x-Biorow label="শিক্ষাগত যোগ্যতা">
                        মানানসই
                    </x-Biorow>

                    <x-Biorow label="জেলা">
                        ঢাকা, রংপুর বিভাগ।
                    </x-Biorow>

                    <x-Biorow label="বৈবাহিক অবস্থা">
                        অবিবাহিত
                    </x-Biorow>

                    <x-Biorow label="পেশা">
                        যেকোন
                    </x-Biorow>

                    <x-Biorow label="অর্থনৈতিক অবস্থা">
                        মধ্যবিত্ত, উচ্চ মধ্যবিত্ত
                    </x-Biorow>

                    <x-Biorow label="জীবনসঙ্গীর যেসব বৈশিষ্ট্য বা গুণাবলী প্রত্যাশা করেন">
                        দ্বীনদার, ৫ ওয়াক্ত নামাজী, চরিত্রবান, কর্মোঠ এবং আত্মনির্ভরশীল ,
                        শর্ত- স্ত্রী জীবিত থাকা অবস্থায় দ্বিতীয় বিবাহ করা যাবেনা (বিতর্কে যেতে চাচ্ছিনা)
                    </x-Biorow>

                </x-BioDetailsSection>

                <x-BioDetailsSection title="অঙ্গীকারনামা">

                    <x-Biorow label="mominjoti.com ওয়েবসাইট বায়োডাটা জমা দিন, আপনি আপনার অভিভাবক জানেন?">
                        হ্যাঁ
                    </x-Biorow>

                    <x-Biorow label="আল্লাহ'র শ পথ করে সাক্ষ্য দিন, যে তথ্যগুলো সব সত্য?">
                        হ্যাঁ
                    </x-Biorow>

                    <x-Biorow label="কোনো তথ্য প্রদান দুনিয়াবী আইনগত খিরাতের দায়ভার mominjoti.com আখ্যা নিবে না।">
                        হ্যাঁ
                    </x-Biorow>

                </x-BioDetailsSection>

                <div
                    class="max-w-3xl mx-auto  border border-t-2 border-gray-300 border-t-teal-500 mt-5  rounded-md overflow-hidden">
                    <div class="bg-white">
                        <div class="text-center border-b border-[#E5E7EB] p-4">
                            <h2 class="text-xl font-bold text-teal-700">যোগাযোগ</h2>
                        </div>
                        <p class="text-center text-xs py-2">সতর্কতা - বিয়ের সিদ্ধান্ত নেয়ার পূর্বে স্থানীয়ভাবে খোঁজ নিয়ে
                            বায়োডাটার সমস্ত তথ্য যাচাই করবেন।</p>
                        <p class="text-center text-md text-gray-600 py-2">
                            এই বায়োডাটার অভিভাবকের যোগাযোগের তথ্য দেখতে আপনার ১টি কানেকশন খরচ হবে।</p>
                        <div class="px-3 md:px-0">
                            <a href="#"
                                class="w-full md:w-1/3 mx-auto text-sm flex justify-center items-center gap-2 bg-linear-to-r from-teal-500 to-sky-500 text-white px-4 py-2 rounded-md hover:opacity-90">

                                যোগাযোগের তথ্য দেখুন
                            </a>
                            <a href="#"
                                class="w-full md:w-1/3 mx-auto text-sm flex justify-center items-center gap-2 border my-3 text-teal-700 px-4 py-2 rounded-md hover:opacity-90">
                                <i class="fa-brands fa-youtube text-red-500"></i>
                                যেভাবে যোগাযোগ তথ্য দেখবেন
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

</body>

</html>