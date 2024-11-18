<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
}; ?>

<div 
    x-data="{ sidebar: false, responsive: 0 }" 
    x-init="
        sidebar = window.innerWidth >= 1024;
        responsive = window.innerWidth;
        window.addEventListener('resize', () => {
            sidebar = window.innerWidth >= 1024;
            responsive = window.innerWidth;
        });
    ">
    <div 
        x-show="sidebar"
        x-cloak
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        @open-sidebar.window="sidebar = true"
        @click.outside="if (responsive <= 1024) sidebar = false"
        class="fixed z-20 flex-col h-screen overflow-auto w-80 bg-slate-900"
    >
        <div class="flex flex-col h-full gap-28">
            <div class="flex-1 space-y-8">
                <div class="sticky top-0 flex items-center w-full h-16 px-5 py-10 bg-slate-900 ">
                    <a href="{{ route('courses') }}" wire:navigate>
                        <img class="h-auto w-36 hover:opacity-70" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                    </a>
                </div>
                
                <div class="flex flex-col text-white">
                    <a href="{{ route('student-dashboard') }}" wire:navigate>
                        <div class="flex items-center gap-4 px-5 py-3 border-l-4 bg-neutral-100/5">
                            <div>
                                <img class="w-7 h-7" src="{{ asset('icons/dashboard.png') }}" alt="">
                            </div>
                            <span class="tracking-wide">Dashboard</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex items-center gap-4 px-5 py-3 border-l-4 border-transparent hover:bg-neutral-100/5">
                            <div>
                                <img class="w-7 h-7" src="{{ asset('icons/online-course.png') }}" alt="">
                            </div>
                            <span class="tracking-wide">My Courses</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-center gap-8 pb-8">
                <div class="flex flex-col items-center gap-4 py-5 mx-auto rounded-md max-w-56 bg-slate-800/50">
                    <img class="w-28" src="{{ asset('envato/004-news politics.png') }}" alt="">
                    <span class="px-5 text-sm text-center text-gray-50">100+ Courses Available</span>
                    <a href="{{ route('courses') }}" wire:navigate>
                        <button class="px-4 py-1 text-sm border rounded-md text-slate-200 border-slate-400 hover:bg-slate-800/70">Explore More</button>
                    </a>
                </div>

                <button wire:click="logout">
                    <div class="flex items-center gap-1 text-white hover:opacity-70">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                          </svg>
                        Logout
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
