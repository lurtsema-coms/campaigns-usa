<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="bg-slate-900 rounded-lg text-white p-5 sm:p-10">
    <div class="flex flex-col-reverse gap-3 sm:items-center sm:flex-row">
        <div class="flex sm:block cursor-pointer gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 sm:size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block size-7 sm:size-10 sm:hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <div class="flex-1">
            <div class="flex justify-between sm:gap-2 sm:px-5">
                <div class="flex flex-col gap-3">
                    <div class="text-lg font-bold sm:text-xl">
                        Title
                    </div>
                    <div class="flex flex-wrap gap-2 items-stretch md:flex-nowrap">
                        <div class="md:border-r pr-5">
                            <p class="text-slate-400">Episode</p>
                            <p>01</p>
                        </div>
                        <div class="md:border-r pr-5">
                            <p class="text-slate-400">Run Time</p>
                            <p>52s</p>
                        </div>
                        <div class="md:border-r pr-5">
                            <p class="text-slate-400">Published</p>
                            <p>March 18, 2024</p>
                        </div>
                        <div>
                            <p class="text-sky-700">Topic</p>
                            <p>Hello World</p>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
        <div class="hidden cursor-pointer sm:block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 sm:size-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
    </div>
</div>
