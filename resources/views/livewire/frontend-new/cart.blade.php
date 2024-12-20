<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Mail;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA - Cart')] 
class extends Component {
    //
}; ?>

<div>
    <div class="px-5 py-16 mx-auto max-w-8xl">
        <p class="text-2xl font-medium text-gray-800 sm:text-4xl" data-aos="flip-right">Cart Information</p>
        <div class="grid grid-cols-3 gap-10 py-10">
            <div class="col-span-2 p-10 shadow rounded-xl"></div>
            <div class="p-10 shadow rounded-xl"></div>
        </div>
    </div>
</div>
