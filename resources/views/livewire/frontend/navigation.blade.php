<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div x-data="{ isNavOpen: false, isSearchBar: false }">
    <div class="flex items-center p-5 border-b border-slate-800">
        <div class="flex items-center flex-grow gap-10 shrink-0">
            <a href="/">
                <img class="h-14" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </a>
            <div class="hidden gap-3 lg:flex">
                <a href="/courses" wire:navigate>Courses</a>
                <a href="">Lorem</a>
                <a href="">Lorem</a>
            </div>
        </div>
        <div class="relative flex items-center justify-end flex-1 gap-3">
            {{-- Cart --}}
            <a class="p-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70" href="/cart" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>
            {{-- Search --}}
            <div class="p-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70"
                @click="isSearchBar = true;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <a href="{{ route('login') }}" wire:navigate>
                <div class="hidden px-4 py-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70 lg:block">
                    <div>
                        Login
                    </div>
                </div>
            </a>
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
            <div class="space-y-3">
                <div class="block px-4 py-2 font-bold text-center transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70">
                    Login
                </div>
                <div class="block px-4 py-2 font-bold text-center transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70">
                    Sign Up
                </div>
            </div>
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="fixed top-0 right-0 z-20 w-full h-screen overflow-auto max-w-96 bg-slate-800 sm:max-w-lg"
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