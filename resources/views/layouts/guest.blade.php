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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        
        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/css/app.css'])
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

            /* .translate-left-14 {
                transform: translateX(-3.57rem);
                top: 40%;
            }
            .translate-right-14 {
                transform: translateX(4.88rem);
                top:5%;
            } */


        </style>
    </head>
    <body class="flex min-h-screen p-10 m-auto antialiased text-gray-900 bg-slate-800">
        @if (Request::is('register'))
            <!-- Register Layout -->
            <div class="flex w-full px-2 py-10 m-auto ">
                <div class="relative flex flex-row items-center justify-center w-full max-w-4xl pt-20 pb-10 m-auto shadow-none sm:auto u-bg-grey sm:shadow-md rounded-3xl">
                    <div class="absolute top-0 flex flex-col items-center justify-center w-full -translate-y-12">
                        <img class="w-64 p-4 bg-gray-800 rounded-3xl" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                    </div>
                    <img class="absolute -left-[3.57rem] bottom-0" src="{{ asset('frontend/flag-left.png') }}" alt="flag">
                    <img class="absolute -right-[4.85rem] top-0" src="{{ asset('frontend/flag-right.png') }}" alt="flag">
                    <div class="w-full py-4 m-auto px-14">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @else
            <!-- Default Layout -->
            <div class="flex w-full px-2 py-10 m-auto overflow-x-hidden">
                <div class="w-full max-w-[30rem] sm:auto relative flex flex-row justify-center items-center m-auto u-bg-grey shadow-none sm:shadow-md  h-[35rem] rounded-3xl">
                    <div class="absolute top-0 flex flex-col items-center justify-center w-full -translate-y-12">
                        <img class="w-64 p-4 bg-gray-800 rounded-3xl" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                    </div>
                    <div class="absolute -left-[3.57rem] bottom-0">
                        <img class="" src="{{ asset('frontend/flag-left.png') }}" alt="flag">
                    </div>
                    <div class="absolute -right-[4.85rem] top-0">
                        <img src="{{ asset('frontend/flag-right.png') }}" alt="flag">
                    </div>
                    <div class="w-full py-4 m-auto px-14">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @endif

        @livewireScriptConfig 
    </body>
</html>
