<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Courses;
use Livewire\Volt\Component;
use App\Models\Pricing;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Pricing')] 
class extends Component {

    public $free_subscription;
    public $monthly_subscription;
    public $yearly_subscription;

    public function mount()
    {
        $pricing = Pricing::first();

        $this->free_subscription = $pricing->freeSubscription();
        $this->monthly_subscription = $pricing->monthlySubscription();
        $this->yearly_subscription = $pricing->yearlySubscription();
    }
    
    public function subscribe()
    {
        if (Auth::check()) {
            return $this->redirect(route('student-my-subscription'), navigate: true);
        } else {
            session()->flash('cart_message', 'Please login to subscribe.'); 
            return $this->redirect(route('login'), navigate: true);
        }
    }

}; ?>

<div class="relative">
    <div class="relative" data-aos="zoom-in-up" wire:ignore>
        <img src="{{ asset('frontend/bg-img.jpg') }}" class="absolute object-cover w-full h-full -z-10" alt="">
        <div class="flex flex-col justify-center px-5 pt-40">
            <p class="text-2xl font-semibold text-center text-gray-800 sm:text-4xl">🚀 Master Politics. Win Elections.</p>
            <p class="max-w-3xl mx-auto mt-4 font-semibold text-center text-gray-600 sm:text-lg">If you're serious about running a successful campaign, we’ve got the roadmap. Join now and take your political strategy to the next level!</p>
        </div>
        <div class="flex flex-col items-center justify-center w-full lg:flex-row pb-28">
            {{-- Free Plan --}}
            <div class="relative w-full max-w-sm mt-8 md:-right-2">
                <div class="p-2 mt-8 bg-gray-100 border rounded-lg">
                    <div class="p-4 bg-white rounded-tl-md rounded-bl-md md:p-8">
                        <div>
                            <p class="font-semibold text-gray-400">Best For</p>
                            <p class="font-semibold text-gray-700">Exploring politics</p>
                        </div>
                        <p class="mt-6 text-3xl font-semibold text-gray-800 md:text-4xl">${{ (int) $free_subscription->cost }}</p>
                        <div class="mt-6 space-y-1">
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Access to Basic Lessons</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/x.png') }}" alt="" class="h-4">
                                <span>Full Course Access</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/x.png') }}" alt="" class="h-4">
                                <span>Exclusive Resources</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/x.png') }}" alt="" class="h-4">
                                <span>Q&A Sessions</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Limited Community Access</span>
                            </div>
                        </div>
                        <div class="flex mt-16">
                            <button
                                wire:click="subscribe"
                                class="w-full px-4 py-3 font-semibold text-center text-gray-800 bg-gray-100 rounded-md hover:bg-gray-200"
                            >
                                Free Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Monthly Plan --}}
            <div class="z-10 w-full max-w-sm p-2 mt-16 bg-gray-100 border-2 rounded-lg border-sky-400">
                <div class="h-full p-4 py-16 bg-white rounded-md md:px-8 ">
                    <div>
                        <p class="font-semibold text-gray-400">Best For</p>
                        <p class="font-semibold text-gray-700">Rising Candidates</p>
                    </div>
                    <p class="mt-6 text-3xl font-semibold text-gray-800 md:text-4xl">${{ (int) $monthly_subscription->cost }}</p>
                    <div class="mt-6 space-y-1">
                        <div class="flex items-center gap-3 font-semibold text-gray-700">
                            <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                            <span>Access to Basic Lessons</span>
                        </div>
                        <div class="flex items-center gap-3 font-semibold text-gray-700">
                            <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                            <span>Full Course Access</span>
                        </div>
                        <div class="flex items-center gap-3 font-semibold text-gray-700">
                            <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                            <span>Exclusive Resources</span>
                        </div>
                        <div class="flex items-center gap-3 font-semibold text-gray-700">
                            <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                            <span>Q&A Sessions</span>
                        </div>
                        <div class="flex items-center gap-3 font-semibold text-gray-700">
                            <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                            <span>Limited Community Access</span>
                        </div>
                    </div>
                    <div class="flex mt-16">
                        <button 
                            wire:click="subscribe"
                            class="w-full px-4 py-3 font-semibold text-center text-white bg-gray-800 rounded-md hover:bg-gray-900"
                        >
                            Monthly Plan
                        </button>
                    </div>
                </div>
            </div>
            {{-- Yearly Plan --}}
            <div class="relative w-full max-w-sm mt-8 md:-left-2">
                <div class="p-2 mt-8 bg-gray-100 border rounded-lg">
                    <div class="p-4 bg-white rounded-tr-md rounded-br-md md:p-8">
                        <div>
                            <p class="font-semibold text-gray-400">Best For</p>
                            <p class="font-semibold text-gray-700">Expert Strategists</p>
                        </div>
                        <p class="mt-6 text-3xl font-semibold text-gray-800 md:text-4xl">${{ (int) $yearly_subscription->cost }}</p>
                        <div class="mt-6 space-y-1">
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Access to Basic Lessons</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Full Course Access</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Exclusive Resources</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Q&A Sessions</span>
                            </div>
                            <div class="flex items-center gap-3 font-semibold text-gray-700">
                                <img src="{{ asset('icons/yes.png') }}" alt="" class="h-4">
                                <span>Limited Community Access</span>
                            </div>
                        </div>
                        <div class="flex mt-16">
                            <button 
                                wire:click="subscribe"
                                class="w-full px-4 py-3 font-semibold text-center text-gray-800 bg-gray-100 rounded-md hover:bg-gray-200"
                            >
                                Yearly Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
