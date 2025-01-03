<?php

use Livewire\Attributes\Title;
use App\Traits\CartActions;
use App\Models\User;
use App\Models\Courses;
use Livewire\Attributes\Layout;
use Illuminate\View\View;
use Livewire\Volt\Component;


new
#[Layout('layouts.frontend.app')] 
class extends Component {

    use CartActions;

    public $user_cart;
    public $course;
    public $title;
    public $cart_items;
    
    public function mount(Courses $course, int $id)
    {
        $this->user_cart = auth()->user() ? explode(",", auth()->user()->cart) : [];
        $this->course = $course->find($id);
    }

    public function rendering(View $view): void
    {
        $course_title = $this->course->title;
        $view->title("Campaigns USA | $course_title");
    }

    public function toggleItem($item_id)
    {
        if (Auth::check()) {
            $this->cart_items = $this->toggleToCart($item_id);
            $this->user_cart = $this->cart_items;
            $this->dispatch('cart-updated');
        } else {
            session()->flash('cart_message', 'Please login to add items to cart');
            $this->redirect('/login', navigate: true);
        }
    }

    public function addItem($item_id)
    {
        if (Auth::check()) {
            $this->cart_items = $this->addToCart($item_id);
            $this->dispatch('cart-updated');
            $this->redirect(route('cart'), navigate: true);
        } else {
            session()->flash('cart_message', 'Please login before enrolling');
            $this->redirect('/login', navigate: true);
        }
    }
}; ?>


