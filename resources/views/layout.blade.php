<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surv Gear | Home</title>

    @vite(['resources/css/app.css', 'resources/js/search.js'])
    <script src="//unpkg.com/alpinejs" defer></script>

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