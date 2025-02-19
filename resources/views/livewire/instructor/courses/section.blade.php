<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Courses;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Volt\Component;
use App\Models\Section;
use App\Models\Lesson;

new
#[Layout('layouts.app')]
#[Title('Campaigns USA | Manage Section')]
class extends Component {

    public $course;
    public $section_title = '';
    public $section_id = '';
    public $lesson_title = '';

    public function mount($id)
    {
        $this->course = Courses::with('sections')->find($id);
    }

    public function addSection()
    {
        $this->validate([
            'section_title' => 'required'
        ]);
        
        Section::create([
            'courses_id' => $this->course->id,
            'title' => $this->section_title,
        ]);

        $this->dispatch('section-success', message: 'Saved.');
    }

    public function addLesson()
    {
        $this->validate([
            'section_id' => 'required',
            'lesson_title' => 'required',
        ]);

        Lesson::create([
            'section_id' => $this->section_id,
            'title' => $this->lesson_title,
        ]);

        $this->dispatch('lesson-success', message: 'Saved.');
    }
    
}; ?>

<div>
    <div class="flex gap-8">
        <div class="w-full max-w-sm p-8 bg-[#0e2b3f]">
            <livewire:instructor.components.setting />
        </div>
        <div class="w-full py-8 pr-8">
            <form wire:submit="addSection">
                <div class="w-full max-w-4xl mx-auto">
                    <div>
                        <x-input-label for="section_title" :value="__('Section Title')" />
                        <x-text-input wire:model="section_title" id="section_title" type="text" class="block w-full mt-2" autofocus autocomplete="section_title" />
                        <x-input-error class="mt-2" :messages="$errors->get('section_title')" />
                    </div>
                    <div class="mt-4 text-right">
                        <x-primary-button type="submit">{{ __('Create') }}</x-primary-button>
                        <div 
                            x-data="{showSuccess: false, message: ''}"
                            x-show="showSuccess"
                            class="mt-2 text-green-500" 
                            x-cloak
                        >
                            <span 
                                x-on:section-success.window="
                                    showSuccess = true;
                                    setTimeout(() => showSuccess = false, 3500);
                                    message = $event.detail.message;
                                "
                                x-text="message"
                            >
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <form wire:submit="addLesson">
                <div class="w-full max-w-4xl mx-auto mt-8">
                    <div>
                        <x-input-label for="first_name" :value="__('Section')" class="mb-2" />
                        <select wire:model="section_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:outline-none focus:border-blue-400">
                            <option value="" disabled selected></option>
                            @foreach ($course->sections as $section)
                                <option value="{{ $section->id }}">{{ $section->title }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('section_id')" />
                    </div>
                    <div>

                    </div>
                    <div class="mt-4">
                        <x-input-label for="first_name" :value="__('Lesson Title')" />
                        <x-text-input wire:model="lesson_title" id="lesson_title" type="text" class="block w-full mt-2"  autofocus autocomplete="lesson_title" />
                        <x-input-error class="mt-2" :messages="$errors->get('lesson_title')" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="introduction_video" :value="__('Video')" />
                        <x-text-input wire:model="introduction_video" id="introduction_video" name="introduction_video" type="file" class="block w-full p-2 mt-2 border" autofocus autocomplete="introduction_video" />
                        <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
                    </div>
                    <div class="mt-4 text-right">
                        <x-primary-button type="submit">{{ __('Create') }}</x-primary-button>
                        <div 
                            x-data="{showSuccess: false, message: ''}"
                            x-show="showSuccess"
                            class="mt-2 text-green-500" 
                            x-cloak
                        >
                            <span 
                                x-on:section-success.window="
                                    showSuccess = true;
                                    setTimeout(() => showSuccess = false, 3500);
                                    message = $event.detail.message;
                                "
                                x-text="message"
                            >
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
