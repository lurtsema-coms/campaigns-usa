<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="h-full bg-[#F4F6F8]">
        <livewire:layout.sidebar/>
        <div class="flex flex-col w-full lg:pl-72">
            <div class="sticky top-0 z-20">
                <livewire:layout.navbar/>
            </div>
            <div class="z-10 py-6">
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
