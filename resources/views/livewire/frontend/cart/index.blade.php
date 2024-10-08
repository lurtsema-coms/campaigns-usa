<?php

use App\Traits\CartActions;
use App\Models\Courses;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.frontend')] 
#[Title('Courses')]
class extends Component {
    
    use CartActions;
    public $cart_items;
    
    public function mount()
    {
        $cart_items = $this->cartItems();
        $this->cart_items = Courses::with('createdBy')->whereIn('id', $cart_items)->get();
    }

    public function removeItem($item_id)
    {
        $new_cart_items = $this->toggleToCart($item_id);
        $this->cart_items = Courses::with('createdBy')->whereIn('id', $new_cart_items)->get();
        $this->dispatch('cart-updated');
    }
}; ?>

<div>
    <div class="px-5 py-16 sm:container sm:mx-auto sm:px-0 lg:px-5">
        <div class="flex flex-col items-center gap-5 lg:items-start lg:flex-row">
            <div class="flex justify-center w-6/12 lg:justify-normal sm:w-4/12">
                <img class="w-64" src="{{ asset('frontend/select-cart.svg') }}" alt="">
            </div>
            <div class="w-full lg:w-8/12">
                <div class="p-5 bg-transparent border shadow-md border-dark/20 rounded-2xl dark:border-gray-700 min-h-64">
                    <p class="pb-2 mb-5 text-2xl border-b">Cart</p>
                    @if (count($cart_items) !== 0)
                        <x-button-link href="{{ route('courses') }}">
                            Add more
                        </x-button-link>
                        @else
                        <div class="flex">
                            <div class="m-auto">
                                <p class="dark:text-gray-300">Your cart is currently empty. Start adding items now!</p>
                                <div class="flex justify-center mt-5">                                    
                                    <x-button-link href="{{ route('courses') }}">
                                        Browse here
                                    </x-button-link>
                                </div>
                            </div>
                        </div>
                    @endif
                    @foreach ($cart_items as $course)                        
                        <div class="mt-5 space-y-4">
                            <a href="{{ route('course-item', $course->id) }}" wire:navigate>
                                <div class="flex flex-col gap-5 p-5 overflow-hidden transition-all border rounded-lg shadow-md cursor-pointer hover:border-gray-400 hover:shadow-lg dark:border-gray-700 400px:flex-row">
                                    <div class="shrink-0">
                                        <img class="object-cover w-24" src="https://via.placeholder.com/64" alt="Sample Image">
                                    </div>
                                    <div class="flex-1 space-y-1">
                                        <p class="font-semibold">{{ $course->title }}</p>
                                        <p class="text-xs">by {{ $course->createdBy->first_name." ".$course->createdBy->last_name }}</p>
                                        <div class="flex flex-wrap gap-2">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="text-xs">4.6 Ratings</span>
                                                <span class="text-xs">(12000)</span>
                                            </div>
                                        </div>                                
                                        <p class="text-xs">9 Hours</p>
                                    </div>
                                    <button 
                                        class="flex"
                                        wire:click="removeItem({{ $course->id }})"
                                    >                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 cursor-pointer size-6 hover:opacity-70">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-8/12 md:w-6/12 lg:w-5/12">
                <div class="p-5 space-y-3 bg-transparent border rounded-lg shadow-md border-dark/20 dark:border-gray-700 min-h-32">
                    <p class="pb-2 text-2xl border-b">Total</p>
                    <p class="text-xl">$30</p>
                    <p class="text-sm dark:text-gray-300">80% off</p>
                    <p class="dark:text-gray-100">Lorem ipsum dolor sit amet.</p>
                    <button class="w-full py-2 text-white rounded-lg bg-sky-700 hover:bg-sky-800">Checkout</button>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <p>You might also like</p>
            <p class="mt-10">......</p>
        </div>
    </div>
</div>
