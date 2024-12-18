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
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="min-h-screen font-sans antialiased bg-color-blue">
    <div class="flex"
        x-data="{ sidebarOpen: true }">
        <div class="shrink-0">
            <livewire:frontend.course.course-video-sidebar />
        </div>
        <div class="flex-1 w-full lg:pl-80">
            <div class="px-6 py-3 m-auto lg:container">
                <livewire:frontend.course.navbar/>
                <livewire:frontend.course.video-content/>
                <div class="mt-14">
                    <div class="max-w-5xl m-auto">
                        <livewire:frontend.course.video-content-details>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @livewireScripts
</body>
</html>