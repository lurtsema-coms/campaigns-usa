<?php

use Livewire\Attributes\Title;
use App\Traits\CartActions;
use App\Models\User;
use App\Models\Like;
use App\Models\Courses;
use App\Models\Comment;
use App\Models\Announcement;
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
    public $comment; 
    public $perPage = 10;
    public $announcements;
    public $instructor_announcements;
    public $editingCommentId = null;
    public $edit_comment = '';

    
    public function mount(Courses $course, int $id)
    {
        $this->user_cart = auth()->user() ? explode(",", auth()->user()->cart) : [];
        $this->course = $course->find($id);
        $this->instructor_announcements = Announcement::where('courses_id', $id)->get();
    }

    public function getCommentsProperty()
    {
        return Comment::where('courses_id', $this->course->id)
            ->latest()
            ->whereNull('deleted_at')
            ->with('creator')
            ->take($this->perPage)
            ->get();
    }

    public function loadMore()
    {
        $this->perPage += 10; 
        $this->announcements = $this->course->announcements;
        $this->dispatch('cart-updated');
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

    public function submitComment()
    {
        if (auth()->check()) {
            $this->validate([
                'comment' => 'required|string|max:500',
            ]);
            $newComment = Comment::create([
                'courses_id' => $this->course->id,
                'comment' => $this->comment,
                'created_by' => auth()->id(),
            ]);

            $this->dispatch('cart-updated');
            session()->flash('success', 'Your comment has been posted');
            $this->reset('comment'); 
        } else {
            session()->flash('error', 'Please log in to post a comment.');
        }
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        if ($comment->created_by === auth()->id()) {
            $comment->delete();
            session()->flash('success', 'Comment deleted successfully.');
        } else {
            session()->flash('error', 'You are not authorized to delete this comment.');
        }
    }

    public function editComment($commentId)
    {
        $this->editingCommentId = $commentId;

        $comment = Comment::findOrFail($commentId);

        if ($comment) {
            $this->edit_comment = $comment->comment;
        }
    }

    public function cancelEdit()
    {
        $this->editingCommentId = null;
    }

    public function updateComment()
    {
        if (auth()->check()) {
            $this->validate([
                'edit_comment' => 'required|string|max:1000'
            ]);
        
        $comment = Comment::find($this->editingCommentId);
        $comment->comment = $this->edit_comment;
        $comment->save();

        $this->dispatch('cart-updated');
        session()->flash('success', 'Your comment has been edited');
        $this->editingCommentId = null;
        $this->edit_comment = '';
        } else {
            session()->flash('error', 'Please log in to post a comment.');
        }
    }

    public function toggleLike($commentId)
    {
        $comment = Comment::find($commentId);
        $userId = Auth::id();

        if ($comment->isLikedByUser($userId)) {
            // If already liked, unlike
            $comment->like()->where('user_id', $userId)->delete();
        } else {
            // If not liked, like
            $comment->like()->create(['user_id' => $userId]);
        }
    }

}; ?>


