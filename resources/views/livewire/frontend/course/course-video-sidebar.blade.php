<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="fixed h-screen w-80 flex flex-col bg-slate-900 overflow-hidden z-20"
        :class="{ hidden:!sidebarOpen }"
        x-init="
            window.addEventListener('resize', () => {
                sidebarOpen = true;
            });
        ">
        <!-- Header Section -->
        <div class="py-6 px-5 flex justify-between">
            <a href="" class="flex items-center text-white gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span>Back to course</span>
            </a>
            <a href="" class="text-white">Logo</a>
        </div>

        <!-- Title Section -->
        <div class="h-24 bg-[#122138] rounded-lg mx-2 mb-2 shrink-0 flex items-center overflow-hidden">
            <div class="relative h-full flex items-center">
                <div class="absolute -left-14 ml-2 rounded-full border-2 border-red-300 overflow-hidden">
                    <img src="https://via.placeholder.com/64" alt="Sample Image" class="w-28 h-28 object-cover">
                </div>
                <div class="pl-20 pr-2 text-white font-bold text-lg">Title</div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="overflow-y-auto py-5 space-y-5 [&::-webkit-scrollbar]:hidden">
            <div class="space-y-5">
                <div class="flex mx-2 py-3 px-4 bg-[#122138] rounded-lg space-x-4">
                    <div class="text-gray-300 font-medium text-md">l</div>
                    <div class="min-h-full w-[1px] border border-slate-800"></div>
                    <div class="text-white font-medium text-md">
                        Title
                    </div>
                </div>
                <div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-red-500 h-10 w-10 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-md text-white">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm text-white">Episode 1</p>
                                <div class="flex gap-1 items-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-5">
                <div class="flex mx-2 py-3 px-4 bg-[#122138] rounded-lg space-x-4">
                    <div class="text-gray-300 font-medium text-md">ll</div>
                    <div class="min-h-full w-[1px] border border-slate-800"></div>
                    <div class="text-white font-medium text-md">
                        Title
                    </div>
                </div>
                <div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-red-500 h-10 w-10 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-md text-white">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm text-white">Episode 1</p>
                                <div class="flex gap-1 items-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-5">
                <div class="flex mx-2 py-3 px-4 bg-[#122138] rounded-lg space-x-4">
                    <div class="text-gray-300 font-medium text-md">lll</div>
                    <div class="min-h-full w-[1px] border border-slate-800"></div>
                    <div class="text-white font-medium text-md">
                        Title
                    </div>
                </div>
                <div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-red-500 h-10 w-10 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-md text-white">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm text-white">Episode 1</p>
                                <div class="flex gap-1 items-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 relative bottom-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mx-2 p-2 gap-4">
                        <div class="bg-slate-500 h-10 w-10 flex justify-center items-center rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="!text-gray-500">
                            <p class="text-md">Title</p>
                            <div class="flex items-center gap-3">
                                <p class="text-sm">Episode 1</p>
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-sm">4m 33s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
