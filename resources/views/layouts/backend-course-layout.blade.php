<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen font-sans antialiased bg-color-blue">
    <div class="flex"
        x-data="{ sidebarOpen: true }">
        <div class="shrink-0">
            <livewire:course.course-video-sidebar />
        </div>
        <div class="lg:pl-80 flex-1 w-full">
            <div class="m-auto lg:container px-6 py-3">
                <livewire:course.navbar/>
                <livewire:course.video-content/>
                <div class="mt-14">
                    <div class="m-auto max-w-5xl">
                        <livewire:course.video-content-details>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @livewireScripts
</body>
</html>