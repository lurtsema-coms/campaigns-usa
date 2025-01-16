<?php

use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use App\Models\Announcement;
use App\Models\Courses;

new class extends Component {

    public $course_id;
    public $announcements;
    public $course_title;
    #[Validate('required|min:3')] 
    public $description;
    
    public function mount()
    {
        $this->course_id = request()->route('id');
        $course = Courses::find($this->course_id);
        $this->course_title = $course->title;
        $this->announcements = $course->announcements()->get();
    }

    public function addAnnouncement()
    {
        $this->validate();

        Announcement::create([
            'courses_id' => $this->course_id,
            'description' => $this->description,
        ]);

        session()->flash('success', "Announcement on $this->course_title successfully added");
        $this->redirect(route('instructor-courses'), navigate: true);
    }
}; ?>

<div class="space-y-8">
    <x-text-back-link href="{{ route('instructor-courses') }}" />
    <form wire:submit='addAnnouncement'>
        <div class="grid max-w-4xl grid-cols-2 p-5 mx-auto gap-x-8 gap-y-4 rounded-xl">
            <div class="col-span-2">
                <label class="text-lg font-medium text-gray-700">
                    <span class="text-gray-500">Course:</span>
                    {{$course_title}}
                </label>
            </div>
            <div class="col-span-2">
                <x-input-label for="first_name" :value="__('Add Announcement')" />
                <x-textarea wire:model="description" id="description" name="description" type="text" class="block w-full mt-1" autofocus autocomplete="description" />
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>
            <div class="col-span-2">
                <div class="flex justify-end">
                    <x-primary-button type="submit">{{ __('Add') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
    <div class="max-w-4xl p-5 mx-auto">
        @if ($announcements->isEmpty())
            <x-input-label for="first_name" :value="__('No announcements have been added yet...')" />
        @else
            <x-input-label for="first_name" :value="__('Recent Announcements')" />
            @foreach ($announcements as $announcement)
                <p>{{ $announcement->description }}</p>
            @endforeach
        @endif
    </div>
</div>
