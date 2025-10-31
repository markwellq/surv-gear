<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>

    @vite(['resources/css/app.css', 'resources/js/search.js'])


    @livewireStyles
</head>
<body>
    @livewire("header")
    {{-- @livewire("nav") --}}
    <main class='container mx-auto'>
        @yield("main")
    </main>
    @livewire("footer")
    @livewireScripts
</body>
</html>