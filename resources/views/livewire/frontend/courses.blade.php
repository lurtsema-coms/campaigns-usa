<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="px-5 mt-10">
    <div class="w-full mb-28">
        <div class="flex justify-center max-w-sm mx-auto">
            <x-text-input class="w-full h-12 border-gray-400 dark:text-dark" type="search" placeholder="Search a topic...." />
        </div>
    </div>
    {{-- Categories --}}
    <div class="flex flex-wrap justify-center pb-5 gap-9 md:flex-nowrap">
        <a class="relative px-1 group" href="">
            Laravel
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            Tailwind
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            CSS
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            Livewire
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            HTMX
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
    </div>
    {{-- Border --}}
    <div class="w-full h-1 bg-gray-200 dark:bg-transparent dark:bg-custom-border-b"></div>
    {{-- Categories Links --}}
    <div class="flex flex-wrap justify-center gap-10 mt-10 text-dark dark:text-gray-100">
        <a class="flex items-center flex-grow gap-5 p-4 border shadow-md dark:border-gray-700 max-w-72 shrink-0 dark:bg-color-blue rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
        <a class="flex items-center flex-grow gap-5 p-4 border shadow-md dark:border-gray-700 max-w-72 shrink-0 dark:bg-color-blue rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit.</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
        <a class="flex items-center flex-grow gap-5 p-4 border shadow-md dark:border-gray-700 max-w-72 shrink-0 dark:bg-color-blue rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit.</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
    </div>
</div>
