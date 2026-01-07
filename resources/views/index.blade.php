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
    <div class="h-screen bg-slate-400 w-full">
      <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </div>
    {{-- slider here --}}

    <!-- Input Search Form Start -->

    <x-search-form />

    <!-- Input Search Form End -->

    <!-- Data Link Button Start -->

    <x-biodata-cta />

    <!-- Data Link Button End -->

    <!-- Latest card start -->

    <div class="bg-[#0c1f35] py-6 my-10">r
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
          <h2
            class="text-white text-lg md:text-x font-semibold  border-b border-white inline-block pb-1 whitespace-nowrap">
            সর্বশেষ যুক্ত হওয়া বায়োডাটা</h2>

          <div class="flex space-x-2">
            <button class="slider-prev p-2 rounded-full bg-[#14314d] text-white shadow-md hover:bg-[#1e4a75] transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <button class="slider-next p-2 rounded-full bg-[#14314d] text-white shadow-md hover:bg-[#1e4a75] transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>

      </div>
    </div>

    <!-- Latest card end -->

    <!-- Momin joti work start -->

    <x-Mominjoti />

    <!-- Momin joti work end -->

    <!-- feature CV start -->

    <x-FeatureCV />

    <!-- feature CV end -->

    <!-- Momin joti Data start -->

    <x-MominjotiDB />

    <!-- Momin joti Data end -->


    <!-- Momin joti Seba Start -->

    <x-MominJotiSeba />

    <!-- Momin joti Seba End -->


  @endsection

</body>

</html>