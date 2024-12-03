<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {

    public $user;
    public $first_name;
    public $last_name;
    public $contact_number;

    public function mount(User $user)
    {
        $this->user = $user->find(auth()->user()->id);
        $this->first_name = $this->user->first_name;
        $this->last_name = $this->user->last_name;
        $this->contact_number = $this->user->contact_number;
    }
}; ?>

<div>
    <div 
        x-data="{profileBar: false}"
        x-init="
        // Watch for changes in profileBar and set body overflow accordingly
        $watch('profileBar', value => {
            document.body.style.overflow = value ? 'hidden' : 'auto';
        });
    "
    >
        <div 
            class="fixed inset-0 z-20 bg-gray-600 bg-opacity-75" aria-hidden="true"
            x-show="profileBar"
            x-cloak
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
        </div>
        <div 
            class="fixed right-0 z-20 flex flex-col h-screen overflow-auto bg-slate-800/90 w-80"
            x-show="profileBar"
            @click.outside="profileBar = false"
            x-cloak
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
        >
            <div class="absolute top-0 left-0 pt-2 -mr-12">
                <button 
                    class="relative flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    type="button" 
                    @click="profileBar = false"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="">
                <div class="px-4 pt-16 space-y-4 text-white">
                    <div class="space-y-2">
                        <p>Update Profile</p>
                        <span class="text-xs">Make changes to your personal details</span>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm">First Name</label>
                        <input class="w-full px-4 text-sm border border-transparent rounded-lg h-9 focus:outline-none focus:border-none focus:ring-2 text-dark focus:ring-slate-500 focus:shadow-lg" 
                            type="text"
                            wire:model="first_name"
                        >
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm">Last Name</label>
                        <input class="w-full px-4 text-sm border border-transparent rounded-lg h-9 focus:outline-none focus:border-none focus:ring-2 text-dark focus:ring-slate-500 focus:shadow-lg" 
                            type="text"
                            wire:model="last_name"
                        >
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm">Contact #</label>
                        <input class="w-full px-4 text-sm border border-transparent rounded-lg h-9 focus:outline-none focus:border-none focus:ring-2 text-dark focus:ring-slate-500 focus:shadow-lg" 
                            type="text"
                            wire:model="contact_number"
                        >
                    </div>
                    <div class="flex justify-end">
                        <button class="px-4 py-2 text-sm text-white rounded-2xl bg-slate-800/90 hover:bg-slate-700/90">
                            Save Changes
                        </button>
                    </div>
                </div>
            </form>
            <form action="">
                <div class="px-4 py-4 space-y-4 text-white">
                    <div class="space-y-2">
                        <label class="text-sm">Password</label>
                        <input class="w-full px-4 text-sm border border-transparent rounded-lg h-9 focus:outline-none focus:border-none focus:ring-2 text-dark focus:ring-slate-500 focus:shadow-lg" type="text">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm">Confirm Password</label>
                        <input class="w-full px-4 text-sm border border-transparent rounded-lg h-9 focus:outline-none focus:border-none focus:ring-2 text-dark focus:ring-slate-500 focus:shadow-lg" type="text">
                    </div>
                    <div class="flex justify-end">
                        <button class="px-4 py-2 text-sm text-white rounded-2xl bg-slate-800/90 hover:bg-slate-700/90">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    
        <div 
            x-data="{ scrolled: false }" 
            x-init="
                scrolled = window.scrollY > 0;
                
                window.addEventListener('scroll', () => {
                    scrolled = window.scrollY > 0;
                });
            "
            :class="`${scrolled ? 'shadow-sm bg-white' : ''} flex items-center justify-between h-16 px-10 lg:justify-end`"
        >
            <button 
                class="text-gray-400 lg:hidden"
                type="button" 
                @click="$dispatch('open-sidebar');"
            >
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>
            </button>
        
            <img 
                class="w-10 rounded-full hover:cursor-pointer hover:opacity-70" 
                src="{{ asset('avatars/SVG/1.svg') }}" alt=""
                @click="profileBar = !profileBar"
            >
        </div>
    </div>
</div>
