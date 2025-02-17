<?php

use App\Models\Courses;
use Livewire\Volt\Component;

new class extends Component {

    public $id;
    public $title;

    public function mount()
    {
        $this->id = request()->route('id');
        $this->title = Courses::find($this->id)->title;
    }
}; ?>

<div class="grid gap-4 text-lg tracking-wider text-gray-100">
    <p class="font-bold text-blue-300">{{ $this->title }}</p>
    <div class="{{ request()->routeIs('instructor-courses-edit') ? 'pb-2 border-b-4 border-blue-400 font-semibold' : '' }} hover:font-semibold hover:border-blue-400">
        <a href="{{ route('instructor-courses-edit', $id) }}" wire:navigate>
            Introduction
        </a>
    </div>
    <div class="{{ request()->routeIs('instructor-courses-add-announcement') ? 'pb-2 border-b-4 border-blue-400 font-semibold' : '' }} hover:font-semibold hover:border-blue-400">
        <a href="{{ route('instructor-courses-add-announcement' , $id) }}" wire:navigate>
            Announcements
        </a>
    </div>
    <div class="{{ request()->routeIs('instructor-courses-manage-section') ? 'pb-2 border-b-4 border-blue-400 font-semibold' : '' }} hover:font-semibold hover:border-blue-400">
        <a href="{{ route('instructor-courses-manage-section' , $id) }}" wire:navigate>
            Manage Sections
        </a>
    </div>
    <a href="">
        Build Quiz
    </a>
    <a href="">
        Analytics
    </a>
</div>
