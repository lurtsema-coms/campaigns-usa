<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="mt-44 px-5">
    {{-- Categories --}}
    <div class="flex flex-wrap justify-center gap-9 pb-5 md:flex-nowrap">
        <a class="relative group px-1" href="">
            Laravel
            <span class="absolute -bottom-3 left-0 w-0 transition-all h-1 bg-white group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative group px-1" href="">
            Tailwind
            <span class="absolute -bottom-3 left-0 w-0 transition-all h-1 bg-white group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative group px-1" href="">
            CSS
            <span class="absolute -bottom-3 left-0 w-0 transition-all h-1 bg-white group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative group px-1" href="">
            Livewire
            <span class="absolute -bottom-3 left-0 w-0 transition-all h-1 bg-white group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative group px-1" href="">
            HTMX
            <span class="absolute -bottom-3 left-0 w-0 transition-all h-1 bg-white group-hover:w-full md:-bottom-6"></span>
        </a>
    </div>
    {{-- Border --}}
    <div class="w-full h-1 bg-custom-border-b"></div>
    {{-- Categories Links --}}
    <div class="flex justify-center flex-wrap gap-10 mt-10">
        <a class="max-w-72 flex-grow shrink-0 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
        <a class="max-w-72 flex-grow shrink-0 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit.</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
        <a class="max-w-72 flex-grow shrink-0 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400" href="{{ route('course-section', 1) }}" wire:navigate>
            <img class="object-contain w-16" src="https://via.placeholder.com/64" alt="Sample Image">
            <div class="space-y-2">
                <p class="font-bold">Lorem ipsum dolor sit.</p>
                <p class="text-xs">12 Series | 118 videos</p>
            </div>
        </a>
    </div>
</div>
