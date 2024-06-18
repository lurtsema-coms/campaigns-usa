<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        {{-- Animate Sroll Libray --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <body class="text-white min-h-screen antialiased u-bg-fixed" x-data="{ joeLurtsema: false, brooksPitcher: false, jubileeUnderwood: false, robertYundt: false, isOpenSidebar: false }">

        <div id="loader" class="absolute u-bg-fixed inset-0 flex">
            <div class="m-auto">
                <img class="object-contain w-full max-w-96" src="{{ asset('frontend/CUSA-Logo-Loading.gif') }}" alt="Loading...">
            </div>
        </div>

        {{-- JOE LURTSEMA --}}
        <div class="fixed flex min-h-screen min-w-screen p-10 inset-0 bg-black bg-opacity-85 z-20"
            x-cloak
            x-init="
                setTimeout(() => { 
                    brooksPitcher = false;
                    jubileeUnderwood = false;
                    robertYundt = false; 
                    joeLurtsema = true; 

                    document.documentElement.style.overflow = 'hidden';
                }, 12000)
            " 
            x-show="joeLurtsema"
            x-transition>
            <div class="m-auto text-black w-full max-w-5xl bg-white bg-opacity-80 border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                @click.outside="
                    joeLurtsema=false;
                    document.documentElement.style.overflow = 'auto';
                ">
                <div class="flex justify-center flex-wrap h-full">
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 p-3 rounded-lg text-white text-2xl font-bold z-10 bg-[#C4172E] hover:bg-white hover:text-[#C4172E] sm:text-5xl">
                        BOOK NOW!
                    </div>
                    <!-- First Div (30%) -->
                    <div class="relative flex justify-center w-full max-w-md sm:justify-start">
                        <img class="w-96 sm:relative bottom-0 -left-12 object-contain max-w-xl sm:w-auto lg:absolute" src="{{ asset('frontend/joe-edited.png') }}" alt="">
                    </div>
                    <!-- Second Div (70%) -->
                    <div class="relative flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47]">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2  p-3 rounded-lg text-white text-lg font-bold [background:linear-gradient(to_bottom,#C4172E,#4A000A)] sm:text-2xl">
                            FREE CONSULTATION!
                        </div>
                        <div class="text-center space-y-2">
                            <p class="text-lg font-bold tracking-wider sm:text-xl">1 on 1 class with</p>
                            <p class="text-4xl font-bold tracking-wider sm:text-6xl">JOSEPH</p>
                            <p class="text-4xl font-bold tracking-wider sm:text-6xl">LURTSEMA</p>
                            <p class="text-lg tracking-wider sm:text-xl">CEO | CAMPAIGN SPECIALIST | FOUNDER</p>
                        </div>
                        <div class="flex justify-center mt-8">
                        <a href="flex">
                                <div class="flex items-center gap-1 bg-[#002E80] py-3 px-4 text-center text-xl rounded-3xl text-white transition-all cursor-pointer hover:bg-white hover:text-[#002E80]">
                                    <span>LEARN MORE ABOUT ME</span>
                                    <span class="relative -top-[1px]">></span>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        {{-- BROOKS PITCHER --}}
        <div class="fixed flex min-h-screen min-w-screen p-10 inset-0 bg-black bg-opacity-85 z-20"
            x-cloak
            x-show="brooksPitcher"
            x-transition>
            <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                @click.outside="
                    brooksPitcher=false;
                    document.documentElement.style.overflow = 'auto';">
                <div class="flex justify-center flex-wrap h-full">
                    <!-- First Div (30%) -->
                    <div class="flex relative w-full max-w-md">
                        <img class="w-96 sm:relative bottom-0 -left-24 object-contain max-w-xl sm:w-auto lg:absolute" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                    </div>
                    <!-- Second Div (70%) -->
                    <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                        <div>
                            <p class="text-4xl font-bold mb-3 tracking-wider sm:text-6xl">BROOKS PITCHER</p>
                            <p class="font-bold text-2xl tracking-wider sm:text-xl">FOR SCHOOL BOARD</p>
                        </div>
                        <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                        <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- JUBILEE UNDERWOOD --}}
        <div class="fixed flex min-h-screen min-w-screen p-10 inset-0 bg-black bg-opacity-85 z-20"
            x-cloak
            x-show="jubileeUnderwood"
            x-transition>
            <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[30rem]"
                @click.outside="
                    jubileeUnderwood=false;
                    document.documentElement.style.overflow = 'auto';">
                <div class="flex justify-center flex-wrap h-full">
                    <!-- First Div (30%) -->
                    <div class="flex relative w-full max-w-md">
                        <img class="w-96 sm:relative -bottom-1 -left-24 object-contain max-w-xl sm:w-auto lg:absolute" src="{{ asset('frontend/campaign2-modal.png') }}" alt="">
                    </div>
                    <!-- Second Div (70%) -->
                    <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                        <div>
                            <p class="text-4xl font-bold mb-3 tracking-wider sm:text-6xl">JUBILEE</p>
                            <p class="text-4xl font-bold mb-3 tracking-wider sm:text-6xl">UNDERWOOD</p>
                            <p class="font-bold text-2xl tracking-wider sm:text-xl">FOR STATE HOUSE</p>
                        </div>
                        <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                        <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- BROOKS PITCHER --}}
        <div class="fixed flex min-h-screen min-w-screen p-10 inset-0 bg-black bg-opacity-85 z-20"
            x-cloak
            x-show="robertYundt"
            x-transition>
            <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                @click.outside="
                robertYundt=false;
                document.documentElement.style.overflow = 'auto';">
                <div class="flex justify-center flex-wrap h-full">
                    <!-- First Div (30%) -->
                    <div class="flex relative w-full max-w-md">
                        <img class="w-96 sm:relative bottom-0 -left-24 object-contain max-w-xl sm:w-auto lg:absolute" src="{{ asset('frontend/campaign3-modal.png') }}" alt="">
                    </div>
                    <!-- Second Div (70%) -->
                    <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                        <div>
                            <p class="text-4xl font-bold mb-3 tracking-wider sm:text-6xl">ROBERT YUNDT</p>
                            <p class="font-bold text-2xl tracking-wider sm:text-xl">FOR STATE SENATE</p>
                        </div>
                        <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                        <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navbar --}}
        <div class="w-ful p-5 l h-40 z-10 u-bg-fixed sticky top-0 sm:p-0 sm:relative" id="navbar" data-aos="fade-down">
            <div class="h-full w-full m-auto max-w-[120rem]">
                <div class="h-full flex items-center sm:px-12 md:px-20 lg:px-28">
                    <!-- Logo SVG -->
                    <div class="flex-1 flex-shrink-0 min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                        <a href="/">
                            <img class="w-64 sm:w-auto" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden flex-1 gap-4 text-lg md:text-xl justify-center md:justify-end xl:flex">
                        <a class="relative group" href="">
                            HOME
                            <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                        </a>
                        <a class="relative group" href="">
                            COURSES
                            <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                        </a>
                        <a class="relative group" href="">
                            PRICING
                            <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                        </a>
                        <a class="relative group" href="">
                            ABOUT
                            <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                        </a>
                        <a class="relative group" href="">
                            CONTACT
                            <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                        </a>
                    </div>

                    <!-- Call Now Button -->
                    <div class="hidden flex-1 flex-shrink-0 text-end min-w-[100px] sm:min-w-[150px] md:min-w-[200px] xl:block" id="call-now">
                        <a class="text-lg md:text-xl font-medium p-2 sm:p-3 md:p-4 rounded-xl bg-red-600 transition-all hover:bg-white hover:text-red-600" href="">
                        CALL NOW
                        </a>
                    </div>

                    <div class="block text-white cursor-pointer z-30 xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10"
                        @click="isOpenSidebar=true; console.log('clicked')">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>

                    <div class="h-dvh text-gray-600 bg-white fixed top-0 right-0 w-72 z-30 p-10 space-y-5"
                        x-cloak
                        x-show="isOpenSidebar"
                        x-init="
                            window.addEventListener('resize', () => {
                                if (window.innerWidth > 1280) {
                                    isOpenSidebar = false;
                                }
                            });
                            if (window.innerWidth > 1280) {
                                isOpenSidebar = false;
                            }
                        "
                        @click.outside="isOpenSidebar=false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 cursor-pointer hover:opacity-70"
                        @click="isOpenSidebar=false;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        <div class="flex flex-col space-y-4 text-lg">
                            <a class="hover:opacity-70 text-2xl" href="">HOME</a>
                            <a class="hover:opacity-70 text-2xl" href="">COURSES</a>
                            <a class="hover:opacity-70 text-2xl" href="">PRICING</a>
                            <a class="hover:opacity-70 text-2xl" href="">ABOUT</a>
                            <a class="hover:opacity-70 text-2xl" href="">CONTACT</a>
                        </div>
                        <div>
                            <a href="">
                                <div class="text-lg text-white p-3 text-center rounded font-medium bg-red-600 hover:bg-gray-600 hover:text-white">CALL NOW</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full m-auto max-w-[120rem]">
            <div class="pt-20 sm:px-12 md:px-20 lg:px-28">
                <div class="flex flex-wrap">
                    <div class="flex-1">
                        <div class="flex flex-col pt-10 px-5"
                            x-data="{ show1: false, show2: false, show3: false, show4: false }" 
                            x-init="
                                setTimeout(() => show1 = true, 500);
                                setTimeout(() => show2 = true, 800);
                                setTimeout(() => show3 = true, 1100);
                                setTimeout(() => show4 = true, 1400);
                            ">
                            <!-- First Paragraph -->
                            <p class="font-bold text-5xl sm:text-8xl min-w-[20rem]"
                                x-cloak
                                x-show="show1" 
                                x-transition:enter="transition transform ease-out duration-100"
                                x-transition:enter-start="opacity-0 translate-y-10" 
                                x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                Join and
                            </p>
                            
                            <!-- Second Paragraph -->
                            <p 
                                class="font-bold text-5xl sm:text-8xl"
                                x-cloak
                                    x-show="show2" 
                                x-transition:enter="transition transform ease-out duration-100"
                                x-transition:enter-start="opacity-0 translate-y-10" 
                                x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                Learn from
                            </p>
                            
                            <!-- Third Paragraph -->
                            <p class="font-bold text-5xl sm:text-8xl"
                                x-cloak
                                x-show="show3" 
                                x-transition:enter="transition transform ease-out duration-100"
                                x-transition:enter-start="opacity-0 translate-y-10"
                                x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                The Best.
                            </p>
                            
                            <!-- Fourth Paragraph -->
                            <p class="font-bold text-2xl mt-5 max-w-[41rem] tracking-widest 400px:min-w-[28rem] sm:text-3xl" 
                                x-cloak
                                x-show="show4" 
                                x-transition:enter="transition transform ease-out duration-100"
                                x-transition:enter-start="opacity-0 translate-y-10" 
                                x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                We help win hundreds of campaigns in the last 3 years!
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex m-auto justify-center flex-wrap lg:flex-nowrap lg:justify-start" data-aos="fade-left">
                        <div class="w-full min-w-[20rem] flex flex-col items-center 400px:w-[30rem] 400px:max-w-auto">
                            <div x-data="{ hover: false }">
                                <img class="h-[30rem] w-full"
                                    :src="hover ? '{{ asset('frontend/poli1-hovered.png') }}' : '{{ asset('frontend/poli1.png') }}'"
                                    @mouseover="hover = true" 
                                    @mouseleave="hover = false">
                            </div>
                            <a class="">
                                <div class="font-medium text-xl bg-red-600 w-60 py-4 text-center rounded-3xl cursor-pointer transition-all hover:bg-white hover:text-red-600">JOIN THE WINNERS</div>
                            </p>
                        </div>
                        <div class="w-full max-w-[30rem] flex flex-col items-center 400px:w-[30rem] 400px:max-w-auto">
                            <div x-data="{ hover: false }">
                                <img class="h-[30rem] w-full"
                                    :src="hover ? '{{ asset('frontend/poli2-hovered.png') }}' : '{{ asset('frontend/poli2.png') }}'"
                                    @mouseover="hover = true" 
                                    @mouseleave="hover = false">
                            </div>
                            <a class="">
                                <div class="font-medium text-xl bg-[#002E80] w-60 py-4 text-center rounded-3xl border border-white transition-all hover:bg-white hover:text-[#002E80] cursor-pointer">VIEW COURSE</div>
                            </p>       
                        </div>               
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full m-auto max-w-[120rem]">
            <div class="pt-56 px-5 sm:px-12 md:px-20 lg:px-28">
                <div class="w-full max-w-[96rem] m-auto" data-aos="fade-up">
                    <p class="text-3xl text-[#FFFFFFCC] font-bold">Notable Campaigns</p>
                    <div class="mt-5 w-full rounded-2xl bg-[#FFFFFF4D] flex flex-col gap-10 items-center p-10 sm:flex-row">
                        <div class="flex-1"
                            x-data="{ hover: false }"
                            @click="
                                brooksPitcher = true;
                                document.documentElement.style.overflow = 'hidden';">
                            <img class="mx-auto object-contain h-full cursor-pointer" alt=""
                                :src="hover ? '{{ asset('frontend/campaign1-colored.png') }}' : '{{ asset('frontend/campaign1.png') }}'"
                                @mouseover="hover = true" 
                                @mouseleave="hover = false"
                            >
                        </div>
                        <div class="flex-1"
                            x-data="{ hover: false }"
                            @click="
                                jubileeUnderwood = true;
                                document.documentElement.style.overflow = 'hidden';
                            ">
                            <img class="mx-auto object-contain h-full cursor-pointer" alt=""
                                :src="hover ? '{{ asset('frontend/campaign2-colored.png') }}' : '{{ asset('frontend/campaign2.png') }}'"
                                @mouseover="hover = true" 
                                @mouseleave="hover = false"
                            >
                        </div>
                        <div class="flex-1"
                            x-data="{ hover: false }"
                            @click="
                                robertYundt = true;
                                document.documentElement.style.overflow = 'hidden';">
                            <img class="mx-auto object-contain h-full cursor-pointer" alt=""
                                :src="hover ? '{{ asset('frontend/campaign3-colored.png') }}' : '{{ asset('frontend/campaign3.png') }}'"
                                @mouseover="hover = true" 
                                @mouseleave="hover = false"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full m-auto max-w-[120rem]">
            <div class="pt-28 px-5 lg:pt-72 sm:px-12 md:px-20 lg:px-28">
                <div class="m-auto max-w-[96rem]">
                    <div class="flex flex-wrap justify-center" data-aos="fade-up">
                        <img class="object-contain h-60 sm:h-80" src="{{ asset('frontend/floating_book.gif') }}" alt="">
                        <div class="flex flex-col justify-center text-center">
                            <p class="text-5xl font-bold tracking-widest sm:text-8xl">LATEST CLASSES</p>
                            <p class="mt-4 text-2xl tracking-wide">Learn the Ins & Outs from Joseph Lurtsema!</p>
                        </div>
                    </div>
                    <div class="pt-16 flex flex-wrap justify-center gap-12">
                        <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition ease hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                            <div class="h-48 w-full bg-gray-300 rounded-lg">
                            </div>
                            <div class="mt-10 flex-1 space-y-3 ">
                                <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                                <div id="class-star">
                                    <div class="flex items-center gap-2">
                                        <span class="flex flex-row-reverse">
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </span>
                                        <span>(000)</span> 
                                    </div>
                                </div>
                                <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <span>(0000)</span>
                                <Span>User reviews</Span>
                            </div>
                        </div>
                        <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition-all hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                            <div class="h-48 w-full bg-gray-300 rounded-lg">
                            </div>
                            <div class="mt-10 flex-1 space-y-3 ">
                                <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                                <div id="class-star">
                                    <div class="flex items-center gap-2">
                                        <span class="flex flex-row-reverse">
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </span>
                                        <span>(000)</span> 
                                    </div>
                                </div>
                                <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <span>(0000)</span>
                                <Span>User reviews</Span>
                            </div>
                        </div>
                        <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition-all hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                            <div class="h-48 w-full bg-gray-300 rounded-lg">
                            </div>
                            <div class="mt-10 flex-1 space-y-3 ">
                                <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                                <div id="class-star">
                                    <div class="flex items-center gap-2">
                                        <span class="flex flex-row-reverse">
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
    
                                            <svg class="text-gray-600 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 duration-100 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </span>
                                        <span>(000)</span> 
                                    </div>
                                </div>
                                <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <span>(0000)</span>
                                <Span>User reviews</Span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-20 flex justify-center">
                        <a href="">
                            <div class="text-2xl font-medium bg-[#002E80] p-4 text-center rounded-3xl border border-white hover:bg-white hover:text-[#002E80]">BROWSE COURSES</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pt-72" data-aos="fade-right">
            <div class="m-auto max-w-[136rem] relative overflow-hidden">
                <div class="absolute -top-20 -right-48 inset-0 bg-no-repeat bg-right-bottom bg-contain -z-10 hidden lg:block" style="background-image: url('{{ asset('frontend/lurtsema_logo.png') }}');">
                </div>
                <div class="m-auto max-w-[120rem] mb-20 xl:mb-0">
                    <p class="text-5xl font-bold px-5 sm:px-12 sm:text-8xl md:px-20 lg:px-28">ABOUT</p>
                </div>
                <div class="m-auto flex justify-center items-center flex-col relative max-w-2xl rounded-2xl bg-white lg:[background-color:rgba(255,255,255,0.8)] xl:bg-transparent xl:h-auto xl:items-start lg:h-[49rem] lg:max-w-full lg:flex-row lg:w-full xl:[clip-path:polygon(0%_1%,100%_0%,100%_70%,0%_90%)]">
                    <div class="relative -bottom-9 lg:shrink-0">
                        <img class="h-[30rem] w-auto object-contain sm:h-[40rem] lg:h-[65rem]" src="{{ asset('frontend/joe.png') }}" alt="">
                    </div>
                    <div class="my-20 mx-10 max-w-4xl flex flex-col space-y-16 text-slate-600 tracking-widest mr-5 xl:mt-80 xl:mr-0">
                        <p class="text-xl sm:text-3xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis fugiat laboriosam expedita suscipit odio! Labore eos repellat laboriosam ut veritatis.</p>
                        <p class="text-xl sm:text-3xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, amet?</p>
                        <div class="mt-20 flex justify-center">
                            <a href="">
                                <div class="text-2xl bg-[#002E80] py-4 px-6 text-center rounded-3xl text-white transition-all hover:bg-white hover:text-[#002E80] sm:text-3xl">
                                    <span>LEARN MORE</span>
                                    <span class="relative -top-[1px]">></span>
                                </div>
                            </a>
                        </div>                </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-[40rem] w-full -z-10 xl:bg-white opacity-80 xl:-skew-y-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pt-72" data-aos="fade-up">
            <div class="m-auto max-w-[136rem] relative">
                <img class="absolute w-full bottom-0" src="{{ asset('frontend/usa.png') }}" alt="">
                <div class="m-auto max-w-[106rem]">
                    <div class="h-[30rem] w-full rounded-tl-[4rem] rounded-tr-[4rem] u-bg-contact sm:h-[47rem]">
                        <div class="p-20 space-y-10">
                            <div class="flex items-center gap-10 flex-col sm:flex-row">
                                <div class="flex-1 text-2xl sm:text-4xl font-bold">
                                    PREPARED TO BE CAMPAIGN READY?
                                </div>
                                <div class="flex-1 flex justify-end gap-10">
                                    <a href="">
                                        <img class="object-contain  h-10 sm:h-14" src="{{ asset('frontend/facebook.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img class="object-contain  h-10 sm:h-14" src="{{ asset('frontend/ig.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img class="object-contain  h-10 sm:h-14" src="{{ asset('frontend/youtube.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img class="object-contain  h-10 sm:h-14 filter brightness-0 invert" src="{{ asset('frontend/tiktok.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="mt-15 sm:m-0">
                                <a class="text-2xl font-medium bg-red-600 p-4 rounded-full hover:bg-white hover:text-red-600" href="">
                                    CALL NOW!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

