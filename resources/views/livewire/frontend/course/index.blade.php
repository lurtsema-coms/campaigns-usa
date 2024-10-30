<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.frontend')] 
#[Title('Courses')]
class extends Component {
    
}; ?>

<div>
    <div class="relative px-5 py-12 space-y-12">
        <div class="grid w-full grid-cols-3 mx-auto bg-white border shadow-sm max-w-7xl rounded-xl">
            <div class="col-start-1 col-end-3 p-10">
                <span class="text-gray-600">Learning Path / 
                    <span class="px-2 py-1 font-medium bg-gray-100 rounded-2xl">Campaigns</span>
                </span>
                <p class="mt-6 text-3xl text-gray-800">Lorem ipsum dolor sit amet consectetur.</p>
                <p class="max-w-lg mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi veritatis molestiae, ut exercitationem doloribus odit aliquam! Nihil animi, illum quos sed culpa repellendus possimus, maxime ipsa recusandae aperiam sit magnam!</p>
            </div>
            <div class="flex items-center col-start-3">
                <img class="h-auto" src="{{ asset('frontend/online_learning.png') }}" alt="">
            </div>
        </div>
        <div class="mx-auto bg-white border shadow-sm max-w-7xl rounded-xl">
            <div class="flex flex-wrap items-center justify-between px-10 py-3 border-b-2 sm:gap-4">
                <p class="text-lg">Course and Events for Campaigns</p>
                <a href="">
                    <span class="flex items-center gap-2 text-gray-500 group">
                        <span class="group-hover:text-gray-600">Show All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="px-5 py-5">
                <div
                x-data="{ dragging: false }"
                @pointerdown="dragging = true; $el.setPointerCapture($event.pointerId); $el.style.userSelect = 'none'; $el.classList.add('cursor-grab')"
                @pointerup="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-grab')"
                @pointermove="dragging && ($el.scrollLeft -= $event.movementX)"
                @pointerleave="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-grab')"
                class="flex gap-6 p-5 overflow-x-auto overflow-y-hidden cursor-default"
            >
                    <div class="pb-5 overflow-hidden border shadow-sm bg-gray-50 shrink-0 w-72 rounded-xl">
                        <div class="h-40">
                            <img class="object-cover w-full h-full" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <div class="px-5 mt-8 ">
                            <p class="text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quisquam.</p>
                            <p class="mt-3 text-sm text-gray-600 line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates cumque iste ad placeat expedita autem.</p>
                            <div class="mt-3 text-sm text-gray-600">By: 
                                <span class="font-medium text-gray-800">Lorem, ipsum.</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">4 Hours</span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <span class="text-xl line-through">
                                    $1200
                                </span>
                                <span class="text-xl font-medium text-sky-600">
                                    $1499
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-8 text-xs">
                                <span class="px-2 py-1 border border-gray-400">Events</span>
                                <span class="px-2 py-1 border border-gray-400">Campaign</span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 overflow-hidden border shadow-sm bg-gray-50 shrink-0 w-72 rounded-xl">
                        <div class="h-40">
                            <img class="object-cover w-full h-full" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <div class="px-5 mt-8 ">
                            <p class="text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quisquam.</p>
                            <p class="mt-3 text-sm text-gray-600 line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates cumque iste ad placeat expedita autem.</p>
                            <div class="mt-3 text-sm text-gray-600">By: 
                                <span class="font-medium text-gray-800">Lorem, ipsum.</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">4 Hours</span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <span class="text-xl line-through">
                                    $1200
                                </span>
                                <span class="text-xl font-medium text-sky-600">
                                    $1499
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-8 text-xs">
                                <span class="px-2 py-1 border border-gray-400">Events</span>
                                <span class="px-2 py-1 border border-gray-400">Campaign</span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 overflow-hidden border shadow-sm bg-gray-50 shrink-0 w-72 rounded-xl">
                        <div class="h-40">
                            <img class="object-cover w-full h-full" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <div class="px-5 mt-8 ">
                            <p class="text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quisquam.</p>
                            <p class="mt-3 text-sm text-gray-600 line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates cumque iste ad placeat expedita autem.</p>
                            <div class="mt-3 text-sm text-gray-600">By: 
                                <span class="font-medium text-gray-800">Lorem, ipsum.</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">4 Hours</span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <span class="text-xl line-through">
                                    $1200
                                </span>
                                <span class="text-xl font-medium text-sky-600">
                                    $1499
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-8 text-xs">
                                <span class="px-2 py-1 border border-gray-400">Events</span>
                                <span class="px-2 py-1 border border-gray-400">Campaign</span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 overflow-hidden border shadow-sm bg-gray-50 shrink-0 w-72 rounded-xl">
                        <div class="h-40">
                            <img class="object-cover w-full h-full" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <div class="px-5 mt-8 ">
                            <p class="text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quisquam.</p>
                            <p class="mt-3 text-sm text-gray-600 line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates cumque iste ad placeat expedita autem.</p>
                            <div class="mt-3 text-sm text-gray-600">By: 
                                <span class="font-medium text-gray-800">Lorem, ipsum.</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">4 Hours</span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <span class="text-xl line-through">
                                    $1200
                                </span>
                                <span class="text-xl font-medium text-sky-600">
                                    $1499
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-8 text-xs">
                                <span class="px-2 py-1 border border-gray-400">Events</span>
                                <span class="px-2 py-1 border border-gray-400">Campaign</span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 overflow-hidden border shadow-sm bg-gray-50 shrink-0 w-72 rounded-xl">
                        <div class="h-40">
                            <img class="object-cover w-full h-full" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <div class="px-5 mt-8 ">
                            <p class="text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quisquam.</p>
                            <p class="mt-3 text-sm text-gray-600 line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates cumque iste ad placeat expedita autem.</p>
                            <div class="mt-3 text-sm text-gray-600">By: 
                                <span class="font-medium text-gray-800">Lorem, ipsum.</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">4 Hours</span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <span class="text-xl line-through">
                                    $1200
                                </span>
                                <span class="text-xl font-medium text-sky-600">
                                    $1499
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-4 mt-8 text-xs">
                                <span class="px-2 py-1 border border-gray-400">Events</span>
                                <span class="px-2 py-1 border border-gray-400">Campaign</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center w-full space-y-8">
            <p class="font-sans text-4xl font-bold text-center ">EXPLORE BY TOPIC</p>
            <p class="max-w-2xl font-sans text-xl text-center dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
        </div>
        <livewire:frontend.course.index-courses-section />
    </div> --}}
</div>
