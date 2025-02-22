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
    <body class="flex min-h-screen m-auto antialiased text-gray-900 bg-gray-100">
        <img src="{{ asset('frontend/bg-form.png') }}" alt="" class="fixed object-cover w-full h-full -z-10">

        <div class="relative w-full py-10 m-auto overflow-hidden">
            <div class="relative flex flex-col justify-center w-full {{ Route::is('register') ? 'max-w-4xl' : 'max-w-md' }} px-10 py-12 m-auto mx-auto sm:border sm:shadow sm:bg-gray-100 rounded-3xl">
                <div class="absolute -left-[3.57rem] -bottom-5 hidden sm:block">
                    <img class="" src="{{ asset('frontend/flag-left.png') }}" alt="flag">
                </div>
                <div class="absolute -right-[4.85rem] -top-5 hidden sm:block">
                    <img src="{{ asset('frontend/flag-right.png') }}" alt="flag">
                </div>
                {{-- LOGO --}}
                <div class="absolute flex justify-center w-full py-4 mx-auto text-2xl transform -translate-x-1/2 bg-gray-800 left-1/2 -top-9 max-w-60 rounded-3xl">
                    <img class="w-auto h-14" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                </div>
                
                @if (Request::is('register'))
                    {{ $slot }}
                @else
                    {{ $slot }}
                @endif
            </div>
        </div>

    </body>
</html>
