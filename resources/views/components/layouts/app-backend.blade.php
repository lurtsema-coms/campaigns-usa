<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="h-full bg-gray-100">
        <livewire:layout.sidebar/>
        <div class="flex flex-col w-full lg:pl-80">
            <div class="sticky top-0 ">
                <livewire:layout.navbar/>
            </div>
            {{ $slot }}
        </div>

    </body>
</html>
