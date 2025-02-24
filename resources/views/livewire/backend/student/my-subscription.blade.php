<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Subscription;
use App\Models\Pricing;
use App\Models\User;
use Carbon\Carbon;

new
#[Layout('components.layouts.app-backend')] 
#[Title('Campaigns USA - My Subscription')] 
class extends Component {

    public $subscription;
    public $free_subscription;
    public $monthly_subscription;
    public $yearly_subscription;
    public $input_subscription;
    public $summary_date_start;
    public $summary_date_end;
    public $summary_subscription;
    public $summary_price;
    public $user_subscription;

    public function mount()
    {
        $this->subscription = Subscription::all();
        $pricing = Pricing::first();

        $this->free_subscription = $pricing->freeSubscription();
        $this->monthly_subscription = $pricing->monthlySubscription();
        $this->yearly_subscription = $pricing->yearlySubscription();

        
        if(!auth()->user()->isSubscribed()){
            $this->input_subscription = $this->free_subscription->id;
            $this->summary_date_start = "Free";
            $this->summary_date_end = "Free";
            $this->summary_subscription = "Free";
            $this->summary_price = "Free";
            $this->user_subscription = collect([
                'starts_at' => 'free',
                'expires_at' => 'free'
            ]);
        } else{
            $user_subscription = auth()->user()->latestSubscription()->first();
            $this->user_subscription = $user_subscription;
            $this->input_subscription = $user_subscription->pricing_id;
            $this->summary_date_start = Carbon::now()->addMonth();
            $this->summary_date_end = Carbon::now()->addYear();
            $this->summary_subscription = $user_subscription->plan_name;
            $this->summary_price = $user_subscription->pricing->cost;
        }
    }

    public function updatedInputSubscription($value)
    {
        $this->computeDates();
    }

    private function computeDates()
    {
        // Ensure it's a Carbon instance
        $this->summary_date_start = Carbon::now();

        if ($this->input_subscription == $this->monthly_subscription->id) {
            $this->summary_date_end = Carbon::now()->addMonth();
            $this->summary_subscription = "Monthly";
            $this->summary_price = $this->monthly_subscription->cost;
        } elseif ($this->input_subscription == $this->yearly_subscription->id) {
            $this->summary_date_end = Carbon::now()->addYear();
            $this->summary_subscription = "Yearly";
            $this->summary_price = $this->yearly_subscription->cost;
        } else {
            $this->summary_date_start = 'Free';
            $this->summary_date_end = 'Free';
            $this->summary_subscription = "Free";
            $this->summary_price = "Free";
        }
    }

    public function subscribeUser(){
        Subscription::create([
            'user_id' => auth()->user()->id,
            'pricing_id' => $this->input_subscription,
            'plan_name' => $this->summary_subscription,
            'cost' => $this->summary_price,
            'starts_at' => $this->summary_date_start,
            'expires_at' => $this->summary_date_end,
        ]);
    }
}; ?>

