<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.app')] 
#[Title('Campaigns USA - Contact Us')] 
class extends Component {
    //
}; ?>

<div x-data="{ joeLurtsema: false, brooksPitcher: false, jubileeUnderwood: false, robertYundt: false, isOpenSidebar: false }">
    {{-- JOE LURTSEMA --}}
    <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
        x-cloak
        x-init="
            setTimeout(() => { 
                brooksPitcher = false;
                jubileeUnderwood = false;
                robertYundt = false; 
                joeLurtsema = true; 

                document.documentElement.style.overflow = 'hidden';
            }, 12000)
        " 
        x-show="joeLurtsema"
        x-transition>
        <div class="m-auto text-black w-full max-w-5xl bg-white bg-opacity-80 border-2 relative rounded-[1.9rem] lg:h-[28rem]"
            @click.outside="
                joeLurtsema=false;
                document.documentElement.style.overflow = 'auto';
            ">
            <div class="flex flex-wrap justify-center h-full">
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 p-3 rounded-lg text-white text-2xl font-bold z-10 bg-[#C4172E] hover:bg-white hover:text-[#C4172E] sm:text-5xl">
                    BOOK NOW!
                </div>
                <!-- First Div (30%) -->
                <div class="relative flex justify-center w-full max-w-md sm:justify-start">
                    <img class="bottom-0 object-contain max-w-xl w-96 sm:relative -left-12 sm:w-auto lg:absolute" src="{{ asset('frontend/joe-edited.png') }}" alt="">
                </div>
                <!-- Second Div (70%) -->
                <div class="relative flex-grow flex-shrink basis-96 sm:min-w-[35rem] flex flex-col justify-center py-10 px-5 sm:px-16 text-[#001A47]">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2  p-3 rounded-lg text-white text-lg font-bold [background:linear-gradient(to_bottom,#C4172E,#4A000A)] sm:text-2xl">
                        FREE CONSULTATION!
                    </div>
                    <div class="space-y-2 text-center">
                        <p class="text-lg font-bold tracking-wider sm:text-xl">1 on 1 class with</p>
                        <p class="text-4xl font-bold tracking-wider sm:text-6xl">JOSEPH</p>
                        <p class="text-4xl font-bold tracking-wider sm:text-6xl">LURTSEMA</p>
                        <p class="text-lg tracking-wider sm:text-xl">CEO | CAMPAIGN SPECIALIST | FOUNDER</p>
                    </div>
                    <div class="flex justify-center mt-8">
                    <a href="flex">
                            <div class="flex items-center gap-1 bg-[#002E80] py-3 px-4 text-center text-xl rounded-3xl text-white transition-all cursor-pointer hover:bg-white hover:text-[#002E80]">
                                <span>LEARN MORE ABOUT ME</span>
                                <span class="relative -top-[1px]">></span>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    {{-- BROOKS PITCHER --}}
    <div class="fixed inset-0 z-20 flex min-h-screen p-10 overflow-auto bg-black min-w-screen bg-opacity-85"
        x-cloak
        x-show="brooksPitcher"
        x-transition>
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
    {{-- BROOKS PITCHER --}}
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

    <div class="w-full m-auto max-w-[120rem]">
        <div class="pt-20 sm:px-12 md:px-20 lg:px-28">
            <div class="flex flex-wrap">
                <div class="flex-1">
                    <div class="flex flex-col px-5 pt-10"
                        x-data="{ show1: false, show2: false, show3: false, show4: false }" 
                        x-init="
                            setTimeout(() => show1 = true, 500);
                            setTimeout(() => show2 = true, 800);
                            setTimeout(() => show3 = true, 1100);
                            setTimeout(() => show4 = true, 1400);
                        ">
                        <!-- First Paragraph -->
                        <p class="font-bold text-5xl sm:text-8xl min-w-[20rem]"
                            x-cloak
                            x-show="show1" 
                            x-transition:enter="transition transform ease-out duration-100"
                            x-transition:enter-start="opacity-0 translate-y-10" 
                            x-transition:enter-end="opacity-100 translate-y-0"
                        >
                            Join and
                        </p>
                        
                        <!-- Second Paragraph -->
                        <p 
                            class="text-5xl font-bold sm:text-8xl"
                            x-cloak
                                x-show="show2" 
                            x-transition:enter="transition transform ease-out duration-100"
                            x-transition:enter-start="opacity-0 translate-y-10" 
                            x-transition:enter-end="opacity-100 translate-y-0"
                        >
                            Learn from
                        </p>
                        
                        <!-- Third Paragraph -->
                        <p class="text-5xl font-bold sm:text-8xl"
                            x-cloak
                            x-show="show3" 
                            x-transition:enter="transition transform ease-out duration-100"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0"
                        >
                            The Best.
                        </p>
                        
                        <!-- Fourth Paragraph -->
                        <p class="font-bold text-2xl mt-5 max-w-[41rem] tracking-widest 400px:min-w-[28rem] sm:text-3xl" 
                            x-cloak
                            x-show="show4" 
                            x-transition:enter="transition transform ease-out duration-100"
                            x-transition:enter-start="opacity-0 translate-y-10" 
                            x-transition:enter-end="opacity-100 translate-y-0"
                        >
                            We help win hundreds of campaigns in the last 3 years!
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center flex-1 m-auto lg:flex-nowrap lg:justify-start" data-aos="fade-left">
                    <div class="w-full min-w-[20rem] flex flex-col items-center 400px:w-[30rem] 400px:max-w-auto">
                        <div x-data="{ hover: false }">
                            <img class="h-[30rem] w-full"
                                :src="hover ? '{{ asset('frontend/poli1-hovered.png') }}' : '{{ asset('frontend/poli1.png') }}'"
                                @mouseover="hover = true" 
                                @mouseleave="hover = false">
                        </div>
                        <a class="">
                            <div class="py-4 text-xl font-medium text-center transition-all bg-red-600 cursor-pointer w-60 rounded-3xl hover:bg-white hover:text-red-600">JOIN THE WINNERS</div>
                        </p>
                    </div>
                    <div class="w-full max-w-[30rem] flex flex-col items-center 400px:w-[30rem] 400px:max-w-auto">
                        <div x-data="{ hover: false }">
                            <img class="h-[30rem] w-full"
                                :src="hover ? '{{ asset('frontend/poli2-hovered.png') }}' : '{{ asset('frontend/poli2.png') }}'"
                                @mouseover="hover = true" 
                                @mouseleave="hover = false">
                        </div>
                        <a class="">
                            <div class="font-medium text-xl bg-[#002E80] w-60 py-4 text-center rounded-3xl border border-white transition-all hover:bg-white hover:text-[#002E80] cursor-pointer">VIEW COURSE</div>
                        </p>       
                    </div>               
                </div>
            </div>
        </div>
    </div>
    <div class="w-full m-auto max-w-[120rem]">
        <div class="px-5 pt-56 sm:px-12 md:px-20 lg:px-28">
            <div class="w-full max-w-[96rem] m-auto" data-aos="fade-up">
                <p class="text-3xl text-[#FFFFFFCC] font-bold">Notable Campaigns</p>
                <div class="mt-5 w-full rounded-2xl bg-[#FFFFFF4D] flex flex-col gap-10 items-center p-10 sm:flex-row">
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
        </div>
    </div>
    <div class="w-full m-auto max-w-[120rem]">
        <div class="px-5 pt-28 lg:pt-72 sm:px-12 md:px-20 lg:px-28">
            <div class="m-auto max-w-[96rem]">
                <div class="flex flex-wrap justify-center" data-aos="fade-up">
                    <img class="object-contain h-60 sm:h-80" src="{{ asset('frontend/floating_book.gif') }}" alt="">
                    <div class="flex flex-col justify-center text-center">
                        <p class="text-5xl font-bold tracking-widest sm:text-8xl">LATEST CLASSES</p>
                        <p class="mt-4 text-2xl tracking-wide">Learn the Ins & Outs from Joseph Lurtsema!</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-12 pt-16">
                    <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition ease hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                        <div class="w-full h-48 bg-gray-300 rounded-lg">
                        </div>
                        <div class="flex-1 mt-10 space-y-3 ">
                            <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                            <div id="class-star">
                                <div class="flex items-center gap-2">
                                    <span class="flex flex-row-reverse">
                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                    </span>
                                    <span>(000)</span> 
                                </div>
                            </div>
                            <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span>(0000)</span>
                            <Span>User reviews</Span>
                        </div>
                    </div>
                    <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition-all hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                        <div class="w-full h-48 bg-gray-300 rounded-lg">
                        </div>
                        <div class="flex-1 mt-10 space-y-3 ">
                            <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                            <div id="class-star">
                                <div class="flex items-center gap-2">
                                    <span class="flex flex-row-reverse">
                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                    </span>
                                    <span>(000)</span> 
                                </div>
                            </div>
                            <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span>(0000)</span>
                            <Span>User reviews</Span>
                        </div>
                    </div>
                    <div class="h-[45rem] flex-grow max-w-[28rem] sm:max-w-[30rem] shrink-0 w-full flex flex-col rounded-3xl bg-white shadow-md font-medium text-[#303030] p-10 transition-all hover:!scale-105 sm:hover:!scale-110" data-aos="fade-right">
                        <div class="w-full h-48 bg-gray-300 rounded-lg">
                        </div>
                        <div class="flex-1 mt-10 space-y-3 ">
                            <div class="text-3xl font-bold text-black" id="class-title">CLASS TITLE</div>
                            <div id="class-star">
                                <div class="flex items-center gap-2">
                                    <span class="flex flex-row-reverse">
                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>

                                        <svg class="text-gray-600 duration-100 cursor-pointer peer peer-hover:text-yellow-400 hover:text-yellow-400 " width="23" height="23" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                    </span>
                                    <span>(000)</span> 
                                </div>
                            </div>
                            <div class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium dolorem dicta non molestiae omnis ipsum blanditiis ad aperiam alias? Neque sequi at tempora laboriosam magni iure facere dolorum error.</div>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span>(0000)</span>
                            <Span>User reviews</Span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-20">
                    <a href="/courses">
                        <div class="text-2xl font-medium bg-[#002E80] p-4 text-center rounded-3xl border border-white hover:bg-white hover:text-[#002E80]">BROWSE COURSES</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-72" data-aos="fade-right">
        <div class="m-auto max-w-[136rem] relative overflow-hidden">
            <div class="absolute inset-0 hidden bg-right-bottom bg-no-repeat bg-contain -top-20 -right-48 -z-10 lg:block" style="background-image: url('{{ asset('frontend/lurtsema_logo.png') }}');">
            </div>
            <div class="m-auto max-w-[120rem] mb-20 xl:mb-0">
                <p class="px-5 text-5xl font-bold sm:px-12 sm:text-8xl md:px-20 lg:px-28">ABOUT</p>
            </div>
            <div class="m-auto flex justify-center items-center flex-col relative max-w-2xl rounded-2xl bg-white lg:[background-color:rgba(255,255,255,0.8)] xl:bg-transparent xl:h-auto xl:items-start lg:h-[49rem] lg:max-w-full lg:flex-row lg:w-full xl:[clip-path:polygon(0%_1%,100%_0%,100%_70%,0%_90%)]">
                <div class="relative -bottom-9 lg:shrink-0">
                    <img class="h-[30rem] w-auto object-contain sm:h-[40rem] lg:h-[65rem]" src="{{ asset('frontend/joe.png') }}" alt="">
                </div>
                <div class="flex flex-col max-w-4xl mx-10 my-20 mr-5 space-y-16 tracking-widest text-slate-600 xl:mt-80 xl:mr-0">
                    <p class="text-xl sm:text-3xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis fugiat laboriosam expedita suscipit odio! Labore eos repellat laboriosam ut veritatis.</p>
                    <p class="text-xl sm:text-3xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, amet?</p>
                    <div class="flex justify-center mt-20">
                        <a href="">
                            <div class="text-2xl bg-[#002E80] py-4 px-6 text-center rounded-3xl text-white transition-all hover:bg-white hover:text-[#002E80] sm:text-3xl">
                                <span>LEARN MORE</span>
                                <span class="relative -top-[1px]">></span>
                            </div>
                        </a>
                    </div>                </div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-[40rem] w-full -z-10 xl:bg-white opacity-80 xl:-skew-y-6">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-72" data-aos="fade-up">
        <div class="m-auto max-w-[136rem] relative">
            <img class="absolute bottom-0 w-full" src="{{ asset('frontend/usa.png') }}" alt="">
            <div class="m-auto max-w-[106rem]">
                <div class="h-[30rem] w-full rounded-tl-[4rem] rounded-tr-[4rem] u-bg-contact sm:h-[47rem]">
                    <div class="p-20 space-y-10">
                        <div class="flex flex-col items-center gap-10 sm:flex-row">
                            <div class="flex-1 text-2xl font-bold sm:text-4xl">
                                PREPARED TO BE CAMPAIGN READY?
                            </div>
                            <div class="flex justify-end flex-1 gap-10">
                                <a href="">
                                    <img class="object-contain h-10 sm:h-14" src="{{ asset('frontend/facebook.png') }}" alt="">
                                </a>
                                <a href="">
                                    <img class="object-contain h-10 sm:h-14" src="{{ asset('frontend/ig.png') }}" alt="">
                                </a>
                                <a href="">
                                    <img class="object-contain h-10 sm:h-14" src="{{ asset('frontend/youtube.png') }}" alt="">
                                </a>
                                <a href="">
                                    <img class="object-contain h-10 sm:h-14 filter brightness-0 invert" src="{{ asset('frontend/tiktok.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="mt-15 sm:m-0">
                            <a class="p-4 text-2xl font-medium bg-red-600 rounded-full hover:bg-white hover:text-red-600" href="">
                                CALL NOW!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
