<?php


use App\Models\Courses;
use Livewire\Volt\Component;

new class extends Component {
    
    public $search = '';
    
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

<div class="px-5 mt-10">
    {{-- Categories --}}
    {{-- <div class="flex flex-wrap justify-center pb-5 mt-32 gap-9 md:flex-nowrap">
        <a class="relative px-1 group" href="">
            Laravel
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            Tailwind
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            CSS
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            Livewire
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
        <a class="relative px-1 group" href="">
            HTMX
            <span class="absolute left-0 w-0 h-1 transition-all bg-color-blue dark:bg-white -bottom-3 group-hover:w-full md:-bottom-6"></span>
        </a>
    </div> --}}
    {{-- Border --}}
    <div class="w-full h-1 bg-gray-200 mt-28 dark:bg-transparent dark:bg-custom-border-b"></div>
        <div class="flex flex-col w-full gap-8 mt-10 xl:flex-row 2xl:gap-16 ">
            <div class="block xl:hidden">
                <button class="px-4 py-2 border-2 border-dark/40 rounded-xl">Filter</button>
            </div>
            <div class="hidden w-full space-y-4 xl:block xl:max-w-72 2xl:max-w-sm">
                <x-text-input class="w-full h-12 shadow-md dark:text-dark" type="search" placeholder="Search a topic...." />
                <div>
                    <div class="flex items-center gap-2">
                        <input id="free-course" type="checkbox">
                        <label for="free-course">Free</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input id="paid-course" type="checkbox">
                        <label for="paid-course">Paid</label>
                    </div>
                </div>
            </div>
            <div class="grid gap-10 sm:grid-cols-2 text-dark dark:text-gray-100">
                @foreach ($courses as $course)
                    <a class="flex flex-col max-w-lg gap-5 p-4 bg-white border shadow-md sm:items-center sm:flex-row dark:border-gray-700 shrink-0 dark:bg-color-blue rounded-xl hover:border-gray-400" href="{{ route('course-item', $course->id) }}" wire:navigate>
                        <img class="object-cover h-48 border sm:w-1/2 rounded-2xl border-dark/10" src="{{ asset($course->thumbnail_url) }}" alt="Sample Image" loading="lazy">
                        <div class="space-y-2">
                            <p class="font-bold">{{ $course->title }}</p>
                            <p class="text-xs dark:text-gray-400">12 Series | 118 videos</p>
                            <p class="text-xs dark:text-gray-400">{{ \Carbon\Carbon::parse($course->created_at)->format('F j, Y') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