<div class="px-5 my-12">
    <div class="p-5 mx-auto bg-white sm:p-10 rounded-xl max-w-7xl ">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-col gap-4 lg:flex-row">
                <a href="{{ route('courses_new') }}" wire:navigate>
                    <div class="flex items-center justify-center w-10 bg-white border rounded-md h-9 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                          </svg>
                    </div>
                </a>
                <div class="">
                    <div class="flex flex-col gap-2">
                        <p class="max-w-lg text-lg font-medium">{{ $course->title }}</p>
                        <div class="flex gap-4">
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    38 lessons
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    4h 30min
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                                <span class="mt-1 text-gray-600">
                                    4.1 (126 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <div 
                    x-data="{
                        copyNotification: false,
                        copyToClipboard() {
                            this.copyNotification = true;
                            setTimeout(() => this.copyNotification = false, 3000);
                        }
                    }" 
                    class="relative z-0 flex items-center"
                >
                    <button x-clipboard="{{ Request::url() }}" @click="copyToClipboard();" class="flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-md text-dark hover:bg-neutral-100 group">
                        <svg x-show="!copyNotification" class="stroke-current size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>                  
                        <svg x-show="copyNotification" class="text-green-500 stroke-current size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" /></svg>
                    </button>
                </div>

                <button 
                    class="flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-md text-dark hover:bg-neutral-100 group {{ in_array($course->id, $user_cart) ? 'bg-gradient-to-r from-red-500 to-red-500/80' : '' }}"
                    wire:click="toggleItem({{ $course->id }})"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="{{ in_array($course->id, $user_cart) ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 {{ in_array($course->id, $user_cart) ? 'text-white' : '' }}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                </button>
            
                <button class="flex items-center gap-2 px-3 py-2 text-white rounded-md bg-slate-600 hover:bg-slate-700"
                    wire:click="addItem({{ $course->id }})"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    Enroll Now
                </button>
            </div>
        </div>

       <div class="flex flex-col gap-8 mt-8 lg:flex-row">
            <div 
                x-data="{activeSection: 'overview'}"
                class="flex-1 max-w-4xl"
            >
                <div class="relative w-full mb-8 overflow-hidden h-96 rounded-xl">
                    <img class="object-cover w-full h-full" src="{{ $course->thumbnail_url }}" alt="">
                </div>
                <div class="flex flex-wrap gap-4 mb-4">
                    <button :class="`${activeSection == 'overview' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'overview'">
                        Overview
                    </button>
                    <button :class="`${activeSection == 'author' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'author'">
                        Author
                    </button>
                    <button :class="`${activeSection == 'announcements' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'announcements'">
                        Announcements
                    </button>
                    <button :class="`${activeSection == 'comments' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-400'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'comments'">
                        Comments
                    </button>
                </div>

                <div>
                    <div 
                        x-show="activeSection == 'overview'"
                        class="w-full h-auto p-6 space-y-4 border border-gray-300 rounded-md"
                    >
                        <div class="description">
                            <p>{!! $course->description !!}</p>
                        </div>
                    </div>
                    <div 
                        x-show="activeSection == 'author'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">About the Author</p>
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('frontend/campaign1-modal.png') }}" alt="Author" class="object-cover w-16 h-16 rounded-full">
                            <div>
                                <p class="text-lg font-semibold">John Doe</p>
                                <p class="text-sm text-gray-600">Senior Software Engineer at XYZ Inc.</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700">
                            John has over 10 years of experience in web development and has worked with top companies like Google and Facebook. He specializes in full-stack development and has a passion for teaching.
                        </p>
                    </div>
                    <div 
                        x-show="activeSection == 'announcements'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">Announcements</p>
                    </div>
                    <div 
                        x-show="activeSection == 'comments'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-medium text-dark">Comments</p>
                        <div>
                            @role('user')

                            <!-- Textarea -->
                            <div class="relative">
                                    <textarea id="hs-textarea-ex-1" class="block w-full p-4 pb-12 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Add a comment..."></textarea>
                            
                                <!-- Toolbar -->
                                <div class="absolute p-2 bg-white bottom-px inset-x-px rounded-b-md">
                                <div class="flex items-center justify-end">
                            
                                    <!-- Button Group -->
                                    <div class="flex items-center gap-x-1">
                                        <!-- Send Button -->
                                        <button type="button" class="inline-flex items-center justify-center text-white bg-blue-600 rounded-lg shrink-0 size-8 hover:bg-blue-500 focus:z-10 focus:outline-none focus:bg-blue-500">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"></path>
                                            </svg>
                                        </button>
                                        <!-- End Send Button -->
                                    </div>
                                    <!-- End Button Group -->
                                </div>
                                </div>
                                <!-- End Toolbar -->
                            </div>
                            @endrole
                            <!-- End Textarea -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-sm">
                <div class="w-full border border-gray-300 shrink-0 h-96 rounded-xl">
                    <div class="px-6 py-4">
                        <p class="font-medium text-dark">Course Content</p>
                    </div>
                    <div class="px-6 py-4 border-t border-b">
                        <p class=" text-dark">01: Intro</p>
                    </div>
                </div>
                <div>
                    <!-- Component: Detailed Basic -->
                    <div class="flex flex-col items-center gap-2 mt-8">
                        <!-- Title -->
                        <h4 class="font-medium text-dark">Customer reviews</h4>
                        <!-- Rating -->
                        <span class="flex items-center gap-4 text-sm rounded text-slate-500">
                        <span class="flex gap-1 text-amber-400" role="img" aria-label="Rating: 4 out of 5 stars">
                            <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                            </span>
                            <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                            </span>
                            <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                            </span>
                            <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                            </svg>
                            </span>
                            <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            </span>
                        </span>
                        <span>4.1 out 5</span>
                        </span>
                        <!-- Helper text -->
                        <span class="text-xs leading-6 text-slate-400">based on 147 user ratings</span>
                        <!-- Detailed rating -->
                        <span class="flex flex-col w-full gap-4 pt-6">
                        <span class="flex items-center w-full gap-2">
                            <label id="p03e-label" for="p03e" class="mb-0 text-xs text-center w-9 shrink-0 text-slate-500"> 5 star</label>
                            <progress aria-labelledby="p03e-label" id="p03e" max="100" value="75" class="block h-3 w-full overflow-hidden rounded bg-slate-100 [&::-webkit-progress-bar]:bg-slate-100 [&::-webkit-progress-value]:bg-amber-400 [&::-moz-progress-bar]:bg-amber-400">75%</progress>
                            <span class="text-xs font-bold w-9 text-slate-700">112 </span>
                        </span>
                        <span class="flex items-center w-full gap-2">
                            <label id="p03e-label" for="p03e" class="mb-0 text-xs text-center w-9 shrink-0 text-slate-500"> 4 star</label>
                            <progress aria-labelledby="p03e-label" id="p03e" max="100" value="28" class="block h-3 w-full overflow-hidden rounded bg-slate-100 [&::-webkit-progress-bar]:bg-slate-100 [&::-webkit-progress-value]:bg-amber-400 [&::-moz-progress-bar]:bg-amber-400">75%</progress>
                            <span class="text-xs font-bold w-9 text-slate-700">17 </span>
                        </span>
                        <span class="flex items-center w-full gap-2">
                            <label id="p03e-label" for="p03e" class="mb-0 text-xs text-center w-9 shrink-0 text-slate-500"> 3 star</label>
                            <progress aria-labelledby="p03e-label" id="p03e" max="100" value="18" class="block h-3 w-full overflow-hidden rounded bg-slate-100 [&::-webkit-progress-bar]:bg-slate-100 [&::-webkit-progress-value]:bg-amber-400 [&::-moz-progress-bar]:bg-amber-400">75%</progress>
                            <span class="text-xs font-bold w-9 text-slate-700">12 </span>
                        </span>
                        <span class="flex items-center w-full gap-2">
                            <label id="p03e-label" for="p03e" class="mb-0 text-xs text-center w-9 shrink-0 text-slate-500"> 2 star</label>
                            <progress aria-labelledby="p03e-label" id="p03e" max="100" value="8" class="block h-3 w-full overflow-hidden rounded bg-slate-100 [&::-webkit-progress-bar]:bg-slate-100 [&::-webkit-progress-value]:bg-amber-400 [&::-moz-progress-bar]:bg-amber-400">75%</progress>
                            <span class="text-xs font-bold w-9 text-slate-700">2 </span>
                        </span>
                        <span class="flex items-center w-full gap-2">
                            <label id="p03e-label" for="p03e" class="mb-0 text-xs text-center w-9 shrink-0 text-slate-500"> 1 star</label>
                            <progress aria-labelledby="p03e-label" id="p03e" max="100" value="10" class="block h-3 w-full overflow-hidden rounded bg-slate-100 [&::-webkit-progress-bar]:bg-slate-100 [&::-webkit-progress-value]:bg-amber-400 [&::-moz-progress-bar]:bg-amber-400">75%</progress>
                            <span class="text-xs font-bold w-9 text-slate-700">4 </span>
                        </span>
                        </span>
                    </div>
                    <!-- End Detailed Basic -->
                </div>
            </div>
       </div>
    </div>
</div>

{{-- @script
<script>
    (function () {
      function textareaAutoHeight(el, offsetTop = 0) {
        el.style.height = 'auto';
        el.style.height = `${el.scrollHeight + offsetTop}px`;
      }
  
      (function () {
        const textareas = [
          '#hs-textarea-ex-1'
        ];
  
        textareas.forEach((el) => {
          const textarea = document.querySelector(el);
          const overlay = textarea.closest('.hs-overlay');
  
          if (overlay) {
            const { element } = HSOverlay.getInstance(overlay, true);
  
            element.on('open', () => textareaAutoHeight(textarea, 3));
          } else textareaAutoHeight(textarea, 3);
  
          textarea.addEventListener('input', () => {
            textareaAutoHeight(textarea, 3);
          });
        });
      })();
    })()
  </script>
@endscript --}}