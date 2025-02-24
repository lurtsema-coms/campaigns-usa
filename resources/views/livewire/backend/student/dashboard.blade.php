<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Courses;

new
#[Layout('components.layouts.app-backend')] 
#[Title('Campaigns USA - Dashboard')] 
class extends Component {

    public $courses;
    public $upcoming;
    
    public function mount()
    {
        $this->courses = Courses::where('published', '!=', 0)->latest()->take(4)->get();
        $this->upcoming = Courses::upcoming()->first();
    }
}; ?>

<div>
    <div class="px-10 pb-10">
        <div class="grid grid-cols-1 gap-8 mb-10 xl:grid-cols-3">
            <div class="col-span-2 space-y-4">
                <div class="relative px-10 py-8 shadow-sm rounded-2xl overfow-hidden">
                    <img x-data x-init="$el.src = '{{ asset('envato/student-join.webp') }}'" src="{{ asset('envato/student-join-thumb.jpg') }}" alt="" class="absolute inset-0 w-full h-full bg-cover brightness-50 rounded-2xl -z-10">
                    <p class="text-xl text-gray-200 font-playfair">Online Course</p>
                    <p class="max-w-md mt-4 text-3xl font-bold text-gray-100">Sharpen Your Skills with Professional Online Courses</p>
                    <button class="mt-8 group">
                        <a wire:navigate href="{{ route('student-my-subscription') }}">
                            <div class="flex items-center gap-4 px-6 py-3 text-gray-200 bg-gray-800 hover:bg-gray-900 rounded-3xl">
                                <span>Join now</span>
                                <span class="bg-white rounded-full group-hover:translate-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="p-1 text-gray-800 size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
                        
            @if($upcoming)
                <div class="col-span-1">
                    <p class="mb-1.5 text-xl">Upcoming Courses</p>
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-1">
                        <div class="p-5 space-y-3 bg-white shadow-sm rounded-3xl">
                            <div class="flex justify-between gap-4 font-bold text-dark">
                                <span class="line-clamp-2">{{ $upcoming->title }}</span>
                            </div>
                            <div class="text-sm font-light text-gray-600 line-clamp-3">
                                {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $upcoming->description)) }}
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
                            @if(!auth()->user()->isSubscribed())
                                <div class="flex justify-end pt-3 border-t">
                                    <a wire:navigate href="{{ route('student-my-subscription') }}">
                                        <button class="px-4 py-2 text-sm text-white rounded-3xl bg-zinc-800 hover:bg-zinc-900">Subscribe to Premium</button>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="space-y-8">
            <div class="bg-white shadow-sm rounded-2xl">
                <div class="flex items-center justify-between px-10 py-5 border-b hover:opacity-70">
                    <span class="text-2xl font-bold">Latest Classes</span>
                    <a wire:navigate href="{{ route('courses_new') }}">
                        <div class="flex items-center gap-2">
                            <span>Show All</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="grid gap-8 p-10 md:grid-cols-2 xl:grid-cols-3">
                    @if (!$courses->isEmpty())
                        @foreach ($courses as $course)
                            <a wire:navigate href="{{ route('course-item', $course->id) }}" 
                                class="w-full max-w-80 mx-auto sm:max-w-full overflow-hidden rounded-xl shadow-sm border border-gray-100 transition duration-300 
                                    hover:scale-[1.02] hover:bg-opacity-95 group relative bg-gray-50"
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
                                        <h3 class="text-lg font-semibold text-gray-800 transition font-inter line-clamp-2 group-hover:font-bold">
                                            {{ $course->title }}
                                        </h3>
                            
                                        <!-- Description -->
                                        <div class="flex-1">
                                            <p class="mt-2 text-sm leading-snug text-gray-600 line-clamp-3">
                                                {{ strip_tags(str_replace(["\r\n", "\n", "\r", "<p>", "</p>", "<br>", "<br/>", "&nbsp;", "&lt;", "&gt;", "&amp;", "&quot;", "&apos;", ""], ' ', $course->description)) }}
                                            </p>
                                        </div>
                            
                                        <!-- Course Details -->
                                        <div class="mt-4 space-y-3">
                                            <!-- Duration -->
                                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                                <span class="px-2 py-1 text-xs font-medium text-white bg-green-600 rounded-md">
                                                    120 hours
                                                </span>
                                            </div>
                            
                                            <!-- Rating -->
                                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
                                                    stroke-width="1.5" stroke="currentColor" 
                                                    class="text-yellow-400 size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>
                                                <span class="font-medium">4.5 (126 reviews)</span>
                                            </div>
                            
                                            <!-- Instructor -->
                                            <div class="text-sm text-gray-600">
                                                Instructor: 
                                                <span class="font-semibold">{{ $course->createdBy->first_name }} {{ $course->createdBy->last_name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        @else
                        <div class="col-span-3">
                            <p class="text-lg text-center text-sky-600">Courses are still in the making. Thank you for the early access! 🚀</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
