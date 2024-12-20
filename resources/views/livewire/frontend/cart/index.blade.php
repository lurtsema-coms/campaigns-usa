<?php

use App\Traits\CartActions;
use App\Models\Courses;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.frontend')] 
#[Title('Campaigns USA - Cart Section')]
class extends Component {
    
}; ?>

<div>
    <div class="px-5 my-12">
        <div class="p-5 mx-auto bg-white sm:p-10 rounded-xl max-w-7xl ">
          <div class="max-w-2xl pb-4 mx-auto lg:max-w-7xl">
            <h1 class="text-3xl font-bold tracking-tight text-dark sm:text-4xl">Courses Cart</h1>
            <form class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
              <section aria-labelledby="cart-heading" class="lg:col-span-7">
                <h2 id="cart-heading" class="sr-only">Items in your course cart</h2>
        
                <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                  <li class="flex py-6 sm:py-10">
                    <div class="flex-shrink-0">
                      <img src="{{ asset('frontend/campaign1-modal.png') }}" alt="Front of men&#039;s Basic Tee in sienna." class="object-cover object-center w-24 h-24 rounded-md sm:h-48 sm:w-48">
                    </div>
                    <div class="flex flex-col justify-between flex-1 ml-4 sm:ml-6">
                      <div class="relative flex gap-9">
                        <div>
                          <div class="flex justify-between">
                            <h3 class="text-sm">
                              <a href="#" class="font-medium text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eaque rerum quod perferendis quos facere.</a>
                            </h3>
                          </div>
                          <div class="mt-4 text-sm text-gray-600 line-clamp-3">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ipsum excepturi minus eveniet, fuga consectetur, repellendus natus rerum, pariatur reiciendis quas odit quam tempore ipsam quae sed! Asperiores, aliquam consectetur.</p>
                          </div>
                          <p class="mt-4 text-sm font-medium text-sky-600">$32.00</p>
                        </div>
        
                        <div class="mt-4">
                          <div class="absolute top-0 right-0">
                            <button type="button" class="inline-flex p-2 -m-2 text-gray-400 hover:text-gray-500">
                              <span class="sr-only">Remove</span>
                              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
        
                      <div class="flex flex-wrap mt-4 gap-x-4 sm:gap-4">
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
                  </li>
                </ul>
              </section>
        
              <!-- Order summary -->
              <section aria-labelledby="summary-heading" class="px-4 py-6 mt-16 rounded-lg bg-gray-50 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
                <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>
        
                <dl class="mt-6 space-y-4">
                  <div class="flex items-center justify-between">
                    <dt class="text-sm text-gray-600">Lorem ipsum dolor sit amet...</dt>
                    <dd class="text-sm font-medium text-gray-900">$112.32</dd>
                  </div>
        
            
                  <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                    <dt class="text-base font-medium text-gray-900">Order total</dt>
                    <dd class="text-base font-medium text-gray-900">$112.32</dd>
                  </div>
                </dl>
        
                <div class="mt-6">
                  <button type="submit" class="w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-slate-600 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
                </div>
              </section>
            </form>
          </div>
        </div>
    </div>
</div>
