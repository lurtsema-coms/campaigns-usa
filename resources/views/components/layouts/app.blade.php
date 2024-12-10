<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        {{-- Animate Sroll Libray --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .u-bg-fixed{
                background: linear-gradient(to right, #152034, #0B0029);
            }

            .u-bg-contact{
                background: linear-gradient(to right, #0B0029, #152034);
            }

            html{
                font-size: 14px;
            }

            @media (max-width: 1400px) {
                #call-now{
                    flex: 0;
                    text-align: center;
                }

                html{
                    font-size: 12px;
                }
            }

        </style>
    </head>
    <body class="min-h-screen antialiased text-white u-bg-fixed" x-data="{ joeLurtsema: false, brooksPitcher: false, jubileeUnderwood: false, robertYundt: false, isOpenSidebar: false }">

        <div id="loader" class="absolute inset-0 flex u-bg-fixed">
            <div class="m-auto">
                <img class="object-contain w-full max-w-96" src="{{ asset('frontend/CUSA-Logo-Loading.gif') }}" alt="Loading...">
            </div>
        </div>

        @livewire('frontend.frontend-navigation')
        {{ $slot }}

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            document.onreadystatechange = function () {
                if (document.readyState !== "complete") {
                    document.querySelector("body").style.visibility = "hidden";
                    document.querySelector("#loader").style.visibility = "visible";
                } else {
                    document.querySelector("#loader").style.display = "none";
                    document.querySelector("body").style.visibility = "visible";
                }
            };

            AOS.init({
                offset: 300, // Offset (in pixels) from the original trigger point
                delay: 100,    // Delay in milliseconds
                duration: 600, // Animation duration in milliseconds
                easing: 'ease', // Default easing for AOS animations
                once: true
            });
        </script>
    </body>
</html>
