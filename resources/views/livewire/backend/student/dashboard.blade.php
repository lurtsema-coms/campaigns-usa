<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.app-backend')] 
#[Title('Campaigns USA - Dashboard')] 
class extends Component {
    //
}; ?>

<div>
    <div class="grid grid-cols-1 gap-8 px-10 pb-10 xl:grid-cols-3">
        <div class="space-y-8 xl:col-start-1 xl:col-end-3">
            <div class="space-y-4">
                <p class="text-xl">Your progress</p>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="p-5 space-y-4 shadow-sm bg-slate-200 rounded-3xl">
                        <div class="w-16 h-16 bg-white rounded-full"></div>
                        <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</p>
                        <div class="flex w-full h-4 overflow-hidden bg-white rounded-full" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-gray-500 rounded-full whitespace-nowrap " style="width: 75%">75%</div>
                        </div>
                    </div>
                    <div class="p-5 space-y-4 shadow-sm bg-neutral-200 rounded-3xl">
                        <div class="w-16 h-16 bg-white rounded-full"></div>
                        <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</p>
                        <div class="flex w-full h-4 overflow-hidden bg-white rounded-full" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-gray-500 rounded-full whitespace-nowrap " style="width: 75%">75%</div>
                        </div>
                    </div>
                    <div class="p-5 space-y-4 bg-orange-200 shadow-sm rounded-3xl">
                        <div class="w-16 h-16 bg-white rounded-full"></div>
                        <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</p>
                        <div class="flex w-full h-4 overflow-hidden bg-white rounded-full" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-gray-500 rounded-full whitespace-nowrap " style="width: 75%">75%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-4">
                <p class="text-xl">Top articles for you</p>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="pb-5 space-y-4 bg-white shadow-sm rounded-3xl">
                        <div class="w-auto h-32 m-1 bg-white border rounded-t-3xl">

                        </div>
                        <div class="px-5 space-y-2">
                            <p class="text-sm text-gray-700">lorem50</p>
                            <div class="flex gap-2">
                                <div class="flex items-center gap-1 text-xs text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-sky-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                    <span class="mt-[1.5px] font-medium text-gray-800">Technique</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 space-y-4 bg-white shadow-sm rounded-3xl">
                        <div class="w-auto h-32 m-1 bg-white border rounded-t-3xl">

                        </div>
                        <div class="px-5 space-y-2">
                            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</p>
                            <div class="flex gap-2">
                                <div class="flex items-center gap-1 text-xs text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-sky-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                    <span class="mt-[1.5px] font-medium text-gray-800">Technique</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-4">
            <p class="text-xl">Upcoming Courses</p>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-1">
                <div class="p-5 space-y-3 bg-white shadow-sm rounded-3xl">
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-md bg-slate-100">Events</span>
                        <span class="px-2 py-1 bg-yellow-100 rounded-md">Campaign</span>
                    </div>
                    <div class="flex justify-between gap-4 text-sm font-medium text-dark">
                        <span class="line-clamp-2">Lorem ipsum dolor sit amet.</span>
                        <span>$10</span>
                    </div>
                    <div class="text-sm font-light text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi tenetur porro maxime illum consequatur consequuntur?
                    </div>
                    <div class="flex gap-2">
                        <div class="flex items-center gap-1 text-xs text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-sky-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span class="mt-[1.5px] font-medium text-gray-800">4 Hours</span>
                        </div>
                        <div class="flex items-center gap-1 text-xs text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-sky-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span class="mt-[1.5px] font-medium text-gray-800">38 lessons</span>
                        </div>
                    </div>
                    <div class="flex justify-end pt-4 border-t">
                        <a href="">
                            <button class="px-4 py-2 text-sm text-white rounded-3xl bg-zinc-800 hover:bg-zinc-900">Buy Course</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
