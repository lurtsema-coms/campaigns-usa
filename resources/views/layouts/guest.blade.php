<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .u-bg-fixed{
                background: linear-gradient(to right, #152034, #0B0029);
                /* background: linear-gradient(to right, #0b0029f4, #10102F); */
            }
            .test{
                background: radial-gradient(circle, rgba(21,32,52,1) 52%, rgba(11,0,41,1) 100%);
            }

            .test2{
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;            
            }

        </style>
    </head>
    <body class="text-gray-900 antialiased flex m-auto min-h-screen bg-purple-50">
        <div class="w-full max-w-6xl flex flex-row justify-center m-auto bg-white  shadow-none sm:shadow-md overflow-hidden h-[35rem] ">
            <div class="w-2/5 hidden sm:block relative bg-contain bg-no-repeat bg-center u-bg-fixed items-center justify-center">
                <img class="absolute inset-0 m-auto" src="{{asset('frontend/test.png')}}" alt="">
                <div class=" test w-full h-full absolute inset-0 z-20 opacity-75"></div>
            </div>
            <div class="w-full sm:w-3/5 px-14 py-4 m-auto">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
