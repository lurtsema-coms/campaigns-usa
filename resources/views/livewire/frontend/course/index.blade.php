<?php

use App\Models\Courses;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.frontend')] 
#[Title('Courses')]
class extends Component {

    public $courses;

    public function mount()
    {
        $this->courses = Courses::get();
    }
    
    public function courseLink($id)
    {
        $this->redirect("course/$id");
    }
}; ?>

<div>
    <div class="relative px-5 py-12 space-y-12">
        <div class="grid w-full mx-auto bg-white border shadow-sm lg:grid-cols-3 max-w-7xl rounded-xl">
            <div class="col-start-1 p-5 sm:p-10 lg:col-end-3">
                <span class="text-gray-600">Learning Path / 
                    <span class="px-2 py-1 font-medium bg-gray-100 rounded-2xl">Campaigns</span>
                </span>
                <p class="mt-6 text-xl font-medium text-gray-800 md:text-3xl">Lorem ipsum dolor sit amet consectetur.</p>
                <p class="mt-2 text-gray-600 lg:max-w-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi veritatis molestiae, ut exercitationem doloribus odit aliquam! Nihil animi, illum quos sed culpa repellendus possimus, maxime ipsa recusandae aperiam sit magnam!</p>
            </div>
            <div class="flex items-center justify-center col-start-3">
                <img class="hidden max-h-72 lg:block" src="{{ asset('frontend/online_learning.png') }}" alt="">
            </div>
        </div>
        <div class="mx-auto bg-white border shadow-sm max-w-7xl rounded-xl">
            <div class="flex flex-wrap items-center justify-between px-5 py-3 border-b-2 sm:px-10 sm:gap-4">
                <p class="text-lg font-medium">Course and Events for Campaigns</p>
                {{-- <a href="">
                    <span class="flex items-center gap-2 text-gray-500 group">
                        <span class="group-hover:text-gray-600">Show All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </a> --}}
            </div>
            <div class="px-5 py-5 sm:px-10">
                <div
                    {{-- x-data="{ dragging: false }"
                    @pointerdown="dragging = true; $el.setPointerCapture($event.pointerId); $el.style.userSelect = 'none'; $el.classList.add('cursor-default')"
                    @pointerup="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')"
                    @pointermove="dragging && ($el.scrollLeft -= $event.movementX)"
                    @pointerleave="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')" --}}
                    class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4"
                >
                    @foreach ($courses as $course)
                        <a wire:navigate href="{{ route('course-item', $course->id) }}" class="pb-5 overflow-hidden border shadow-sm hover:shadow-lg bg-zinc-50 rounded-xl">
                            <div >
                                <div class="h-40">
                                    <img class="object-cover w-full h-full" src="{{ $course->thumbnail_url }}" alt="">
                                </div>
                                <div class="px-5 mt-8">
                                    <p class="text-lg line-clamp-2">{{ $course->title }}</p>
                                    <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                        {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}                                            
                                    </p>                                    <div class="mt-3 text-sm text-gray-600">By: 
                                        <span class="font-medium text-gray-800">{{ $course->createdBy->first_name.' '.$course->createdBy->last_name }}</span>
                                    </div>
                                    <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        Duration:
                                        <span class="font-medium text-gray-800">....</span>
                                    </div>
                                    <div class="flex flex-wrap gap-4 mt-4">
                                        {{-- <span class="text-xl line-through">
                                            $1200
                                        </span> --}}
                                        <span class="text-xl font-medium text-sky-600">
                                            ${{ $course->price == floor($course->price) ? number_format($course->price, 0) : number_format($course->price, 2) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
