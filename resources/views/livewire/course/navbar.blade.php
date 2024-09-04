<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="sticky top-0 z-10 bg-color-blue md:relative">
    <div class="flex items-center justify-between py-3">
        <img class="w-36" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
        <div class="flex gap-2 text-white">
            <div class="hidden px-4 py-2 transition-all rounded-lg cursor-pointer bg-color-blue hover:opacity-70">
                <div>
                    Login
                </div>
            </div>
            <div class="hidden px-4 py-2 transition-all rounded-lg min-w-fit bg-color-blue cur sor-pointer hover:opacity-70">
                <div>
                    Sign Up
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block cursor-pointer size-8 lg:hidden"
                @click="sidebarOpen = !sidebarOpen;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>        
    </div>
</div>
