<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.frontend')] 
#[Title('Courses')]
class extends Component {
    
}; ?>

<div>
    <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center w-full space-y-8">
            <p class="font-sans text-4xl font-bold text-center ">EXPLORE BY TOPIC</p>
            <p class="max-w-2xl font-sans text-xl text-center dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
        </div>
        <livewire:frontend.course.index-courses-section />
    </div>
</div>
