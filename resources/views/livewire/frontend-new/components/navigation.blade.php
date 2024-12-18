<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="sticky top-0 z-10 shadow-sm bg-slate-800">
    <div class="relative flex items-center justify-between w-full h-20 px-5 mx-auto text-gray-300 max-w-8xl">
        <!-- Left section: CAMPAIGNS USA -->
        <div class="flex items-center gap-32">
            <img class="h-12" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            <div class="flex gap-8">
                <a wire:navigate href="{{ route('home_new') }}" class="{{ Route::is('home_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Home</a>
                <a wire:navigate href="{{ route('courses_new') }}" class="{{ Route::is('courses_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Courses</a>
                <a wire:navigate href="{{ route('about_new') }}" class="{{ Route::is('about_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">About</a>
                <a wire:navigate href="{{ route('contact_new') }}" class="{{ Route::is('contact_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Contact</a>
            </div>
        </div>
        <!-- Centered navigation links -->

        <!-- Right section: Login -->
        <a wire:navigate href="{{ route('login') }}" class="hover:font-medium hover:text-gray-100">Login</a>
    </div>
</div>
