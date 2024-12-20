<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="sticky top-0 z-10 shadow-sm bg-slate-800">
    <div class="relative flex items-center justify-between w-full h-20 px-5 mx-auto text-gray-300 max-w-8xl">
        <!-- Left section: CAMPAIGNS USA -->
        <div class="flex items-center gap-32">
            <a wire:navigate href="{{ route('home_new') }}">
                <img class="h-12" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </a>
            <div class="flex gap-8">
                <a wire:navigate href="{{ route('home_new') }}" class="{{ Route::is('home_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Home</a>
                <a wire:navigate href="{{ route('courses_new') }}" class="{{ Route::is('courses_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Courses</a>
                <a wire:navigate href="{{ route('about_new') }}" class="{{ Route::is('about_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">About</a>
                <a wire:navigate href="{{ route('contact_new') }}" class="{{ Route::is('contact_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Contact</a>
            </div>
        </div>
        <!-- Centered navigation links -->

        <!-- Right section: Login -->
        <div class="flex items-center gap-8">


            @auth
                @role('student')
                    <a wire:navigate href="{{ route('student-dashboard') }}" class="hover:font-medium hover:text-gray-100">Dashboard</a>
                    @else
                    <a wire:navigate href="{{ route('dashboard') }}" class="hover:font-medium hover:text-gray-100">Dashboard</a>
                @endrole
                @else
                <a wire:navigate href="{{ route('login') }}" class="hover:font-medium hover:text-gray-100">Login</a>
            @endauth

            <a wire:navigate href="{{ route('cart') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 size-5 hover:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </a>
        </div>
    </div>
</div>
