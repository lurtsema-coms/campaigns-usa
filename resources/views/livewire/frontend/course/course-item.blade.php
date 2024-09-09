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
        $this->course = $course::with('createdBy')->find($id);
        $this->title = $this->course->title;
        $this->cart_items = $this->cartItems();
        
        if (!$this->course) {
            abort(404, 'Course not found.');
        }
    }

    public function rendering(View $view): void
    {
        $view->title("Campaigns USA | $this->title");
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
    <div class="container py-16 mx-auto">
        <div class="flex sm:px-5">
            <div class="flex flex-col w-3/5 space-y-4 trix">
                <div class="max-w-2xl">
                    <x-text-back-link href="{{ route('courses') }}">
                        Back to Courses
                    </x-text-back-link>
                    <p class="mt-4 font-sans text-4xl font-semibold">{{ $course->title }}</p>
                    <p class="mt-4">stars</p>
                    <p class="mb-12">Created by: {{ $course->createdBy->first_name." ".$course->createdBy->last_name }}</p>
                    <div class="dark:text-gray-200">
                        <p class="max-w-2xl text-xl">{!! $course->description !!}</p>

                    </div>
                </div>
            </div>
            <div class="w-2/5 px-10">
                <div class="sticky top-28 ">
                    <div class="w-full max-w-lg p-6 mx-auto bg-white border shadow-lg rounded-2xl text-slate-800">
                        <div class="relative mb-6">
                            <img class="object-cover w-full h-60 rounded-t-2xl" id="course-img" src="{{ asset($course->thumbnail_url) }}" alt="{{ $course->title }}">   
                        </div>
                        <div class="flex flex-col space-y-6">
                            <div class="text-xl font-semibold text-slate-900">
                                Subscribe to <span class="text-sky-700">"{{ $course->title }}"</span>
                            </div>
                            <div class="text-xl text-slate-900">
                                ${{ $course->price % 1 == 0 ? number_format($course->price, 0) : number_format($course->price, 2) }}
                            </div>
                            <div class="flex flex-col space-y-3">
                                <button 
                                    class="w-full px-4 py-2 text-lg font-semibold text-white border cursor-pointer rounded-xl hover:opacity-70 {{ in_array($course->id, $cart_items) ? "bg-red-600" : "bg-slate-600" }}"
                                    wire:click="item({{ $course->id }})"
                                >
                                    <div wire:loading.remove>
                                        @auth
                                            {{ in_array($course->id, $cart_items) ? "Remove to cart" : "Add to cart" }}
                                            @else
                                            Add to cart
                                        @endauth
                                    </div>

                                    <div class="relative top-1" wire:loading wire:target="item({{ $course->id }})">
                                        <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 2.042.777 3.908 2.05 5.334l1.95-2.043z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <a class="cursor-pointer" href="{{ route('cart-section') }}" wire:navigate>
                                    <button class="w-full px-4 py-2 text-lg font-semibold text-white bg-green-500 border rounded-xl hover:bg-green-600">
                                        Subscribe to course
                                    </button>
                                </a>
                            </div>
                            <div class="space-y-1 text-center text-slate-600">
                                <p class="text-sm">15-Day Money-Back Guarantee</p>
                                <p class="text-sm">Full Lifetime Access</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>