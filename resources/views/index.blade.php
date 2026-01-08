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
     <!-- Overlay -->

  <!-- Hero Section Slider Start -->
  <x-heroSlide />
  <!-- Hero Section Slider End -->
    {{-- slider here --}}

    
    <!-- Input Search Form Start -->
    <x-search-form />
    <!-- Input Search Form End -->


    
    <!-- Data Link Button Start -->
    <x-biodata-cta />
    <!-- Data Link Button End -->


    
    <!-- Latest card start -->
    <x-LatestSection />
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