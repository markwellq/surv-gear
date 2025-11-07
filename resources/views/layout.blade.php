<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surv Gear | Home</title>

    @vite(['resources/css/app.css', 'resources/js/search.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    @livewireStyles
</head>
<body>
    @livewire("header")

    <main class='mx-auto'>
        @yield("main")
    </main>
    
    @livewire("footer")
    @livewireScripts
</body>
</html>