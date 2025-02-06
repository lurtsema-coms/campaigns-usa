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
    <p class="font-bold text-blue-3 00">{{ $this->title }}</p>
    <div class="{{ request()->routeIs('instructor-courses-edit') ? 'pb-2 border-b-4 border-blue-400 font-semibold' : '' }}">
        <a href="{{ route('instructor-courses-edit', $id) }}" wire:navigate>
            Introduction
        </a>
    </div>
    <a href="">
        Announcements
    </a>
    <a href="">
        Manage Sections
    </a>
    <a href="">
        Build Quiz
    </a>
    <a href="">
        Analytics
    </a>
    <a href="">
        Visibility
    </a>
</div>
