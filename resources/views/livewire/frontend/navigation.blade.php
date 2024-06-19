<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div x-data="{ isNavOpen: false }">
    <div class="flex items-center p-5 border-b border-slate-800">
        <div class="flex-grow shrink-0 flex items-center gap-10">
            <img class="h-14" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            <div class="hidden gap-3 lg:flex">
                <a href="">Lorem</a>
                <a href="">Lorem</a>
                <a href="">Lorem</a>
            </div>
        </div>
        <div class="flex-1 relative flex justify-end items-center gap-3">
            {{-- Cart --}}
            <div class="bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </div>
            {{-- Search --}}
            <div class="bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70">
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
            <div class="block bg-color-blue p-2 rounded-lg cursor-pointer transition-all hover:opacity-70 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
            </div>
        </div>
    </div>
    
    <div class="fixed top-0 right-0 h-screen w-96 bg-slate-800"
        x-show="isNavOpen">
        <div class="p-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</div>
