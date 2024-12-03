<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.app-backend')] 
#[Title('Campaigns USA - My Courses')] 
class extends Component {
    //
}; ?>

<div>
    <div class="px-10 pb-10 max-w-8xl">
        <div class="grid grid-cols-2 gap-8">
            <div class="cursor-pointer ">
                <div class="p-8 bg-white rounded-3xl">
                    <div class="flex items-center gap-4 p-4 bg-gray-100 rounded-xl">
                        <img class="w-24" src="{{ asset('envato/004-news politics.png') }}" alt="">
                        <div class="w-full space-y-1">
                            <p class="text-xl font-medium">Title</p>
                            <p class="text-gray-700">Description</p>
                            <p class="text-gray-700">Progress:</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-100">
                        <img class="w-24" src="{{ asset('envato/004-news politics.png') }}" alt="">
                        <div class="w-full space-y-1">
                            <p class="text-xl font-medium">Title</p>
                            <p class="text-gray-700">Description</p>
                            <p class="text-gray-700">Progress:</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid rounded-3xl">
                <div class="px-8 pb-8 bg-white rounded-3xl">
                    <img class="object-cover w-full h-52" src="{{ asset('frontend/test.png') }}" alt="">
                    <div class="grid gap-4 mt-4">
                        <div class="flex items-center gap-1.5 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke="currentColor" fill="currentColor" class="text-yellow-400 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke="currentColor" fill="currentColor" class="text-yellow-400 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke="currentColor" fill="currentColor" class="text-yellow-400 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke="currentColor" fill="currentColor" class="text-yellow-400 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                            <span class="mt-1 text-gray-600">
                                4.5 (126 reviews)
                            </span>
                        </div>
                        <p class="text-xl font-medium">Title</p>
                        <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod nobis numquam reprehenderit et ex dicta repudiandae unde? Perspiciatis, non iusto?</p>
                        <div class="pb-6 border-b">
                            <button class="flex px-4 py-2 text-sm text-white border rounded-md border-slate-400 bg-slate-600 hover:opacity-70">Continue Watching</button>
                        </div>
                        <div class="grid grid-cols-2 mt-1 gap-x-2 gap-y-4">
                            <div class="flex items-center gap-2">
                                <div class="inline-block p-2 rounded-full bg-color-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">100% Online Course</p>
                                    <p class="text-xs text-gray-600">Learn at your own schedule</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="inline-block p-2 rounded-full bg-color-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">6 Months to complete</p>
                                    <p class="text-xs text-gray-600">Learn at your own schedule</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="inline-block p-2 rounded-full bg-color-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Flexible Schedule</p>
                                    <p class="text-xs text-gray-600">Learn at your own schedule</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="inline-block p-2 rounded-full bg-color-blue">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">English</p>
                                    <p class="text-xs text-gray-600">Subtitles: English</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-8 text-sm text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quasi voluptate at repudiandae est possimus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>