<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    
    public function logout(Logout $logout): void
    {
        $logout();

        session()->flash('success', 'You have been logged out.'); 
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
        class="fixed z-20 flex-col h-screen px-5 overflow-auto w-72 bg-slate-800"
    >
        <div class="flex flex-col h-full gap-28">
            <div class="flex-1 space-y-8">
                <div class="sticky top-0 flex items-center w-full h-16 pt-5">
                    <a href="{{ route('courses_new') }}" wire:navigate>
                        <img class="h-auto px-4 py-2 rounded-md shadow-sm w-44 hover:opacity-70" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
                    </a>
                </div>
                
                <div class="flex flex-col space-y-1 text-sm text-neutral-800">
                    <a href="{{ route('student-dashboard') }}" wire:navigate>
                        <div class="flex items-center gap-4 px-5 py-2.5 rounded-md font-bold {{ Route::is('student-dashboard') ? 'shadow bg-gray-200' : 'text-gray-200 hover:bg-gray-200 hover:text-neutral-800' }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                  </svg>
                            </div>
                            <span class="tracking-wide">Dashboard</span>
                        </div>
                    </a>
                    <a href="{{ route('student-my-courses') }}" wire:navigate>
                        <div class="flex items-center gap-4 px-5 py-2.5 rounded-md font-bold {{ Route::is('student-my-courses') ? 'shadow bg-gray-200' : 'text-gray-200 hover:bg-gray-200 hover:text-neutral-800' }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <span class="tracking-wide">Courses</span>
                        </div>
                    </a>
                    <a href="{{ route('student-my-subscription') }}" wire:navigate>
                        <div class="flex items-center gap-4 px-5 py-2.5 rounded-md font-bold {{ Route::is('student-my-subscription') ? 'shadow bg-gray-200' : 'text-gray-200 hover:bg-gray-200 hover:text-neutral-800' }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                </svg>
                            </div>
                            <span class="tracking-wide">My Subscription</span>
                        </div>
                    </a>
                </div>
            </div>

            {{-- <div class="flex flex-col items-center gap-8 pb-8">
                <div class="flex flex-col items-center gap-4 py-5 mx-auto rounded-md max-w-56 bg-slate-800/50">
                    <img class="w-28" src="{{ asset('envato/004-news politics.png') }}" alt="">
                    <span class="px-5 text-sm text-center text-gray-50">100+ Courses Available</span>
                    <a href="{{ route('courses_new') }}" wire:navigate>
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
            </div> --}}
        </div>
    </div>
</div>
