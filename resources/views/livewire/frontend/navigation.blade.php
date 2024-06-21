<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div x-data="{ isNavOpen: false, isSearchBar: false }">
    <div class="flex items-center p-5 border-b border-slate-800">
        <div class="flex-grow shrink-0 flex items-center gap-10">
            <a href="/">
                <img class="h-14" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </a>
            <div class="hidden gap-3 lg:flex">
                <a href="/courses" wire:navigate>Courses</a>
                <a href="">Lorem</a>
                <a href="">Lorem</a>
            </div>
        </div>
        <div class="flex-1 relative flex justify-end items-center gap-3">
            {{-- Cart --}}
            <a class="bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70" href="/cart" wire:navigate>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>
            {{-- Search --}}
            <div class="bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70"
                @click="isSearchBar = true;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <div class="hidden bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70 lg:block">
                <div>
                    Login
                </div>
            </div>
            <div class="hidden min-w-fit bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70 lg:block">
                <div>
                    Sign Up
                </div>
            </div>
            {{-- Menu --}}
            <div class="block bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70 lg:hidden"
                @click="isNavOpen = true;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
            </div>
        </div>
    </div>
    
    {{-- Responsive Menu --}}
    <div class="fixed top-0 right-0 h-screen w-96 bg-slate-800 z-10"
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
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 cursor-pointer hover:text-red-500"
                @click="isNavOpen = false;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            <div class="my-5 space-y-3">
                <a class="block font-medium hover:opacity-70" href="">Link</a>
                <a class="block font-medium hover:opacity-70" href="">Link</a>
                <a class="block font-medium hover:opacity-70" href="">Link</a>
            </div>
            <div class="space-y-3">
                <div class="block font-bold text-center bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70">
                    Login
                </div>
                <div class="block font-bold text-center bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70">
                    Sign Up
                </div>
            </div>
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="fixed top-0 right-0 h-screen w-full max-w-96 bg-slate-800 z-20 overflow-auto sm:max-w-lg"
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute size-8 cursor-pointer hover:text-red-500"
                @click="isSearchBar = false;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <div class="flex-1 text-center text-xl font-bold">
                    Search
                </div>
            </div>
            <input class="w-full rounded-lg bg-gray-200 text-slate-800 focus:bg-white focus:ring-0 focus:border-1" type="text">
        </div>
        <div class="p-5">
            <p class="font-bold text-lg">Recommended Results</p>
        </div>
    </div>
</div>