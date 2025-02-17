<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Courses;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Volt\Component;

new
#[Layout('layouts.app')]
#[Title('Campaigns USA | Add Course')]
class extends Component {
    
    use WithFileUploads;

    public $title ='';
    public $price ='';
    public $description = '';
    public $thumbnail;
    public $introduction_video;
    
    public function addCourse()
    {
        $thumbnail = $this->thumbnail;
        
        $uuid = substr(Str::uuid()->toString(), 0, 8);
        $file_name = $uuid . '.' . $thumbnail->getClientOriginalExtension();
        $img_path = url('images/courses/thumbnail/' . $file_name);
        $thumbnail->storePubliclyAs('images/courses/thumbnail', $file_name, 'public');
        
        $id = Courses::insertGetId([
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail_url' => $img_path,
            'created_by' => auth()->user()->id,
            'created_at' => date('Y-m-d'),
        ]);

        $this->redirect(route('instructor-courses-edit', $id), navigate: true);
    }
}; ?>

<div class="p-8 space-y-4">
    <x-text-back-link href="{{ route('instructor-courses') }}" />
    <form wire:submit="addCourse">
        <div class="grid max-w-4xl grid-cols-2 p-5 mx-auto gap-x-8 gap-y-4 rounded-xl">
            <div class="col-span-2">
                <x-input-label class="font-semibold" :value="__('Add Course')" />
            </div>
            <div class="col-span-2">
                <x-input-label for="first_name" :value="__('Title')" />
                <x-text-input wire:model="title" id="title" name="title" type="text" class="block w-full mt-1" required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div class="col-span-2" wire:ignore>
                <x-input-label for="trix" :value="__('Overview')" />
                <div class="mt-1">                    
                    <trix-editor
                    class="py-5 mt-2 border border-gray-300 rounded-lg shadow-sm px-7 focus:border-blue-400 trix"
                    x-data
                        x-on:trix-change="$dispatch('input', event.target.value)"
                        x-ref="trix"
                        wire:model.debounce.60s="description"
                        wire:key="uniqueKey"
                    ></trix-editor>
                </div>
            </div>
            <div>
                <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                <x-text-input wire:model="thumbnail" id="thumbnail" name="thumbnail" type="file" class="block w-full p-2 mt-1 border" required autofocus autocomplete="thumbnail" />
                <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
            </div>
            <div>
                <x-input-label for="introduction_video" :value="__('Introduction Video')" />
                <x-text-input wire:model="introduction_video" id="introduction_video" name="introduction_video" type="file" class="block w-full p-2 mt-1 border" autofocus autocomplete="introduction_video" />
                <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
            </div>

            <div>
                <div class="max-w-3xl mx-auto mt-8">
                    <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
</div>
