@extends('layouts.frontend')

@section('main-content')
    <div class="container py-16 mx-auto">
        <div class="flex sm:px-5">
            <div class="flex flex-col w-3/5 space-y-4">
                <p class="text-4xl font-bold">Lorem ipsum dolor sit.</p>
                <p class="max-w-2xl text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
                <p>stars</p>
                <p>Created by: Lorem, ipsum.</p>
            </div>
            <div class="w-2/5 px-10">
                <div class="sticky top-5">
                    <div class="w-full shadow-lg bg-white/95 rounded-2xl p-7 text-slate-800">
                        <div class="mb-8">
                            <img class="object-cover w-full h-48" id="course-img" src="">
                        </div>
                        <div class="flex flex-col space-y-4">
                            <p class="text-xl font-bold">
                                Subscribe to CAMPAIGNS USA top courses
                            </p>
                            <p class="text-xl">$30</p>
                            <button class="px-3 py-2 text-xl text-center border-2 rounded-xl border-slate-300 hover:bg-slate-500 hover:text-white">Add to cart</button>
                            <a href="{{ route('cart-section') }}" wire:navigate>                                
                                <button class="w-full px-3 py-2 text-xl text-center border-2 border-green-600 rounded-xl hover:bg-green-700 hover:text-white">Subscribe to course</button>
                            </a>
                            <div class="text-center text-slate-600">
                                <p class="text-sm">15-Day Money-Back Guarantee</p>
                                <p class="text-sm">Full Lifetime Access</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('livewire:navigated', () => {
        const imgElement = document.getElementById('course-img');
        if (imgElement) {
            imgElement.setAttribute('src', `https://picsum.photos/800/400?random=${Date.now()}`);
        }
    })
</script>