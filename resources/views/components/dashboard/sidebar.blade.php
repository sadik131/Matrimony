<div :class="sidebarOpen ? 'w-[355px] md:w-72' : 'w-0'"
    class="transition-all duration-300 bg-gray-100 md:bg-white shadow-lg overflow-hidden shrink-0">
    <div class="p-4">

        <!-- Profile Section -->
        <div class="text-center space-y-4 p-4 ">
            <div
                class="w-20 h-20 mx-auto rounded-full bg-linear-to-r from-teal-500 to-teal-400 flex items-center justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A9.001 9.001 0 0112 15a9.001 9.001 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>

            <h2 class="text-lg font-semibold text-gray-700">বায়োডাটার অবস্থা</h2>
            <span class="inline-block text-sm px-3 py-0.5 bg-teal-500 text-white rounded-full">অসম্পূর্ণ</span>
            <br>
            <a href="/bio-data.html">
                <button
                    class="bg-teal-500 hover:bg-teal-600 text-white px-5 py-2 mt-2 rounded-full shadow-md transition duration-200">
                    বায়োডাটা সম্পূর্ণ করুন
                </button>
            </a>
        </div>

        <!-- Menu -->
        <div x-data="{ currentPath: window.location.pathname }"
            class="px-4 md:px-0 pb-4 space-y-2 text-sm font-medium text-gray-700">

            <x-dashboard.sidebar-link href="/admin-dashboard">
                <span class="text-xl">⌘</span> ড্যাশবোর্ড
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/bio-data.html" icon="fa fa-edit">
                বায়োডাটা এডিট করুন
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/withList" icon="fa fa-heart">
                পছন্দের তালিকা
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/disliked" icon="fa fa-heart">
                অপছন্দের তালিকা
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/orders" icon="fa fa-shopping-bag">
                আমার ক্রয়সমূহ
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/support" icon="fa fa-flag">
                সাপোর্ট & রিপোর্ট
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/setting" icon="fa fa-gear">
                সেটিংস
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/delete" icon="fa-regular fa-trash-can">
                ডিলিট বায়োডাটা
            </x-dashboard.sidebar-link>

            <x-dashboard.sidebar-link href="/logOut" icon="fa fa-sign-out">
                লগআউট
            </x-dashboard.sidebar-link>

        </div>
    </div>
</div>