<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA - About')] 
class extends Component {
    //
}; ?>

<div>
    <main class="isolate">
        <!-- Hero section -->
        <div class="relative overflow-hidden isolate -z-10 bg-gradient-to-b from-slate-100/20">
          <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-slate-600/10 ring-1 ring-slate-50 sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
          {{-- <div class="px-6 py-24 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-8 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
              <!-- <h1 class="max-w-2xl text-5xl font-semibold tracking-tight text-gray-900 text-balance sm:text-7xl lg:col-span-2 xl:col-auto">We’re changing the way people connect</h1> -->
              <h1 class="max-w-2xl text-5xl font-semibold tracking-tight text-gray-900 text-balance sm:text-6xl lg:col-span-2 xl:col-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, officia.</h1>
              <div class="max-w-xl mt-6 lg:mt-0 xl:col-end-1 xl:row-start-1">
                <p class="text-lg font-medium text-gray-500 text-pretty sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
              </div>
              <img src="{{ asset('frontend/joe1.png') }}" alt="" class="mt-10 aspect-[5/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
            </div>
          </div> --}}
          <div class="px-5 py-24 mx-auto x-6 max-w-7xl lg:px-8">
            <div class="grid gap-16 lg:gap-2 lg:grid-cols-2" data-aos="zoom-in">
                <div class="max-w-2xl">
                    <h1 class="max-w-2xl text-5xl font-semibold tracking-tight text-gray-900 text-balance sm:text-6xl lg:col-span-2 xl:col-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, officia.</h1>
                    <p class="mt-6 text-lg font-medium text-gray-500 text-pretty sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                </div>
                <div class="flex items-center justify-center lg:justify-end">
                    <img src="{{ asset('frontend/joe1.png') }}" alt="" class="object-contain w-full max-w-lg h-[30rem] rounded-2xl">
                </div>
            </div>
          </div>
          <div class="absolute inset-x-0 bottom-0 h-24 -z-10 bg-gradient-to-t from-white sm:h-32"></div>
        </div>
    
        <!-- Timeline section -->
        <div class="px-6 mx-auto -mt-8 max-w-7xl lg:px-8">
          <div class="grid max-w-2xl grid-cols-1 gap-8 mx-auto overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
            <div>
              <time datetime="2021-08" class="flex items-center font-semibold text-slate-600 text-sm/6">
                <svg viewBox="0 0 4 4" class="flex-none mr-4 size-1" aria-hidden="true">
                  <circle cx="2" cy="2" r="2" fill="currentColor" />
                </svg>
                Aug 2021
                <div class="absolute w-screen h-px -ml-2 -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
              </time>
              <p class="mt-6 font-semibold tracking-tight text-gray-900 text-lg/8">Founded company</p>
              <p class="mt-1 text-gray-600 text-base/7">Nihil aut nam. Dignissimos a pariatur et quos omnis. Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.</p>
            </div>
            <div>
              <time datetime="2021-12" class="flex items-center font-semibold text-slate-600 text-sm/6">
                <svg viewBox="0 0 4 4" class="flex-none mr-4 size-1" aria-hidden="true">
                  <circle cx="2" cy="2" r="2" fill="currentColor" />
                </svg>
                Dec 2021
                <div class="absolute w-screen h-px -ml-2 -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
              </time>
              <p class="mt-6 font-semibold tracking-tight text-gray-900 text-lg/8">Secured $65m in funding</p>
              <p class="mt-1 text-gray-600 text-base/7">Provident quia ut esse. Vero vel eos repudiandae aspernatur. Cumque minima impedit sapiente a architecto nihil.</p>
            </div>
            <div>
              <time datetime="2022-02" class="flex items-center font-semibold text-slate-600 text-sm/6">
                <svg viewBox="0 0 4 4" class="flex-none mr-4 size-1" aria-hidden="true">
                  <circle cx="2" cy="2" r="2" fill="currentColor" />
                </svg>
                Feb 2022
                <div class="absolute w-screen h-px -ml-2 -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
              </time>
              <p class="mt-6 font-semibold tracking-tight text-gray-900 text-lg/8">Released beta</p>
              <p class="mt-1 text-gray-600 text-base/7">Sunt perspiciatis incidunt. Non necessitatibus aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.</p>
            </div>
            <div>
              <time datetime="2022-12" class="flex items-center font-semibold text-slate-600 text-sm/6">
                <svg viewBox="0 0 4 4" class="flex-none mr-4 size-1" aria-hidden="true">
                  <circle cx="2" cy="2" r="2" fill="currentColor" />
                </svg>
                Dec 2022
                <div class="absolute w-screen h-px -ml-2 -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
              </time>
              <p class="mt-6 font-semibold tracking-tight text-gray-900 text-lg/8">Global launch of product</p>
              <p class="mt-1 text-gray-600 text-base/7">Ut ipsa sint distinctio quod itaque nam qui. Possimus aut unde id architecto voluptatem hic aut pariatur velit.</p>
            </div>
          </div>
        </div>
    
        <!-- Logo cloud -->
        <div class="mx-auto mt-32 max-w-7xl sm:mt-40 sm:px-6 lg:px-8">
          <div class="relative px-6 py-24 overflow-hidden text-center bg-gray-900 shadow-2xl isolate sm:rounded-3xl sm:px-16">
            <h2 class="max-w-2xl mx-auto text-3xl font-bold tracking-tight text-white sm:text-4xl">Our students love us</h2>
            <p class="max-w-xl mx-auto mt-6 text-gray-300 text-lg/8">Aliquip reprehenderit incididunt amet quis fugiat ut velit. Sit occaecat labore proident cillum in nisi adipisicing officia excepteur tempor deserunt.</p>
            <div class="absolute right-0 -top-24 -z-10 transform-gpu blur-3xl" aria-hidden="true">
              <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
            </div>
          </div>
        </div>
    
        <!-- Content section -->
        <div class="mt-32 overflow-hidden sm:mt-40">
          <div class="px-6 mx-auto max-w-7xl lg:flex lg:px-8">
            <div class="grid max-w-2xl grid-cols-1 mx-auto gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
              <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Our Clients</h2>
                <p class="mt-6 text-gray-600 text-xl/8">Quasi est quaerat. Sit molestiae et. Provident ad dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi quidem expedita molestias quas.</p>
                <p class="mt-6 text-gray-600 text-base/7">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat. Quasi aperiam sit non sit neque reprehenderit.</p>
              </div>
              <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                <div class="flex-auto w-0 lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                  <img src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" alt="" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                </div>
                <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                  <div class="flex self-end justify-end flex-none order-first w-64 lg:w-auto">
                    <img src="https://images.unsplash.com/photo-1605656816944-971cd5c1407f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                  </div>
                  <div class="flex justify-end flex-auto w-96 lg:w-auto lg:flex-none">
                    <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&h=842&q=80" alt="" class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                  </div>
                  <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                    <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Stats -->
        <div class="px-6 mx-auto mt-32 mb-24 max-w-7xl sm:mt-40 lg:px-8">
          <div class="max-w-2xl mx-auto lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-gray-900 text-pretty sm:text-5xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, praesentium!</h2>
            <p class="mt-6 text-gray-600 text-base/7">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p>
          </div>
          <div class="flex flex-col max-w-2xl gap-8 mx-auto mt-16 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
            <div class="flex flex-col-reverse justify-between p-8 gap-x-16 gap-y-8 rounded-2xl bg-gray-50 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
              <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">250k</p>
              <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                <p class="text-lg font-semibold tracking-tight text-gray-900">Users on the platform</p>
                <p class="mt-2 text-gray-600 text-base/7">Vel labore deleniti veniam consequuntur sunt nobis.</p>
              </div>
            </div>
            <div class="flex flex-col-reverse justify-between p-8 bg-gray-900 gap-x-16 gap-y-8 rounded-2xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
              <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
              <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made over $8 billion in total revenue.</p>
                <p class="mt-2 text-gray-400 text-base/7">Eu duis porta aliquam ornare. Elementum eget magna egestas.</p>
              </div>
            </div>
            <div class="flex flex-col-reverse justify-between p-8 bg-blue-600 gap-x-16 gap-y-8 rounded-2xl sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
              <p class="flex-none text-3xl font-bold tracking-tight text-white">401,093</p>
              <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                <p class="text-lg font-semibold tracking-tight text-white">Transactions this year</p>
                <p class="mt-2 text-slate-200 text-base/7">Eu duis porta aliquam ornare. Elementum eget magna egestas. Eu duis porta aliquam ornare.</p>
              </div>
            </div>
          </div>
        </div>
      </main>
</div>
