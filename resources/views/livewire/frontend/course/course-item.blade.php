<?php

use App\Traits\CartActions;
use App\Models\User;
use App\Models\Courses;
use Livewire\Attributes\Layout;
use Illuminate\View\View;
use Livewire\Volt\Component;


new #[Layout('layouts.frontend')] 
class extends Component {

    use CartActions;

    public $course;
    public $title;
    public $cart_items;
    
    public function mount(Courses $course, $id)
    {
   
    }

    public function item($item_id)
    {
        if (Auth::check()) {            
            $this->cart_items = $this->toggleToCart($item_id);
            $this->dispatch('cart-updated');
        } else {
            return redirect()->guest('login')->with('message', 'Please login to add items to your cart');
        }
    }
}; ?>

<div class="px-5 my-12">
    <div class="p-5 mx-auto bg-white sm:p-10 rounded-xl max-w-7xl ">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-col gap-4 lg:flex-row">
                <a href="{{ route('courses') }}" wire:navigate>
                    <div class="flex items-center justify-center w-10 bg-white border rounded-md h-9 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                          </svg>
                    </div>
                </a>
                <div class="">
                    <div class="flex flex-col gap-2">
                        <p class="max-w-lg text-lg font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, delectus!</p>
                        <div class="flex gap-4">
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    38 lessons
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    4h 30min
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    4.5 (126 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div 
                    x-data="{
                        copyNotification: false,
                        copyToClipboard() {
                            this.copyNotification = true;
                            setTimeout(() => this.copyNotification = false, 3000);
                        }
                    }" 
                    class="relative z-0 flex items-center"
                >
                    <button x-clipboard="{{ Request::url() }}" @click="copyToClipboard();" class="flex items-center gap-2 px-3 py-2 border rounded-md border-neutral-200 text-dark hover:bg-neutral-100 group">
                        <svg x-show="!copyNotification" class="stroke-current size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>                  
                        <svg x-show="copyNotification" class="text-green-500 stroke-current size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" /></svg>
                    </button>
                </div>
            
                <button class="flex items-center gap-2 px-3 py-2 text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    Enroll Now
                </button>
            </div>
        </div>

       <div class="flex flex-col gap-8 mt-8 lg:flex-row">
            <div 
                x-data="{activeSection: 'overview'}"
                class="w-full lg:max-w-4xl"
            >
                <div class="w-full border h-96 rounded-xl">
                </div>
                <div class="flex flex-wrap gap-4 my-4">
                    <button :class="`${activeSection == 'overview' ? 'bg-slate-100 text-slate-800 rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'overview'">
                        Overview
                    </button>
                    <button :class="`${activeSection == 'author' ? 'bg-slate-100 text-slate-800 rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'author'">
                        Author
                    </button>
                    <button :class="`${activeSection == 'faq' ? 'bg-slate-100 text-slate-800 rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'faq'">
                        FAQ
                    </button>
                    <button :class="`${activeSection == 'announcements' ? 'bg-slate-100 text-slate-800 rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'announcements'">
                        Announcements
                    </button>
                    <button :class="`${activeSection == 'reviews' ? 'bg-slate-100 text-slate-800 rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'reviews'">
                        Reviews
                    </button>
                </div>

                <div>
                    <div 
                        x-show="activeSection == 'overview'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">About Course</p>
                        <div class="space-y-2">
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur dolor et recusandae unde vitae at debitis eveniet repellendus nihil?</p>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur dolor et recusandae unde vitae at debitis eveniet repellendus nihil?</p>
                        </div>
                        <p class="font-medium text-dark">What You'll learn</p>
                        <div class="space-y-2">
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur dolor et recusandae unde vitae at debitis eveniet repellendus nihil?</p>
                        </div>
                    </div>
                    <div 
                        x-show="activeSection == 'author'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">About Author</p>
                    </div>
                    <div 
                        x-show="activeSection == 'faq'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">About FAQ</p>
                    </div>
                    <div 
                        x-show="activeSection == 'announcements'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">Announcements</p>
                    </div>
                    <div 
                        x-show="activeSection == 'reviews'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">Reviews</p>
                    </div>
                </div>
            </div>
            <div class="w-full border lg:max-w-sm shrink-0 h-96 rounded-xl">
                <div class="px-6 py-4">
                    <p class="font-medium text-dark">Course Content</p>
                </div>
                <div class="px-6 py-4 border-t border-b">
                    <p class=" text-dark">01: Intro</p>
                </div>
            </div>

       </div>
    </div>
</div>