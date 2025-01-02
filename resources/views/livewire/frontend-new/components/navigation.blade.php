<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On; 

new class extends Component {
    
    public $cart_items = 0;

    public function mount()
    {
        $this->updateCartItems();
    }

    #[On('cart-updated')]
    public function updateCartItems()
    {
        $this->cart_items = auth()->check() && auth()->user()->cart
            ? count(explode(',', auth()->user()->cart))
            : 0;
    }
}; ?>

<div class="sticky top-0 z-10 shadow-sm bg-slate-800">
    <div class="relative flex items-center justify-between w-full h-20 px-5 mx-auto text-gray-400 max-w-8xl">
        <!-- Left section: CAMPAIGNS USA -->
        <div class="flex items-center gap-10 md:gap-32">
            <a wire:navigate href="{{ route('home_new') }}" class="shrink-0">
                <img class="h-12" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
            </a>
            <div class="hidden gap-8 sm:flex">
                <a wire:navigate href="{{ route('home_new') }}" class="{{ Route::is('home_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Home</a>
                <a wire:navigate href="{{ route('courses_new') }}" class="{{ Route::is('courses_new') || Route::is('course-item')  ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Courses</a>
                <a wire:navigate href="{{ route('about_new') }}" class="{{ Route::is('about_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">About</a>
                <a wire:navigate href="{{ route('contact_new') }}" class="{{ Route::is('contact_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Contact</a>
            </div>
        </div>
        <!-- Centered navigation links -->

        <!-- Right section: Login -->
        <div class="flex items-center gap-4 lg:gap-8">

            @auth
                @role('student')
                    <a wire:navigate href="{{ route('student-dashboard') }}" class="hidden hover:font-medium hover:text-gray-100 lg:block">Dashboard</a>
                    <a wire:navigate href="{{ route('cart') }}" class="relative">
                        <span class="absolute flex items-center justify-center w-5 h-5 text-sm text-gray-600 bg-white rounded-full -right-4 -top-3">
                            {{ $cart_items }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-300 size-5 hover:text-gray-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </a>
                    @else
                    <a wire:navigate href="{{ route('dashboard') }}" class="hidden hover:font-medium hover:text-gray-100 md:block">Dashboard</a>
                @endrole
                @else
                <a wire:navigate href="{{ route('login') }}" class="hidden text-gray-300 lg:block hover:font-medium hover:text-gray-100">Login</a>
            @endauth

            <div x-data="{ navOpen: false}" class="lg:hidden">
                <button class="relative block">
                    <span 
                        x-show="!navOpen"
                        class="hover:opacity-70"
                        @click="navOpen = true"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </span>
                    <span 
                        x-show="navOpen" 
                        class="relative z-10 hover:opacity-70"
                        @click="navOpen = false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>

                <div x-show="navOpen" class="fixed top-0 right-0 h-full lg:hidden p-7 bg-gray-800/95 w-80"
                    x-transition:enter="transition-transform duration-300 ease-out" 
                    x-transition:enter-start="translate-x-full" 
                    x-transition:enter-end="translate-x-0" 
                    x-transition:leave="transition-transform duration-300 ease-in" 
                    x-transition:leave-start="translate-x-0" 
                    x-transition:leave-end="translate-x-full"
                    @click.away="navOpen = false"
                >
                    <div class="flex flex-col gap-8">
                        @auth
                            @role('student')
                                <a wire:navigate href="{{ route('student-dashboard') }}" class="hover:font-medium hover:text-gray-100">Dashboard</a>
                                @else
                                <a wire:navigate href="{{ route('dashboard') }}" class="hover:font-medium hover:text-gray-100">Dashboard</a>
                            @endrole
                            @else
                            <a wire:navigate href="{{ route('login') }}" class="hover:font-medium hover:text-gray-100">Login</a>
                        @endauth
                        <div class="flex flex-col gap-8 sm:hidden">
                            <a wire:navigate href="{{ route('home_new') }}" class="{{ Route::is('home_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Home</a>
                            <a wire:navigate href="{{ route('courses_new') }}" class="{{ Route::is('courses_new') || Route::is('course-item') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Courses</a>
                            <a wire:navigate href="{{ route('about_new') }}" class="{{ Route::is('about_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">About</a>
                            <a wire:navigate href="{{ route('contact_new') }}" class="{{ Route::is('contact_new') ? 'font-medium text-gray-100' : '' }} hover:font-medium hover:text-gray-100">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
