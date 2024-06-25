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
            .u-bg-grey{
                background: linear-gradient(to bottom, #D9D9D9, #BFBFBF);
            }

            .u-bg-linear{
                background: linear-gradient(to right, #111330, #100E2E);
            }

            .translate-left-14 {
                transform: translateX(-3.57rem); /* or translateX(-56px) */
                top: 40%;
            }
            .translate-right-14 {
                transform: translateX(4.88rem); /* or translateX(-56px) */
                top:5%;
            }


        </style>
    </head>
    <body class="text-gray-900 antialiased flex m-auto min-h-screen sm:p-6 bg-purple-50 u-bg-fixed p-4 ">
        <div class=" w-full max-w-[30rem] sm:auto relative flex flex-row justify-center items-center m-auto u-bg-grey shadow-none sm:shadow-md  h-[35rem] rounded-3xl ">
            <div class="w-full absolute top-0 -translate-y-12  flex flex-col items-center justify-center">
                <img class="w-64 u-bg-linear rounded-3xl p-4" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </div>
            <div class="absolute left-0 translate-left-14">
                <img class="" src="{{ asset('frontend/flag-left.png') }}" alt="flag">
            </div>
            <div class="absolute right-0 translate-right-14 ">
                <img src="{{ asset('frontend/flag-right.png') }}" alt="flag">
            </div>
            <div class="w-full px-14 py-4 m-auto">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
