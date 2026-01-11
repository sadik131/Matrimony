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
         <span class='me-2 [&>svg]:h-4 [&>svg]:w-4'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512" class="h-4 w-4">
        <path d="M279.14 288l14.22-92.66h-88.91V117.78c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
    </svg>
         </span>
        Facebook
    </a>

    {{-- LinkedIn --}}
    <a
        href="https://www.linkedin.com/shareArticle?url={{ urlencode($url) }}&title={{ urlencode($title) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#0077b5] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">
        <span class='me-2 [&>svg]:h-4 [&>svg]:w-4'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" class="h-4 w-4">
            <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
            </svg>
         </span>
        LinkedIn
    </a>

    {{-- WhatsApp --}}
    <a
        href="https://wa.me/?text={{ urlencode($title.' '.$url) }}"
        target="_blank"
        class="mb-2 flex rounded bg-[#25D366] px-6 py-2.5 text-xs font-medium uppercase text-white shadow-md hover:shadow-lg transition">
        <span class='me-2 [&>svg]:h-4 [&>svg]:w-4'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" class="h-4 w-4">
                <path d="M380.9 97.1C339-6.3 207.2-35.1 117.6 54.5 40.6 131.5 30.5 249.5 91.4 337L64 448l113.2-29.6c84.6 46.4 193.4 15.2 240.5-70.7 34.3-62.3 36.1-140.5-36.8-250.6z"/>
            </svg>
         </span>
        WhatsApp
    </a>

</div>