<div class="bg-white">
    <img class="absolute object-cover w-full h-96 -z-10 opacity-5" src="{{ $course->thumbnail_url }}" alt="">
    <div class="px-5 py-32 mx-auto rounded-xl max-w-8xl">
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
                        <p class="max-w-lg text-lg font-semibold sm:text-xl">{{ $course->title }}</p>
                        <div class="flex gap-4">
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-sky-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="text-gray-600">
                                    38 lessons
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="text-gray-600">
                                    4h 30min
                                </span>
                            </div>
                            <div class="flex items-center gap-1.5 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                                <span class="text-gray-600">
                                    4.1 (126 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Cart --}}
            {{-- <div class="flex items-center gap-2">
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
                </div>

                @if (auth()->check() && auth()->user()->role == 'student')
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
                @endif
            </div> --}}
        </div>

        <div class="flex flex-col gap-8 mt-8 lg:justify-center lg:flex-row">
            <div 
                x-data="{activeSection: 'overview'}"
                class="flex-1 max-w-4xl"
            >
                <div x-data="{ open: false }">
                    <!-- Thumbnail with Play Button -->
                    <div class="relative w-full mb-8 overflow-hidden h-96 lg:h-[26rem] rounded-xl">
                        <img class="object-cover w-full h-full -z-10 brightness-75" src="{{ $course->thumbnail_url }}" alt="">
                
                        <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                            <button @click="open = true"
                                class="z-20 flex flex-row items-center justify-center w-16 h-16 gap-2 rounded-full shadow-lg bg-gray-400/80 hover:cursor-pointer hover:drop-shadow-xl hover:bg-green-600 hover:scale-105">
                                <svg class="text-slate-200 hover:scale-125" height="2rem" width="2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <path d="M96 64l256 192L96 448V64z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                
                    <!-- Video Popup Modal -->
                    <div x-show="open" class="fixed inset-0 z-50 flex w-full h-full bg-black/40">
                        <!-- Close Button -->
                        <button @click="open = false" class="absolute right-0 text-gray-600 -top-5 hover:text-gray-900">
                            &times;
                        </button>
                
                        <!-- Video without animation on modal, only animation on video -->
                        <div class="flex items-center justify-center h-full p-4 m-auto">
                            <video x-show="open" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-75"
                                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                                controls autoplay width="900" class="h-auto m-auto rounded-lg" x-on:click.outside="open = false;">
                                <source src="{{ $course->video_url }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4 mb-4">
                    <button :class="`${activeSection == 'overview' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-600'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'overview'">
                        Overview
                    </button>
                    <button :class="`${activeSection == 'author' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-600'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'author'">
                        Author
                    </button>
                    <button :class="`${activeSection == 'announcements' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-600'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'announcements'">
                        Announcements
                    </button>
                    <button :class="`${activeSection == 'comments' ? 'bg-slate-100 text-slate-800 font-bold rounded-xl' : 'text-gray-600'} px-4 py-2 hover:text-gray-800`" @click="activeSection = 'comments'">
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
                        <p class="font-semibold text-dark">About the Author</p>
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('frontend/campaign1-modal.png') }}" alt="Author" class="object-cover w-16 h-16 rounded-full">
                            <div>
                                <p class="text-lg font-semibold">John Doe</p>
                                <p class="text-sm text-gray-600">Senior Software Engineer at XYZ Inc.</p>
                            </div>
                        </div>
                        <p class="text-gray-700 ">
                            John has over 10 years of experience in web development and has worked with top companies like Google and Facebook. He specializes in full-stack development and has a passion for teaching.
                        </p>
                    </div>
                    <div 
                        x-show="activeSection == 'announcements'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                        <p class="font-semibold text-dark">Announcements 📢</p>
                        @if (!$instructor_announcements->isEmpty())
                            @foreach ($instructor_announcements as $announcement)
                                <div class="relative p-4 border border-gray-300 rounded-md announcements">
                                    <p class="text-gray-700 " wire:key="announcement-{{ $announcement->id }}">
                                        {!! nl2br(e($announcement->description)) !!}
                                    </p>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div 
                        x-show="activeSection == 'comments'"
                        class="w-full h-auto p-6 space-y-4 border rounded-md"
                    >
                    @auth
                        <p class="font-semibold text-dark">Compose Comment</p>
                        @if(auth()->user()->hasRole('student') || auth()->user()->hasRole('instructor'))
                            <div>
                                <div class="flex w-full mb-8 space-x-4">
                                    <img src="{{ asset('frontend/campaign1-modal.png') }}" alt="Author" class="object-cover w-16 h-16 rounded-full">
                                    <div class="w-full">
                                        <form wire:submit="submitComment">
                                            <textarea
                                                wire:model="comment"
                                                class="w-full p-2 border rounded-lg resize-none border-slate-600 text-md focus:outline-none focus:ring-2 focus:ring-slate-600"
                                                rows="4"
                                                placeholder="Write your comment here..."
                                            ></textarea>
                                            <button
                                                type="submit"
                                                class="w-full px-3 py-2 mt-2 text-white rounded-md bg-slate-600 hover:bg-slate-700"
                                            >
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    @if(session()->has('success'))
                                    <div class="text-green-500">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                    <div class="text-red-500">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                </div>
                            </div>
                        @endif
                    @endauth
                        <p class="font-semibold text-dark">Comment Section:</p>
                        <div class="overflow-y-auto max-h-auto scrollbar-thin scrollbar-thumb-gray scrollbar-thumb-rounded">
                            @foreach ($this->comments as $comment)
                                <div class="flex-row mb-4" wire:key="comment-{{ $comment->id }}">
                                    <div class="flex items-center space-x-4" wire:ignore>
                                        <img src="{{ asset('frontend/campaign1-modal.png') }}" alt="Author" class="object-cover w-16 h-16 rounded-full">
                                        <div>
                                            <p class="text-lg font-semibold">
                                                {{ $comment->creator ? $comment->creator->first_name . ' ' . $comment->creator->last_name : 'Unknown User' }}
                                            </p>
                                            <p class="text-sm text-gray-500 timeago" datetime="{{ $comment->created_at }} {{ config('app.timezone') }}"></p>
                                        </div>
                                    </div>
                                    <div class="pl-20">
                                        <p class="text-sm text-black" x-show="$wire.editingCommentId !== {{$comment->id}}">
                                            {{$comment->comment}}
                                        </p>
                                        <form x-show="$wire.editingCommentId == {{$comment->id}}" wire:submit.prevent="updateComment">
                                            <div class="pr-5">
                                                <textarea
                                                    wire:model="edit_comment"
                                                    class="w-full p-2 border rounded-lg resize-none border-slate-600 text-md focus:outline-none focus:ring-2 focus:ring-slate-600"
                                                    rows="4"
                                                    placeholder="Edit your comment..."
                                                ></textarea>
                                                <div class="flex gap-5">
                                                    <button
                                                        type="button"
                                                        wire:click="cancelEdit"
                                                        class="w-full px-3 py-2 mt-2 text-white rounded-md bg-slate-600 hover:bg-slate-700"
                                                    >
                                                        Cancel
                                                    </button>
                                                    <button
                                                        type="submit"
                                                        class="w-full px-3 py-2 mt-2 text-white rounded-md bg-slate-600 hover:bg-slate-700"
                                                    >
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="flex pl-20 mt-2 space-x-3" x-show="$wire.editingCommentId !== {{$comment->id}}"                                        >
                                    {{-- Like Section --}}
                                    <div class="flex space-x-1 text-red-500">
                                        <button wire:click="toggleLike({{ $comment->id }})" @guest disabled @endguest>
                                            <svg xmlns="http://www.w3.org/2000/svg" 
                                                fill="{{ auth()->check() ? ($comment->isLikedByUser(auth()->id()) ? 'currentColor' : 'none') : 'currentColor' }}" 
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" 
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                        <span>{{ $comment->like->count() }}</span>
                                    </div>


                                        @if(auth()->check() && auth()->user()->id == $comment->created_by )
                                            <div class="text-gray-500">
                                                <button wire:click="editComment({{$comment->id}})" class="hover:text-gray-900 hover:underline">
                                                    Edit
                                                </button>
                                            </div>
                                            <div class="text-gray-500">
                                                <button wire:click="deleteComment({{ $comment->id }})" class="hover:text-gray-900 hover:underline">
                                                    Delete
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            @if ($this->comments->count() >= $perPage)
                                <button
                                    wire:click="loadMore"
                                    class="px-4 py-2 text-white rounded-md bg-slate-600 hover:bg-slate-700"
                                >
                                    More Comments
                                </button>
                            @endif
                        </div>
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
                {{-- Course Content --}}
                <div class="w-full bg-white border border-gray-300 shrink-0 rounded-xl">
                    <div class="px-6 py-4">
                        <p class="font-semibold text-dark">Course Content</p>
                    </div>
                    
                    @foreach ($course->sections as $course_section)
                        <div x-data="{ open: false }" class="border-t">
                            <button @click="open = !open" class="flex items-center justify-between w-full px-6 py-4 text-left">
                                <span class="font-semibold text-dark">{{ $course_section->title }}</span>
                                <svg class="w-5 h-5 text-gray-600 transition-transform transform" 
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div x-show="open" x-transition:enter="transition ease-out duration-300 transform" 
                                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                                class="px-6 pb-4 text-gray-700"
                            >
                                <ul class="space-y-2">
                                    @if ($course_section->lessons->isEmpty())
                                        <li class="text-center text-red-500">In progress Lessons</li>
                                    @else
                                        @foreach ($course_section->lessons as $section_lesson)
                                            <li class="text-slate-600">- {{ $section_lesson->title }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                
                <div>
                    <!-- Component: Detailed Basic -->
                    <div class="flex flex-col items-center gap-2 p-6 mt-8 bg-white border border-gray-300 rounded-xl">
                        <!-- Title -->
                        <h4 class="font-semibold text-dark">Customer Reviews</h4>
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
@script
    <script>
        const timeagoNodes = document.querySelectorAll('.timeago');
        if (timeagoNodes.length) {
            timeago.render(timeagoNodes);
        }
        
        Livewire.on('cart-updated' ,function(){
            console.log('updated')
            setTimeout(() => {
                const timeagoNodes = document.querySelectorAll('.timeago');
                if (timeagoNodes.length) {
                    timeago.render(timeagoNodes);
                }
            }, 100);
        } )
    </script>
@endscript
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