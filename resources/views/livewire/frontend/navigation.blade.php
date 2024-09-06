<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div x-data="{ isNavOpen: false, isSearchBar: false }">
    <div class="flex items-center p-5 text-gray-100 border-b border-slate-800 bg-gradient">
        <div class="flex items-center flex-grow gap-10 shrink-0">
            <a href="/">
                <img class="h-14" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </a>
            <div class="hidden gap-3 lg:flex">
                <a href="/courses" wire:navigate>Courses</a>
            </div>
        </div>
        <div class="relative flex items-center justify-end flex-1 gap-3">
            {{-- Cart --}}
            <a class="p-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70" href="{{ route('cart-section') }}" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>
            <div class="hidden" id="">
                <div class="flex flex-col absolute w-80 sm:w-96 top-[4.5rem] right-56 bg-white text-slate-500 border shadow-sm transition-all z-10" hx-get="" hx-trigger="load" hx-target="#notification-content" >
                    <div>
                        <h1 class="text-xl font-bold text-start p-2 pl-4 shadow-sm">Job Notifications:</h1>
                    </div>
                    <div id="" class="overflow-y-auto  max-h-96 scrollbar-thin scrollbar-thumb-cyan scrollbar-thumb-rounded" >
                    </div>
                    <div class="shadow-custom flex justify-center">
                        <a href="/employer-job" class="p-4 pl-4 text-start font-bold text-cyan-600 ">Go to Jobs</a>
                    </div>
                </div>
            </div>
            {{-- Search --}}
            <div class="p-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70"
                @click="isSearchBar = true;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            @auth
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <div class="hidden px-4 py-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70 lg:block">
                        <div>
                            Dashboard
                        </div>
                    </div>
                </a>
                @else
                <a href="{{ route('login') }}" wire:navigate>
                    <div class="hidden px-4 py-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70 lg:block">
                        <div>
                            Login
                        </div>
                    </div>
                </a>
            @endauth
            {{-- Dark Mode --}}
            <button 
                class="cursor-pointer"
                x-init="
                    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        document.documentElement.classList.add('dark')
                    } else {
                        document.documentElement.classList.remove('dark')
                    }
                "
                x-data="{
                    lightMode: localStorage.theme === 'light' ? 'true' : false,
                    
                    toggleTheme() {
                        if(this.lightMode){
                            localStorage.theme = 'dark'
                            document.documentElement.classList.add('dark')
                        }else{
                            localStorage.theme = 'light'
                            document.documentElement.classList.remove('dark')
                        }

                        this.lightMode = !this.lightMode;
                    }
                }"
                @click="toggleTheme()"
            >
                <div x-show="!lightMode">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                </div>
                <div x-show="lightMode">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </div>
            </button>


            {{-- Menu --}}
            <div class="block p-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70 lg:hidden"
                @click="isNavOpen = true;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
            </div>
        </div>
    </div>
    
    {{-- Responsive Menu --}}
    <div class="fixed top-0 right-0 z-10 h-screen w-96 bg-slate-800"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        x-cloak
        x-show="isNavOpen"
        @click.outside="isNavOpen = false;"
        x-init="
            window.addEventListener('resize', () => {
                isNavOpen = false;
            });
        ">
        <div class="p-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="cursor-pointer size-8 hover:text-red-500"
                @click="isNavOpen = false;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            <div class="my-5 space-y-3">
                <a class="block font-medium hover:opacity-70" href="">Link</a>
                <a class="block font-medium hover:opacity-70" href="">Link</a>
                <a class="block font-medium hover:opacity-70" href="">Link</a>
            </div>
            @auth
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <div class="block px-4 py-2 font-bold text-center transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70">
                        Dashboard
                    </div>
                </a>
                @else
                <a href="{{ route('login') }}" wire:navigate>
                    <div class="block px-4 py-2 font-bold text-center transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70">
                        Login
                    </div>
                </a>
            @endauth
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="fixed top-0 right-0 z-20 w-full h-screen overflow-auto text-gray-100 max-w-96 bg-slate-800 sm:max-w-lg"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        x-cloak
        x-show="isSearchBar"
        @click.outside="isSearchBar = false;">
        <div class="p-5 space-y-8">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute cursor-pointer size-8 hover:text-red-500"
                @click="isSearchBar = false;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <div class="flex-1 text-xl font-bold text-center">
                    Search
                </div>
            </div>
            <input class="w-full bg-gray-200 rounded-lg text-slate-800 focus:bg-white focus:ring-0 focus:border-1" type="text">
        </div>
        <div class="p-5">
            <p class="text-lg font-bold">Recommended Results</p>
        </div>
    </div>
</div>