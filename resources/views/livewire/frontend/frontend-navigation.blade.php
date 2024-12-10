<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div
    x-data="{ isScrolled: false }" 
    x-init="window.addEventListener('scroll', () => isScrolled = window.scrollY > 0)"
    :class="isScrolled ? 'border-b border-gray-700' : ''"
    class="sticky top-0 z-10"
>
    <div class="h-40 p-5 w-ful l u-bg-fixed sm:p-0 sm:relative" id="navbar" data-aos="fade-down">
        <div class="h-full w-full m-auto max-w-[120rem]">
            <div class="flex items-center h-full sm:px-12 md:px-20 lg:px-28">
                <!-- Logo SVG -->
                <div class="flex-1 flex-shrink-0 min-w-[100px] sm:min-w-[150px] md:min-w-[200px]">
                    <a href="/">
                        <img class="w-64 sm:w-auto" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="justify-center flex-1 hidden gap-4 text-lg md:text-xl md:justify-end xl:flex">
                    <a class="relative group" href="{{ route('home') }}">
                        HOME
                        <span class="absolute left-0 {{ Route::is('home') ? 'w-full' : 'w-0' }} h-1 transition-all bg-white -bottom-1 group-hover:w-full"></span>
                    </a>
                    <a class="relative group" href="{{ route('courses') }}">
                        COURSES
                        <span class="absolute left-0 w-0 h-1 transition-all bg-white -bottom-1 group-hover:w-full"></span>
                    </a>
                    <a class="relative group" href="{{ route('about') }}">
                        ABOUT
                        <span class="absolute left-0 {{ Route::is('about') ? 'w-full' : 'w-0' }} w-0 h-1 transition-all bg-white -bottom-1 group-hover:w-full"></span>
                    </a>
                    <a class="relative group" href="{{ route('contact') }}">
                        CONTACT
                        <span class="absolute left-0 {{ Route::is('contact') ? 'w-full' : 'w-0' }} h-1 transition-all bg-white -bottom-1 group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Call Now Button -->
                <div class="hidden flex-1 flex-shrink-0 text-end min-w-[100px] sm:min-w-[150px] md:min-w-[200px] xl:block" id="call-now">
                    <a class="p-2 text-lg font-medium transition-all bg-red-600 md:text-xl sm:p-3 md:p-4 rounded-xl hover:bg-white hover:text-red-600" href="">
                    CALL NOW
                    </a>
                </div>

                <div class="z-30 block text-white cursor-pointer xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10"
                    @click="isOpenSidebar=true; console.log('clicked')">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>

                <div class="fixed top-0 right-0 z-30 p-10 space-y-5 text-gray-600 bg-white h-dvh w-72"
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="cursor-pointer size-10 hover:opacity-70"
                    @click="isOpenSidebar=false;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                    <div class="flex flex-col space-y-4 text-lg">
                        <a class="text-2xl hover:opacity-70" href="">HOME</a>
                        <a class="text-2xl hover:opacity-70" href="">COURSES</a>
                        <a class="text-2xl hover:opacity-70" href="">ABOUT</a>
                        <a class="text-2xl hover:opacity-70" href="">CONTACT</a>
                    </div>
                    <div>
                        <a href="">
                            <div class="p-3 text-lg font-medium text-center text-white bg-red-600 rounded hover:bg-gray-600 hover:text-white">CALL NOW</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
