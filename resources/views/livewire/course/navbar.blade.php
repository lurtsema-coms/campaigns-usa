<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="py-3 flex items-center justify-between">
        <img class="w-36" src="{{ asset('frontend/Logo SVG.png') }}" alt="">
        <div class="flex gap-2 text-white">
            <div class="hidden bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70">
                <div>
                    Login
                </div>
            </div>
            <div class="hidden min-w-fit bg-color-blue py-2 px-4 rounded-lg cursor-pointer transition-all hover:opacity-70">
                <div>
                    Sign Up
                </div>
            </div>
        </div>
    </div>
</div>
