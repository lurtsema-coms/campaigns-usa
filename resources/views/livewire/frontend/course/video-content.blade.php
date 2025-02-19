<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="flex mt-2">
        <div class="w-full h-full overflow-hidden border rounded-lg border-slate-600">
            <video class="w-full m-auto max-w-8xl" controls>
                <!-- Replace the URL below with the link to your video file -->
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                <!-- Provide alternative text for browsers that do not support the video tag -->
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
