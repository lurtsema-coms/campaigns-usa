@extends('layouts.frontend')

@section('main-content')
    <div class="container mx-auto py-16">
        <div class="w-full flex flex-col items-center space-y-8">
            <p class="text-4xl font-bold">EXPLORE BY TOPIC</p>
            <p class="text-xl text-center max-w-2xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
        </div>
        <div class="mt-44 px-5">
            {{-- Categories --}}
            <div class="flex justify-center gap-9 pb-5">
                <a class="relative group px-1" href="">
                    Laravel
                    <span class="absolute -bottom-6 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                </a>
                <a class="relative group px-1" href="">
                    Tailwind
                    <span class="absolute -bottom-6 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                </a>
                <a class="relative group px-1" href="">
                    CSS
                    <span class="absolute -bottom-6 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                </a>
                <a class="relative group px-1" href="">
                    Livewire
                    <span class="absolute -bottom-6 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                </a>
                <a class="relative group px-1" href="">
                    HTMX
                    <span class="absolute -bottom-6 left-0 w-0 transition-all h-1 bg-white group-hover:w-full"></span>
                </a>
            </div>
            {{-- Border --}}
            <div class="w-full h-1 bg-custom-border-b"></div>
            {{-- Categories Links --}}
            <div class="flex justify-center items-center flex-wrap gap-10 mt-10">
                <a href="">
                    <div class="min-w-fit max-w-72 flex-1 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400">
                        <img class="object-contain w-16" src="{{ asset('frontend/joe.png') }}" alt="">
                        <div class="space-y-2">
                            <p class="font-bold">Lorem ipsum dolor sit.</p>
                            <p class="text-xs">12 Series | 118 videos</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="min-w-fit max-w-72 flex-1 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400">
                        <img class="object-contain w-16" src="{{ asset('frontend/joe.png') }}" alt="">
                        <div class="space-y-2">
                            <p class="font-bold">Lorem ipsum dolor sit.</p>
                            <p class="text-xs">12 Series | 118 videos</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="min-w-fit max-w-72 flex-1 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400">
                        <img class="object-contain w-16" src="{{ asset('frontend/joe.png') }}" alt="">
                        <div class="space-y-2">
                            <p class="font-bold">Lorem ipsum dolor sit.</p>
                            <p class="text-xs">12 Series | 118 videos</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="min-w-fit max-w-72 flex-1 flex items-center gap-5 bg-color-blue border border-gray-700 p-4 rounded-xl hover:border-gray-400">
                        <img class="object-contain w-16" src="{{ asset('frontend/joe.png') }}" alt="">
                        <div class="space-y-2">
                            <p class="font-bold">Lorem ipsum dolor sit.</p>
                            <p class="text-xs">12 Series | 118 videos</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection