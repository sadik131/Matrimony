@props([
    'url' => request()->url(),
    'title' => ''
])

<div class="grid grid-cols-2 md:flex gap-5 items-center">

    {{-- Twitter --}}
    <a
        href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($title) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#1da1f2] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">

        <span class="me-2 [&>svg]:h-4 [&>svg]:w-4">
            {{-- twitter svg --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                <path d="M459.4 151.7c.3 4.5.3 9.1.3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/>
            </svg>
        </span>
        Twitter
    </a>

    {{-- Facebook --}}
    <a
        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#3b5998] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">
        Facebook
    </a>

    {{-- LinkedIn --}}
    <a
        href="https://www.linkedin.com/shareArticle?url={{ urlencode($url) }}&title={{ urlencode($title) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#0077b5] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">
        LinkedIn
    </a>

    {{-- WhatsApp --}}
    <a
        href="https://wa.me/?text={{ urlencode($title.' '.$url) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#25D366] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">
        WhatsApp
    </a>

</div>
