<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Courses;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Courses')] 
class extends Component {

    public function with() : array
    {
        return [
            'courses' => $this->loadCourses()
        ];
    }

    public function loadCourses()
    {  
        return Courses::paginate(10);
    }
}; ?>

<div class="relative">

    {{-- <div class="absolute inset-0 -z-10">
        <img 
            class="object-cover object-bottom w-full h-full opacity-100" 
            src="{{ asset('frontend/us-cta-bg.png') }}" 
            alt="">
    </div> --}}
    <div class="px-5 pt-16 mx-auto">
        <div class="absolute top-0 left-0 -z-10">
            <img class="h-48 opacity-10 lg:opacity-80" src="{{ asset('frontend/us-flag-left.png') }}" alt="" data-aos="flip-right">
        </div>
        <div class="absolute top-0 right-0 -z-10">
            <img class="h-48 opacity-10 lg:opacity-80" src="{{ asset('frontend/us-flag-right.png') }}" alt="" data-aos="flip-left">
        </div>
        <div class="mx-auto max-w-8xl">
            <p class="text-2xl font-medium text-center text-gray-800 sm:text-4xl" data-aos="flip-right">Courses List</p>
            <div class="flex justify-end">
                <div class="w-full max-w-full pt-10 pb-6 sm:max-w-80">
                    <input type="text" placeholder="Search courses..." class="block w-full rounded-md bg-white px-3.5 py-2.5 text-base text-gray-900 placeholder:text-gray-400 focus:ring-0 border border-gray-300">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="px-5 py-16 mx-auto max-w-8xl">
            <div
                {{-- x-data="{ dragging: false }"
                @pointerdown="dragging = true; $el.setPointerCapture($event.pointerId); $el.style.userSelect = 'none'; $el.classList.add('cursor-default')"
                @pointerup="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')"
                @pointermove="dragging && ($el.scrollLeft -= $event.movementX)"
                @pointerleave="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')" --}}
                class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            >
                @foreach ($courses as $course)
                <a wire:navigate href="{{ route('course-item', $course->id) }}" class="overflow-hidden border shadow-sm hover:shadow-lg bg-zinc-50 rounded-xl" wire:key="{{ $course->id }}">
                    <div class="flex flex-col">
                        <div class="h-44">
                            <img class="object-cover w-full h-full" src="{{ $course->thumbnail_url }}" alt="" loading="lazy">
                        </div>
                        <div class="flex flex-col px-5 py-8 min-h-72">
                            <div class="text-lg font-medium font-inter line-clamp-2">
                                {{ $course->title }}
                            </div>
                            <div class="flex-1">
                                <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                    {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}
                                </p>
                            </div>
                            <div>
                                <div class="flex items-center gap-1 pb-2 mt-3 text-sm text-gray-600 border-b-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 size-4 relative -top-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Duration:
                                    <span class="font-medium text-gray-600">120 hours</span>
                                </div>
                                <div class="flex items-center gap-1 pb-2 mt-3 text-sm text-gray-600 border-b-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-4 relative -top-[1px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                    </svg>
                                    <span class="font-medium text-gray-600 ">
                                        4.5 (126 reviews)
                                    </span>
                                </div>
                                <div class="mt-3 text-sm text-gray-600">Instructor:
                                    <span class="font-medium text-gray-600">{{ $course->createdBy->first_name.' '.$course->createdBy->last_name }}</span>
                                </div>
                            </div>
                        </div>
    
                        {{-- <div class="flex flex-col flex-1 px-5 mt-8">
                            <div class="text-lg line-clamp-2">
                                {{ $course->title }}
                            </div>
                            <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}
                            </p>
                            <div class="mt-3 text-sm text-gray-600">By:
                                <span class="font-medium text-gray-800">{{ $course->createdBy->first_name.' '.$course->createdBy->last_name }}</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-800">....</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3 text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    4.5 (126 reviews)
                                </span>
                            </div>
                            <!-- Price Section Always Last -->
                            <div class="flex flex-wrap order-last gap-4 mt-4">
                                <span class="text-xl font-medium text-sky-600">
                                    ${{ $course->price == floor($course->price) ? number_format($course->price, 0) : number_format($course->price, 2) }}
                                </span>
                            </div>
                        </div> --}}
                    </div>
                </a>
                
                @endforeach
            </div>
        </div>
    </div>
</div>
