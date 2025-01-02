<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Traits\CartActions;
use App\Models\Courses;
use App\Models\Mail;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Cart')] 
class extends Component {
    
    use CartActions;
    
    public $cart = [];
    
    public function mount()
    {
        $user_cart = explode(',', auth()->user()->cart);
        $this->cart = Courses::whereIn('id', $user_cart)->get();
    }

    public function toggleItem($item_id)
    {
        if (Auth::check()) {
            $this->cart_items = $this->toggleToCart($item_id);
            $this->cart = Courses::whereIn('id', $this->cart_items)->get();
            $this->dispatch('cart-updated');
        } else {
            session()->flash('cart_message', 'Please login to add items to cart');
            $this->redirect('/login', navigate: true);
        }
    }
}; ?>

<div>
    <div class="px-5 py-16 mx-auto max-w-8xl">
        <p class="text-2xl font-medium text-gray-800 sm:text-4xl" data-aos="flip-right" wire:ignore>Your Cart 🛒</p>
        <div class="grid grid-cols-3 gap-10 py-10">
            <div class="col-span-2 p-10 bg-white shadow rounded-xl">
                <div class="grid gap-8">
                    @if ($cart->isEmpty())
                        <div class="p-10 font-medium text-center text-gray-800">
                            Your cart is empty
                        </div>
                        @else
                        @foreach ($cart as $course)
                            <div class="flex gap-8 p-10 border rounded-lg shadow-sm border-slate-200" wire:key="course-{{ $course->id }}">
                                <img src="{{ $course->thumbnail_url }}" class="object-cover w-full min-w-64 max-w-64 h-36" alt="">
                                <div class="flex flex-col gap-2">
                                    <p class="font-medium text-gray-800">{{ $course->title }}</p>
                                    <p class="text-gray-600 line-clamp-3">
                                        {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}
                                    </p>
                                    <div class="">
                                        <div class="flex items-center gap-1 mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-4 relative -top-[1px]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                            </svg>
                                            <span class="text-gray-800">
                                                4.5 <span class="text-gray-600">(126 reviews)</span>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">
                                            Price: <span class="font-medium text-blue-500">${{ $course->price }}</span>
                                        </span>
                                    </div>
                                    <div class="flex gap-4 mt-3">
                                        <button 
                                            class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600"
                                            wire:click="toggleItem({{ $course->id }})"
                                        >
                                            Remove
                                        </button>
                                        <a wire:navigate href="{{ route('course-item', $course->id) }}">
                                            <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                                                View Course
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
            <div class="p-10 shadow rounded-xl">

            </div>
        </div>
    </div>
</div>
