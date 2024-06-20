@extends('layouts.frontend')

@section('main-content')
    <div class="container mx-auto py-16">
        <div class="w-full flex flex-col items-center space-y-8">
            <p class="text-4xl text-center font-bold">EXPLORE BY TOPIC</p>
            <p class="text-xl text-center max-w-2xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
        </div>
        <livewire:frontend.courses />
    </div>
@endsection