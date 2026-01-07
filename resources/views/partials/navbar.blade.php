<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <div class="fixed top-0 z-50 w-full py-4  shadow-md bg-white ">
        <header class="flex justify-between items-center px-4 max-w-6xl mx-auto">
            <!-- Logo & Hamburger -->
            <div class="flex items-center gap-4">
                <button id="menuBtn" class="md:hidden text-2xl">&#9776;</button>
                <a href="{{ url('/') }}"><img src="/img/logo.png" alt="Logo" class="w-14 cursor-pointer"></a>
            </div>

            <!-- Menu Items (Desktop) -->
            <nav class="hidden md:flex gap-6 text-gray-700 font-medium">
                <a href="{{ url("/") }}" class="hover:text-teal-500 transition">হোম</a>
                <a href="{{ url('/about') }}" class="hover:text-teal-500 transition">আমাদের সম্পর্কে</a>
                <a href="{{ url('/blog') }}" class="hover:text-teal-500 transition">বিবাহ পাঠ</a>
                <a href="{{ url('/pricing') }}" class="hover:text-teal-500 transition">প্যাকেজসমূহ</a>
                <a href="{{ url('/faq') }}" class="hover:text-teal-500 transition">সচরাচর জিজ্ঞাসা</a>
                <a href="{{ url('/contact') }}" class="hover:text-teal-500 transition">যোগাযোগ</a>
            </nav>

            <!-- Right Icons -->
            <div class="flex items-center gap-4 text-teal-800">
                <!-- Language Dropdown -->
                <div class="relative group">
                    <div class="flex items-center gap-1 cursor-pointer text-teal-800 px-2 py-1 rounded transition">
                        <img src="https://img.icons8.com/ios/24/language.png" class="w-5" />
                        <span>বাংলা</span>
                        <svg class="w-4 h-4 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div
                        class="dropdown-content absolute top-8 left-0 bg-white border shadow-md rounded-md w-32 opacity-0 scale-95 pointer-events-none group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto transition-all duration-200 z-50 auto-height-dropdown">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50">বাংলা</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-50">English</a>
                    </div>
                </div>

                <!-- Profile Dropdown -->
                <div class="relative group">
                    <div class="cursor-pointer py-2 px-1 -mx-1 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-teal-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </div>

                    <div
                        class="profile-dropdown absolute right-0 mt-0 w-72 bg-white border rounded-lg  z-50 transform origin-top-right scale-95 opacity-0 transition-all duration-300 ease-in-out 
                            group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto pointer-events-none auto-height-dropdown">
                        <div class="text-center  p-4">
                            <div
                                class="w-20 h-20 mx-auto rounded-full bg-gradient-to-r from-teal-500 to-teal-400 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A9.001 9.001 0 0112 15a9.001 9.001 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h2 class="text-lg font-semibold text-gray-700 "> বায়োডাটার অবস্থা</h2>
                            <span
                                class="inline-block text-sm px-3 py-0.5 bg-teal-500 text-white rounded-full">অসম্পূর্ণ</span>
                            <a href="/bio-data.html">
                                <button
                                    class="bg-teal-500 hover:bg-teal-600 text-white px-5 py-2 mt-2 rounded-full shadow-md transition duration-200">
                                    বায়োডাটা সম্পূর্ণ করুন
                                </button>
                            </a>
                        </div>

                        <div x-data="{ path: window.location.pathname }"
                            class="px-4 pb-4 space-y-2 text-sm font-medium text-gray-700">
                            <a href="/admin-dashboard.html"
                                :class="path === '/admin-dashboard.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <span class="text-xl">⌘</span> ড্যাশবোর্ড
                            </a>

                            <a href="/bio-data.html"
                                :class="path === '/bio-data.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-edit text-lg"></i> বায়োডাটা এডিট করুন
                            </a>

                            <a href="/wishlist.html"
                                :class="path === '/wishlist.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-heart text-lg text-gray-500"></i> পছন্দের তালিকা
                            </a>

                            <a href="/disliked.html"
                                :class="path === '/disliked.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-heart text-lg text-gray-500"></i> অপছন্দের তালিকা
                            </a>

                            <a href="/orders.html"
                                :class="path === '/orders.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-shopping-bag text-lg text-gray-500"></i> আমার ক্রয়সমূহ
                            </a>

                            <a href="/support.html"
                                :class="path === '/support.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-flag text-lg text-gray-500"></i> সাপোর্ট & রিপোর্ট
                            </a>

                            <a href="/setting.html"
                                :class="path === '/setting.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3 rounded">
                                <i class="fa fa-gear text-lg text-gray-500"></i> সেটিংস
                            </a>

                            <a href="/delete.html"
                                :class="path === '/delete.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-trash-o text-lg text-gray-500"></i> ডিলিট বায়োডাটা
                            </a>

                            <a href="/logout.html"
                                :class="path === '/logout.html' ? 'bg-gray-50 text-teal-600 font-semibold' : 'hover:bg-gray-50 transition'"
                                class="flex items-center gap-3 px-3  rounded">
                                <i class="fa fa-sign-out text-lg text-gray-500"></i> লগআউট
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Sidebar (Mobile) -->
    <div id="sidebar"
        class="fixed mt-16 top-0 left-0 h-full w-3/4 bg-white shadow-md transform -translate-x-full transition-transform duration-300 z-50">
        <div class="p-4 flex justify-end items-center border-b">
            <!-- <img src="/img/logo.png" alt="Logo" class="w-14 cursor-pointer">  -->
            <button id="closeBtn" class="text-xl">&times;</button>
        </div>
        <nav class="flex flex-col p-4 gap-4 text-gray-700 font-medium">
            <a href="/index.html" class="hover:text-teal-500 transition">হোম</a>
            <a href="/about.html" class="hover:text-teal-500 transition">আমাদের সম্পর্কে</a>
            <a href="/blog.html" class="hover:text-teal-500 transition">বিবাহ পাঠ</a>
            <a href="/pricing.html" class="hover:text-teal-500 transition">প্যাকেজসমূহ</a>
            <a href="/faq.html" class="hover:text-teal-500 transition">সচরাচর জিজ্ঞাসা</a>
            <a href="/contact.html" class="hover:text-teal-500 transition">যোগাযোগ</a>
        </nav>
    </div>
</body>
</html>