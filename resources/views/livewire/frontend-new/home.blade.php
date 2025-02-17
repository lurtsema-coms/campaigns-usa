<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Courses;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Home')] 
class extends Component {
    
    public function with() : array
    {
        return [
            'courses' => $this->loadCourses()
        ];
    }

    public function loadCourses()
    {  
        return Courses::paginate(4);
    }
}; ?>

<div class="relative">
    <div class="absolute top-0 left-0" data-aos="fade-right">
        <img class="h-96 lg:h-full opacity-10 lg:opacity-80" src="{{ asset('frontend/us-flag-left.png') }}" alt="">
    </div>
    <div class="relative pt-16 pb-16 mx-auto overflow-hidden lg:pt-5 lg:pb-0 max-w-8xl">
        <div class="absolute bottom-0 hidden sm:block -right-10 lg:right-0 -z-10">
            <img class="h-[35rem] opacity-10" src="{{ asset('frontend/us-h.png') }}" alt="">
        </div>
        <div class="grid lg:grid-cols-2">
            <div class="hidden lg:block" data-aos="fade-right">
                <img class="object-contain w-96 lg:w-[35rem] mx-auto" src="{{ asset('frontend/joe.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center gap-8 px-5 mx-auto" data-aos="flip-left">
                <div>
                    <h2 class="text-4xl font-bold tracking-wide text-gray-800 sm:text-6xl" style="text-shadow: 4px 3px rgba(206, 206, 206, 0.6);">Learn from</h2>
                    <h2 class="text-4xl font-bold tracking-wide text-blue-800 sm:text-6xl" style="text-shadow: 4px 3px rgba(206, 206, 206, 0.6);">an Expert Mentor</h2>
                    <p class="mt-4 text-xl font-bold tracking-wide text-gray-600">Joseph Lurtsema, Your Guide to Mastering the Course</p>
                </div>
                <p class="max-w-2xl tracking-wide text-gray-600 font-inter sm:text-xl">
                    Discover the essential principles of political science, governance, and leadership. This course provides in-depth knowledge to empower critical thinking, decision-making, and a deeper understanding of political systems worldwide.
                </p>
                <div class="flex gap-8">
                    <a wire:navigate href="{{ route('courses_new') }}">
                        <button class="tracking-wider sm:text-xl group relative flex h-16 items-center justify-center overflow-hidden rounded-md border border-sky-600 bg-transparent px-4 sm:px-8 text-gray-600 transition-all duration-100 [box-shadow:5px_5px_rgba(80,160,255,0.4)] hover:translate-x-[3px] hover:translate-y-[3px] hover:[box-shadow:0px_0px_rgba(100,174,255,0.6)]">
                            Browse Courses
                        </button>
                    </a>
                    <a wire:navigate href="{{ route('about_new') }}">
                        <button class="relative flex items-center justify-center h-16 px-4 overflow-hidden duration-500 bg-red-500 rounded-md sm:px-8 sm:text-xl group text-neutral-50"><div class="translate-y-0 opacity-100 transition group-hover:-translate-y-[150%] group-hover:opacity-0">Learn More About Me</div><div class="absolute translate-y-[150%] opacity-0 transition group-hover:translate-y-0 group-hover:opacity-100"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"><path d="M7.5 2C7.77614 2 8 2.22386 8 2.5L8 11.2929L11.1464 8.14645C11.3417 7.95118 11.6583 7.95118 11.8536 8.14645C12.0488 8.34171 12.0488 8.65829 11.8536 8.85355L7.85355 12.8536C7.75979 12.9473 7.63261 13 7.5 13C7.36739 13 7.24021 12.9473 7.14645 12.8536L3.14645 8.85355C2.95118 8.65829 2.95118 8.34171 3.14645 8.14645C3.34171 7.95118 3.65829 7.95118 3.85355 8.14645L7 11.2929L7 2.5C7 2.22386 7.22386 2 7.5 2Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div 
        class="p-10 bg-gray-800"
        x-data="{ brooksPitcher: false, jubileeUnderwood: false, robertYundt: false, isOpenSidebar: false }"
    >
        {{-- Notable Campaign Modal --}}
        <div>
            {{-- BROOKS PITCHER --}}
            <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
                x-cloak
                x-show="brooksPitcher"
                x-transition
            >
                <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                    @click.outside="
                        brooksPitcher=false;
                        document.documentElement.style.overflow = 'auto';">
                    <div class="flex flex-wrap justify-center h-full">
                        <!-- First Div (30%) -->
                        <div class="relative flex w-full max-w-md">
                            <img class="bottom-0 object-contain max-w-xl w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
                        <!-- Second Div (70%) -->
                        <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                            <div>
                                <p class="mb-3 text-4xl font-bold tracking-wider sm:text-6xl">BROOKS PITCHER</p>
                                <p class="text-2xl font-bold tracking-wider sm:text-xl">FOR SCHOOL BOARD</p>
                            </div>
                            <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                            <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- JUBILEE UNDERWOOD --}}
            <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
                x-cloak
                x-show="jubileeUnderwood"
                x-transition>
                <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[30rem]"
                    @click.outside="
                        jubileeUnderwood=false;
                        document.documentElement.style.overflow = 'auto';">
                    <div class="flex flex-wrap justify-center h-full">
                        <!-- First Div (30%) -->
                        <div class="relative flex w-full max-w-md">
                            <img class="object-contain max-w-xl bottom-2 w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign2-modal.png') }}" alt="">
                        </div>
                        <!-- Second Div (70%) -->
                        <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                            <div>
                                <p class="mb-3 text-4xl font-bold tracking-wider sm:text-6xl">JUBILEE</p>
                                <p class="mb-3 text-4xl font-bold tracking-wider sm:text-6xl">UNDERWOOD</p>
                                <p class="text-2xl font-bold tracking-wider sm:text-xl">FOR STATE HOUSE</p>
                            </div>
                            <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                            <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ROBERT YUNDT --}}
            <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
                x-cloak
                x-show="robertYundt"
                x-transition>
                <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                    @click.outside="
                    robertYundt=false;
                    document.documentElement.style.overflow = 'auto';">
                    <div class="flex flex-wrap justify-center h-full">
                        <!-- First Div (30%) -->
                        <div class="relative flex w-full max-w-md">
                            <img class="bottom-0 object-contain max-w-xl w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign3-modal.png') }}" alt="">
                        </div>
                        <!-- Second Div (70%) -->
                        <div class="flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47] space-y-5">
                            <div>
                                <p class="mb-3 text-4xl font-bold tracking-wider sm:text-6xl">ROBERT YUNDT</p>
                                <p class="text-2xl font-bold tracking-wider sm:text-xl">FOR STATE SENATE</p>
                            </div>
                            <p class="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nobis, quibusdam, totam, alias tempora vitae modi sit sint tenetur ex quis voluptates reprehenderit consequatur. Expedita nam non hic corrupti placeat!</p>
                            <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque earum at corporis vitae assumenda aliquid sequi ab temporibus veniam eaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="mx-auto text-4xl font-medium text-center text-white">Notable Campaigns</p>
        <div class="flex flex-col items-center w-full gap-10 py-10 mt-10 rounded-xl sm:flex-row">
            {{-- BROOKS Img --}}
            <div class="relative flex-1" x-data="{ hover: false }" @click="brooksPitcher = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign1-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign1.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
            {{-- JUBILEE Img --}}
            <div class="relative flex-1" x-data="{ hover: false }" @click="jubileeUnderwood = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign2-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign2.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
            {{-- ROBERT Img --}}
            <div class="relative flex-1" x-data="{ hover: false }" @click="robertYundt = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign3-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign3.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
        </div>
    </div>
    <div class="px-5 py-16 mx-auto max-w-8xl">
        <p class="mx-auto text-3xl font-medium text-center text-gray-800 sm:text-5xl font-sourceserif">Latest Classes</p>
        <p class="mx-auto mt-4 text-xl text-center text-gray-800 font-sourceserif">Learn the Ins & Outs from Joseph Lurtsema!</p>
        @if ($courses->isEmpty())
            <div class="flex justify-center mt-16">
                <p class="font-medium text-center text-gray-800 sm:text-xl">We're still creating courses, but you can learn more about Joseph Lurtsema in the meantime.</p>
            </div>
            <div class="flex justify-center">
                <a wire:navigate href="{{ route('about_new') }}">
                    <button class="flex items-center gap-2 px-6 py-4 mt-8 bg-white rounded-md shadow group hover:opacity-70">
                        <span>Meet Joseph Lurtsema</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </a>
            </div>
            @else
            <div
                {{-- x-data="{ dragging: false }"
                @pointerdown="dragging = true; $el.setPointerCapture($event.pointerId); $el.style.userSelect = 'none'; $el.classList.add('cursor-default')"
                @pointerup="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')"
                @pointermove="dragging && ($el.scrollLeft -= $event.movementX)"
                @pointerleave="dragging = false; $el.releasePointerCapture($event.pointerId); $el.style.userSelect = ''; $el.classList.remove('cursor-default')" --}}
                class="flex flex-wrap justify-center gap-6 mt-16"
            >
            @foreach ($courses as $course)
            <a wire:navigate href="{{ route('course-item', $course->id) }}" class="w-full overflow-hidden border shadow-sm max-w-80 hover:shadow-lg bg-zinc-50 rounded-xl" wire:key="{{ $course->id }}">
                <div class="flex flex-col">
                    <div class="h-44">
                        <img class="object-cover w-full h-full" src="{{ $course->thumbnail_url }}" alt="">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 size-4 relative -top-[.5px]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Duration:
                                <span class="font-medium text-gray-600">120 hours</span>
                            </div>
                            <div class="flex items-center gap-1 pb-2 mt-3 text-sm text-gray-600 border-b-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="relative text-yellow-400 size-4 top-[1px]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                                <span class="mt-1 font-medium text-gray-600">
                                    4.5 (126 reviews)
                                </span>
                            </div>
                            <div class="mt-3 text-sm text-gray-600">Instructor:
                                <span class="font-medium text-gray-600">{{ $course->createdBy->first_name.' '.$course->createdBy->last_name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a wire:navigate href="{{ route('courses_new') }}">
                <button class="flex items-center gap-2 px-6 py-4 mt-16 bg-white rounded-md shadow group hover:opacity-70">
                    <span>See All Courses</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </a>
        </div>
        @endif
    </div>
    <div class="bg-white">
        <div class="px-5 pb-16 mx-auto sm:px-6 sm:pb-32 lg:px-8">
            <div class="grid gap-8 mx-auto mb-16 sm:mb-32 md:grid-cols-2 max-w-7xl">
                <div class="flex flex-col justify-center gap-6">
                    <p class="font-medium text-blue-400 sm:text-lg">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="text-xl font-bold sm:text-3xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, molestias doloremque hic perspiciatis sapiente error adipisci? Quibusdam enim ad similique ipsa animi sit, ducimus mollitia?</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('frontend/politics-talking.jpg') }}" class="rounded-md" alt="">
                </div>
            </div>
            <div class="grid gap-8 mx-auto md:grid-cols-2 max-w-7xl">
                <div class="flex items-center">
                    <img src="{{ asset('frontend/politics-learning.jpg') }}" class="rounded-md" alt="">
                </div>
                <div class="flex flex-col justify-center gap-6 lg:pl-8">
                    <p class="font-medium text-blue-400 sm:text-lg">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="text-xl font-bold sm:text-3xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, molestias doloremque hic perspiciatis sapiente error adipisci? Quibusdam enim ad similique ipsa animi sit, ducimus mollitia?</p>
                    <a wire:nagigate href="{{ route('contact_new') }}">
                        <button class="px-6 py-4 text-white bg-blue-500 rounded shadow hover:bg-blue-400">Email Now!</button>
                    </a>
                </div>
            </div>

            <!-- Component: Logos carousel -->
            <div class="py-16 mx-auto overflow-hidden sm:py-32 max-w-8xl">
                <p class="mb-16 text-xl font-bold text-center sm:text-3xl text-slate-600">We help win hundreds of campaigns in the last 3 years!</p>
                <div class="relative w-full glide-09">
                    <!-- Slides -->
                    <div data-glide-el="track">
                        <ul class="whitespace-no-wrap flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform] relative flex w-full overflow-hidden p-0">
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-1.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-2.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-3.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-4.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-5.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                            <li>
                                <img src="https://Tailwindmix.b-cdn.net/carousel/logos/carousel-logo-image-6.svg" class="w-auto h-20 max-w-full max-h-full m-auto " />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Logos carousel -->

            <div class="relative px-6 py-24 mx-auto overflow-hidden text-center bg-gray-800 shadow-2xl isolate sm:rounded-3xl sm:px-16 max-w-8xl">
                <!-- Background image -->
                <div class="absolute inset-0 -z-10">
                    <img 
                        class="object-cover object-bottom w-full h-full opacity-40" 
                        src="{{ asset('frontend/us-cta-bg.png') }}" 
                        alt="">
                </div>
                <!-- Text Content -->
                <h2 class="text-4xl font-semibold tracking-tight text-white text-balance sm:text-5xl">Lorem ipsum dolor sit amet.</h2>
                <p class="max-w-xl mx-auto mt-6 text-gray-300 text-pretty text-lg/8">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                <div class="flex items-center justify-center mt-10 gap-x-6">
                    <a href="#" class="px-6 py-4 font-semibold text-gray-900 bg-white rounded-md shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                    <a href="#" class="font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
                </div>
                <!-- Background SVG -->
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                            <stop stop-color="#FFD700" /> <!-- Gold -->
                            <stop offset="1" stop-color="#1E40AF" /> <!-- Navy Blue -->
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>

@script
<script>
    let glide09 = new Glide('.glide-09', {
        type: 'carousel',
        autoplay: 1,
        animationDuration: 4500,
        animationTimingFunc: 'linear',
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1,
                gap: 36
            }
        },
    });

    glide09.mount();
</script>
@endscript