<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surv Gear</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>


    @livewireStyles
</head>
<body class="overflow-x-hidden">
    @livewire("header")

    <main class='mx-auto'>
        @yield("main")
    </main>
    
    @livewire("footer")
    @livewireScripts
</body>
</html>