<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Courses;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Courses')] 
class extends Component {

    public $search;

    public function with() : array
    {
        return [
            'courses' => $this->loadCourses()
        ];
    }

    public function loadCourses()
    {  
        return Courses::where('published', '!=', 0)->where('title', 'LIKE', '%' . $this->search . '%')->paginate(10);
    }
}; ?>

<div class="relative bg-color-blue">
    <div class="absolute top-0 left-0 z-10">
        <img class="h-48 opacity-10 lg:opacity-80" src="{{ asset('frontend/us-flag-left.png') }}" wire:ignore alt="" data-aos="flip-right">
    </div>
    <div class="absolute top-0 right-0 z-10">
        <img class="h-48 opacity-10 lg:opacity-80" src="{{ asset('frontend/us-flag-right.png') }}" wire:ignore alt="" data-aos="flip-left">
    </div>
    <div class="px-5 pt-32 mx-auto">
        <div class="mx-auto max-w-8xl">
            <p class="text-2xl font-semibold text-center text-gray-100 sm:text-4xl" data-aos="flip-right" wire:ignore>All Courses Included in Your Subscription</p>
            <p class="max-w-2xl mx-auto mt-4 text-center text-gray-400 sm:text-base">Unlock unlimited access to our full library of courses with a monthly or yearly subscription. Learn at your own pace, anytime, anywhere!</p>
            @if ($courses->isEmpty())
                <div>
                    <div class="flex justify-center mt-8">
                        <p class="font-medium text-center text-sky-200 sm:text-xl">📚 We're still creating courses, but feel free to browse in the meantime.</p>
                    </div>
                    <div class="flex justify-center">
                        <a wire:navigate href="{{ route('home_new') }}">
                            <button class="flex items-center gap-2 px-6 py-4 mt-8 bg-white rounded-md shadow group hover:opacity-70">
                                <span>Home</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="pt-16 pb-24">
        <div class="px-5 mx-auto max-w-8xl">
            <div
                {{-- x-data="{ dragging: false }"
                @pointerdown="dragging = true; $el.setPointerCapture($event.pointerId); $el.style.userSelect = 'none'; $el.classList.add('cursor-default')"
                @pointerup="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')"
                @pointermove="dragging && ($el.scrollLeft -= $event.movementX)"
                @pointerleave="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')" --}}
                class="flex flex-wrap justify-center gap-6"
            >
            @if (!$courses->isEmpty())
                @foreach ($courses as $course)
                    <a wire:navigate href="{{ route('course-item', $course->id) }}" 
                        class="w-full max-w-80 overflow-hidden rounded-xl border-2 border-sky-400 shadow-lg bg-[rgb(15,34,57)] transition duration-300 
                            hover:shadow-2xl hover:scale-[1.02] hover:border-yellow-400 hover:bg-opacity-95 group relative"
                        wire:key="{{ $course->id }}"
                    >
                    
                        <div class="relative flex flex-col h-full">
                            <!-- Thumbnail -->
                            <div class="relative w-full overflow-hidden h-44 rounded-t-xl">
                                <img class="object-cover object-center w-full h-full transition duration-500 ease-in-out group-hover:scale-110" 
                                    src="{{ $course->thumbnail_url }}" 
                                    alt="Course Thumbnail">
                            </div>
                    
                            <!-- Content -->
                            <div class="flex flex-col flex-1 px-5 py-6 text-white">
                                <!-- Title -->
                                <h3 class="text-lg font-semibold transition text-sky-500 font-inter line-clamp-2 group-hover:text-yellow-400">
                                    {{ $course->title }}
                                </h3>
                    
                                <!-- Description -->
                                <div class="flex-1">
                                    <p class="mt-2 text-sm leading-snug text-gray-200 line-clamp-3">
                                        {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}
                                    </p>
                                </div>
                    
                                <!-- Course Details -->
                                <div class="mt-4 space-y-3">
                                    <!-- Duration -->
                                    <div class="flex items-center gap-2 text-sm text-gray-300">
                                        <span class="px-2 py-1 text-xs font-medium text-white bg-green-600 rounded-md">
                                            120 hours
                                        </span>
                                    </div>
                    
                                    <!-- Rating -->
                                    <div class="flex items-center gap-2 text-sm text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
                                            stroke-width="1.5" stroke="currentColor" 
                                            class="text-yellow-400 size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" 
                                                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                        <span class="font-medium">4.5 (126 reviews)</span>
                                    </div>
                    
                                    <!-- Instructor -->
                                    <div class="text-sm text-gray-300">
                                        Instructor: 
                                        <span class="font-semibold text-white">{{ $course->createdBy->first_name.' '.$course->createdBy->last_name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>
