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
    <div class="relative overflow-hidden bg-color-blue">
        <div class="absolute top-0 left-0" data-aos="fade-right">
            <img class="opacity-50 lg:opacity-100 h-96 lg:h-full brightness-50 lg:brightness-90" src="{{ asset('frontend/us-flag-left.png') }}" alt="">
        </div>
        <div class="absolute -right-24 -bottom-[50rem] rounded-full h-[65rem] w-[65rem] bg-[radial-gradient(circle,_rgba(255,255,255,0.1)_0%,_rgba(255,255,255,0)_76%)]"></div>
        <div class="relative pt-32 pb-16 mx-auto overflow-hidden lg:pt-20 lg:pb-0 max-w-8xl">
            <div class="absolute bottom-0 hidden sm:block -right-10 lg:right-0 -z-10">
                <img class="h-[35rem] opacity-10" src="{{ asset('frontend/us-h.png') }}" alt="">
            </div>
            <div class="grid lg:grid-cols-2">
                <div class="hidden lg:block" data-aos="fade-right">
                    <img class="object-contain w-96 lg:w-[35rem] mx-auto" src="{{ asset('frontend/joe.png') }}" alt="">
                </div>
                <div class="flex flex-col justify-center px-5 mx-auto" data-aos="flip-left">
                    <div>
                        <h2 class="text-4xl font-bold tracking-wide text-white sm:text-6xl" style="text-shadow: 4px 3px rgba(206, 206, 206, 0.045);">Campaign USA</h2>
                        <h2 class="text-4xl font-bold tracking-wide text-sky-400 sm:text-6xl" style="text-shadow: 4px 3px rgba(206, 206, 206, 0.045);">Empowering Political Success</h2>
                    </div>
                    <p class="max-w-2xl mt-8 tracking-wide text-gray-300 font-inter sm:text-xl">
                        Welcome to Campaign USA, your premier learning platform designed to equip you with the skills and knowledge to thrive in the fast-paced world of political campaigning. Whether you're running for office, managing a campaign, or looking to work behind the scenes, our expert-led courses provide the foundation and insights you need to succeed in this high-stakes field. 
                    </p>
                    <div class="flex gap-8 mt-12">
                        <a wire:navigate href="{{ route('courses_new') }}">
                            <button class="tracking-wider bg-white text-neutral-700 sm:text-xl group relative flex h-16 items-center justify-center overflow-hidden rounded-md border border-sky-600 bg-transparent px-4 sm:px-8  transition-all duration-100 [box-shadow:5px_5px_rgba(80,160,255,0.4)] hover:translate-x-[3px] hover:translate-y-[3px] hover:[box-shadow:0px_0px_rgba(100,174,255,0.6)]">
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
    </div>
    {{-- <div 
        class="pt-10"
        x-data="{ brooksPitcher: false, jubileeUnderwood: false, robertYundt: false, isOpenSidebar: false }"
    >
        <div>
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
                        <div class="relative flex w-full max-w-md">
                            <img class="bottom-0 object-contain max-w-xl w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign1-modal.png') }}" alt="">
                        </div>
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
            <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
                x-cloak
                x-show="jubileeUnderwood"
                x-transition>
                <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[30rem]"
                    @click.outside="
                        jubileeUnderwood=false;
                        document.documentElement.style.overflow = 'auto';">
                    <div class="flex flex-wrap justify-center h-full">
                        <div class="relative flex w-full max-w-md">
                            <img class="object-contain max-w-xl bottom-2 w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign2-modal.png') }}" alt="">
                        </div>
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
            <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
                x-cloak
                x-show="robertYundt"
                x-transition>
                <div class="m-auto text-black w-full max-w-7xl bg-white border-2 relative rounded-[1.9rem] lg:h-[28rem]"
                    @click.outside="
                    robertYundt=false;
                    document.documentElement.style.overflow = 'auto';">
                    <div class="flex flex-wrap justify-center h-full">
                        <div class="relative flex w-full max-w-md">
                            <img class="bottom-0 object-contain max-w-xl w-96 sm:relative -left-24 sm:w-auto lg:absolute" src="{{ asset('frontend/campaign3-modal.png') }}" alt="">
                        </div>
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
        <p class="mx-auto text-3xl font-bold text-center text-sky-600">Notable Campaigns</p>
        <div class="flex flex-col items-center w-full gap-10 py-10 sm:flex-row">
            <div class="relative flex-1" x-data="{ hover: false }" @click="brooksPitcher = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign1-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer max-w-80"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign1-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
            <div class="relative flex-1" x-data="{ hover: false }" @click="jubileeUnderwood = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign2-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer max-w-80"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign2-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
            <div class="relative flex-1" x-data="{ hover: false }" @click="robertYundt = true; document.documentElement.style.overflow = 'hidden';">
                <img class="absolute inset-0 object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer"
                    :class="{'opacity-0': !hover, 'opacity-100': hover}"
                    src="{{ asset('frontend/campaign3-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
                <img class="object-contain h-full mx-auto transition-opacity duration-300 cursor-pointer max-w-80"
                    :class="{'opacity-100': !hover, 'opacity-0': hover}"
                    src="{{ asset('frontend/campaign3-colored.png') }}"
                    alt=""
                    @mouseover="hover = true"
                    @mouseleave="hover = false">
            </div>
        </div>
    </div> --}}
    <div class="px-5 py-16 mx-auto max-w-8xl">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
            <div class="p-6 text-center transition bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl">
                <span class="text-3xl">🎓</span>
                <h3 class="mt-3 text-lg font-semibold">Expert Instructors</h3>
                <p class="mt-2 text-sm text-gray-600">
                    Learn from top professionals with years of real-world experience.  
                    Gain industry insights that keep you ahead.
                </p>
            </div>
            
            <div class="p-6 text-center transition bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl">
                <span class="text-3xl">📚</span>
                <h3 class="mt-3 text-lg font-semibold">Comprehensive Courses</h3>
                <p class="mt-2 text-sm text-gray-600">
                    Explore a diverse selection of courses across multiple fields.  
                    Each course is designed to provide in-depth, practical knowledge.
                </p>
            </div>
        
            <div class="p-6 text-center transition bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl">
                <span class="text-3xl">⏳</span>
                <h3 class="mt-3 text-lg font-semibold">Flexible Learning</h3>
                <p class="mt-2 text-sm text-gray-600">
                    Learn at your own pace without deadlines or pressure.  
                    Access courses anytime, anywhere, on any device.
                </p>
            </div>
        
            <div class="p-6 text-center transition bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl">
                <span class="text-3xl">🌍</span>
                <h3 class="mt-3 text-lg font-semibold">Learn Anywhere</h3>
                <p class="mt-2 text-sm text-gray-600">
                    Enjoy seamless access to your courses across all devices.  
                    Pick up right where you left off, no matter where you are.
                </p>
            </div>
        </div>
    </div>
    <div class="relative bg-color-blue">
        <div class="absolute transform -translate-x-1/2 left-1/2 -translate-y-1/2 top-1/2 rounded-full h-[100%] w-[100%] bg-[radial-gradient(circle,_rgba(255,255,255,0.1)_0%,_rgba(255,255,255,0)_60%)] -z-0"></div>
        <div class="relative px-5 py-20 mx-auto overflow-hidden max-w-8xl">
            <p class="mx-auto text-3xl font-bold text-center text-sky-200 sm:text-5xl font-sourceserif">Latest Classes</p>
            <p class="mx-auto mt-4 text-xl text-center text-gray-300 font-sourceserif">Learn the Ins & Outs from Joseph Lurtsema!</p>
            @if ($courses->isEmpty())
                <div class="flex justify-center mt-8">
                    <p class="font-medium text-center text-blue-600 sm:text-xl">📚 We're still creating courses, but feel free to browse in the meantime.</p>
                </div>
                @else
                <div
                    class="flex flex-wrap justify-center gap-6 mt-16"
                >
                @foreach ($courses as $course)
                {{-- <a wire:navigate href="{{ route('course-item', $course->id) }}" class="w-full overflow-hidden border shadow-sm max-w-80 hover:shadow-lg bg-zinc-50 rounded-xl hover:opacity-70" wire:key="{{ $course->id }}">
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
                </a> --}}
                <a wire:navigate href="{{ route('course-item', $course->id) }}" 
                    class="w-full max-w-80 overflow-hidden rounded-xl border-2 border-sky-400 shadow-lg  transition duration-300 
                           hover:shadow-2xl hover:scale-[1.02] hover:border-yellow-400 hover:bg-opacity-95 group relative"
                    wire:key="{{ $course->id }}"
                >
                 
                     <div class="relative flex flex-col h-full">
                         <!-- Thumbnail -->
                         <div class="relative w-full overflow-hidden h-44 rounded-t-xl">
                             <div class="absolute top-0 z-10 px-6 py-1 text-sm font-bold text-white bg-red-500 rounded-br-md">Subscribe Now!</div>
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
            </div>
            <div class="z-10 flex justify-center">
                <a wire:navigate href="{{ route('courses_new') }}">
                    <button class="z-10 flex items-center gap-2 px-6 py-4 mt-16 bg-white rounded-md shadow group hover:opacity-70">
                        <span>See All Courses</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </a>
            </div>
            @endif
        </div>
    </div>
    <div class="pt-32">
        <div class="px-5 pb-16 mx-auto sm:px-6 sm:pb-32 lg:px-8">
            <div class="grid gap-8 mx-auto mb-16 sm:mb-32 md:grid-cols-2 max-w-7xl">
                <div class="flex flex-col justify-center gap-6">
                    <p class="font-medium text-blue-400 sm:text-lg">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="text-xl font-bold sm:text-3xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, molestias doloremque hic perspiciatis sapiente error adipisci? Quibusdam enim ad similique ipsa animi sit, ducimus mollitia?</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('frontend/politics-talking.jpg') }}" class="rounded-md shadow-[5px_5px_0px_0px_rgba(220,38,38,0.8)]" alt="">
                </div>
            </div>
            <div class="grid gap-8 mx-auto md:grid-cols-2 max-w-7xl">
                <div class="flex items-center">
                    <img src="{{ asset('frontend/politics-learning.jpg') }}" class="rounded-md shadow-[-10px_5px_0px_0px_rgba(14,165,233,0.8)]" alt="">
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
                <h2 class="text-4xl font-semibold tracking-tight text-white text-balance sm:text-5xl">Start Your Political Journey Today</h2>
                <p class="max-w-4xl mx-auto mt-6 text-gray-300 text-pretty text-lg/8">Whether you're looking to sharpen your campaign strategy, build a career in the political field, or improve your resilience during challenging times, Campaign USA offers the courses, tools, and insights you need. Begin your learning journey today and become a powerful force in the political world.</p>
                <div class="flex items-center justify-center mt-10 gap-x-6">
                    <a href="#" class="px-6 py-4 font-semibold text-gray-900 bg-white rounded-md shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Start learning now</a>
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