<div>
    <div class="px-10 pb-10 max-w-8xl">
        <div class="grid gap-10 {{ $input_subscription == $free_subscription->id ? '' : 'xl:grid-cols-3' }}">
            <div class="xl:col-span-2">
                <div class="flex flex-wrap gap-8">
                    <div class="flex items-center gap-4 px-10 py-5 bg-white border rounded-xl">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full shadow-sm bg-slate-800 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-600">Current Plan</p>
                            <p class="font-bold text-sky-600">{{ $user_subscription->plan_name }} Subscription</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 px-10 py-5 bg-white border rounded-xl">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full shadow-sm bg-slate-800 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-100 size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-600">Start Date: {{ $user_subscription['starts_at'] == 'free' ? 'Free' : \Carbon\Carbon::parse($user_subscription->starts_at)->format('F j, Y') }}</p>
                            <p class="text-sm font-semibold text-gray-600">End Date: {{ $user_subscription['expires_at'] == 'free' ? 'Free' : \Carbon\Carbon::parse($user_subscription->expires_at)->format('F j, Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-4 mt-8 sm:grid-cols-2 md:grid-cols-3">
                    <label for="free-subscription" class="bg-white shadow-sm rounded-xl select-none {{ $input_subscription == $free_subscription->id ? 'border border-sky-600' : '' }}">
                        <div class="flex items-center gap-4 p-5 border-b">
                            <input wire:model.number.change="input_subscription" value="{{ $free_subscription->id }}" type="radio" id="free-subscription">
                            <label for="free-subscription" class="font-bold text-gray-800">Free</label>
                        </div>
                        <div class="p-5">
                            <p class="text-2xl font-semibold text-gray-800">${{ (int) $free_subscription->cost }}</p>
                            <p class="mt-1 text-gray-500">No cost, limited access</p>
                        </div>
                    </label>
                    <label for="monthly-subscription" class="bg-white shadow-sm rounded-xl select-none {{ $input_subscription == $monthly_subscription->id ? 'border border-sky-600' : '' }}">
                        <div class="flex items-center gap-4 p-5 border-b">
                            <input wire:model.number.change="input_subscription" value="{{ $monthly_subscription->id }}" type="radio" id="monthly-subscription">
                            <label for="monthly-subscription" class="font-bold text-gray-800">Monthly</label>
                        </div>
                        <div class="p-5">
                            <p class="text-2xl font-semibold text-gray-800">${{ (int) $monthly_subscription->cost }}</p>
                            <p class="mt-1 text-gray-500">Billed Monthly</p>
                        </div>
                    </label>
                    <label for="yearly-subscription" class="bg-white shadow-sm rounded-xl select-none {{ $input_subscription == $yearly_subscription->id ? 'border border-sky-600' : '' }}">
                        <div class="flex items-center gap-4 p-5 border-b">
                            <input wire:model.number.change="input_subscription" value="{{ $yearly_subscription->id }}" type="radio" id="yearly-subscription">
                            <label for="yearly-subscription" class="font-bold text-gray-800">Yearly</label>
                        </div>
                        <div class="p-5">
                            <p class="text-2xl font-semibold text-gray-800">${{ (int) $yearly_subscription->cost }}</p>
                            <p class="mt-1 text-gray-500">Billed Yearly</p>
                        </div>
                    </label>
                </div>

                {{-- Pricing Description --}}
                <div class="mt-8 space-y-4" wire:key="subscription-overview">
                    <p class="text-xl font-bold text-gray-800">Overview</p>
                    @if($input_subscription == $free_subscription->id)
                        <p class="text-gray-500">{{ $free_subscription->description }}</p>
                        <div>
                            <div class="mt-8">
                                <p class="text-xl font-bold text-gray-800">Features</p>
                                <div class="mt-4 space-y-1">
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
                            </div>
                        </div>
                        @elseif($input_subscription == $monthly_subscription->id)
                            <div>
                                <p class="text-gray-500">{{ $monthly_subscription->description }}</p>
                                <div>
                                    <div class="mt-8">
                                        <p class="text-xl font-bold text-gray-800">Features</p>
                                        <div class="p-5 mt-4 space-y-1 bg-white border shadow-sm rounded-xl">
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
                                    </div>
                                </div>                        
                            </div>
                        @elseif($input_subscription == $yearly_subscription->id)
                            <p class="text-gray-500">{{ $yearly_subscription->description }}</p>
                            <div>
                                <div class="mt-8">
                                    <p class="text-xl font-bold text-gray-800">Features</p>
                                    <div class="p-5 mt-4 space-y-1 bg-white border shadow-sm rounded-xl">
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
                                </div>
                            </div>   
                    @endif
                </div>
            </div>
            @if($input_subscription != $free_subscription->id)
                <div class="">
                    <div class="bg-white shadow rounded-xl">
                        <div class="px-10 py-5 border-b">
                            <p class="text-xl font-bold text-gray-800">Summary</p>
                        </div>
                        <div class="px-10 py-5 space-y-1 border-b">
                            <div class="flex justify-between gap-2 text-sm">
                                <p class="text-gray-500">Date Start: </p>
                                <span class="text-gray-800">
                                    {{ $summary_date_start ? \Carbon\Carbon::parse($summary_date_start)->format('F j, Y') : 'Free' }}
                                </span>
                            </div>
                            <div class="flex justify-between gap-2 text-sm">
                                <p class="text-gray-500">Date End: </p>
                                <span class="text-gray-800">
                                    {{ $summary_date_end ? \Carbon\Carbon::parse($summary_date_end)->format('F j, Y') : 'Free' }}
                                </span>
                            </div>
                            <div class="flex justify-between gap-2 text-sm">
                                <p class="text-gray-500">Subscription: </p>
                                <span class="font-bold text-gray-800">{{ $summary_subscription }}</span>
                            </div>
                        </div>
                        <div class="px-10 py-5">
                            <div class="flex justify-between gap-2 text-xl">
                                <p class="text-gray-800">Total: </p>
                                <span class="font-bold text-sky-800">${{ $summary_price }}</span>
                            </div>
                        </div>
                        <div class="px-10 py-5">
                            <button wire:click="subscribeUser" type="button" :disabled="$input_subscription == $free_subscription->id" class="w-full px-6 py-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                Start Subscription
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>