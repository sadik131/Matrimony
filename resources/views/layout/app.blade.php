<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>



    <title>Document</title>
</head>

<body class="bg-[#FAF9FB]">

     @include('partials.navbar')

     <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')



        <script src="{{ asset('js/slider.js') }}"></script>

</body>

</html>