@extends('layouts.frontend')

@section('main-content')
    <div class="container mx-auto py-16">
        <div class="flex sm:px-5">
            <div class="w-3/5 flex flex-col space-y-4">
                <p class="text-4xl font-bold">Lorem ipsum dolor sit.</p>
                <p class="text-xl max-w-2xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas corrupti molestias nisi minima quod ex porro similique assumenda quis maiores!</p>
                <p>stars</p>
                <p>Created by: Lorem, ipsum.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
            </div>
            <div class="w-2/5 px-10">
                <div class="sticky top-5">
                    <div class="w-full p-7 bg-white text-slate-800 rounded-md">
                        <div class="mb-8">
                            <img class="h-48 w-full object-cover" id="course-img" src="">
                        </div>
                        <div class="flex flex-col space-y-4">
                            <p class="text-xl font-bold">
                                Subscribe to CAMPAIGNS USA top courses
                            </p>
                            <p class="text-xl">30 USD</p>
                            <button class="text-center border-2 rounded-xl border-slate-300 px-3 py-2 text-xl hover:bg-slate-500 hover:text-white">Add to cart</button>
                            <button class="text-center border-2 rounded-xl border-green-600 px-3 py-2 text-xl hover:bg-green-700 hover:text-white">Subscribe to course</button>
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
<script data-navigate-once>
    document.addEventListener('livewire:navigated', () => {
        const imgElement = document.getElementById('course-img');
        if (imgElement) {
            imgElement.setAttribute('src', `https://picsum.photos/800/400?random=${Date.now()}`);
            console.log('load2');
        }
    })
</script>