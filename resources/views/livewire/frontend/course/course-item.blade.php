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

<div>
    <div class="p-5 m-auto my-12 dark:border rounded-xl dark:bg-white max-w-7xl">
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
                <span class="text-sky-600">Share</span>
                <button class="flex items-center gap-2 px-4 py-2 text-sm text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    Enroll Now
                </button>
            </div>
         
        </div>

       <div class="flex flex-col gap-8 mt-8 lg:flex-row">
            <div class="w-full lg:max-w-4xl">
                <div class="w-full border h-96 rounded-xl">
                </div>
                <div class="flex flex-wrap gap-4 my-4">
                    <button class="px-4 py-2 bg-slate-100 text-slate-600 rounded-xl">
                        Overview
                    </button>
                    <button class="px-4 py-2 text-gray-400 rounded-xl hover:text-gray-500">
                        Author
                    </button>
                    <button class="px-4 py-2 text-gray-400 rounded-xl hover:text-gray-500">
                        FAQ
                    </button>
                    <button class="px-4 py-2 text-gray-400 rounded-xl hover:text-gray-500">
                        Announcements
                    </button>
                    <button class="px-4 py-2 text-gray-400 rounded-xl hover:text-gray-500">
                        Reviews
                    </button>
                </div>
                <div class="w-full h-auto p-6 space-y-4 border rounded-md">
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