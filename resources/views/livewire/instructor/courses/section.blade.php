<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Courses;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Volt\Component;

new
#[Layout('layouts.app')]
#[Title('Campaigns USA | Manage Section')]
class extends Component {

  
}; ?>

<div>
    <div class="flex gap-8">
        <div class="w-full max-w-sm p-8 bg-[#0e2b3f]">
            <livewire:instructor.components.setting />
        </div>
        <div class="w-full py-8 pr-8">
            <form wire:submit="">
                <div class="w-full max-w-4xl mx-auto">
                    <div>
                        <x-input-label for="first_name" :value="__('Section Title')" />
                        <x-text-input wire:model="title" id="title" name="title" type="text" class="block w-full mt-2" required autofocus autocomplete="title" />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div class="mt-4 text-right">
                        <x-primary-button type="submit">{{ __('Create') }}</x-primary-button>
                    </div>
                </div>

                <div class="w-full max-w-4xl mx-auto mt-8">
                    <div>
                        <x-input-label for="first_name" :value="__('Section')" class="mb-2" />
                        <select name="" id="" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:outline-none focus:border-blue-400">
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div>

                    </div>
                    <div class="mt-4">
                        <x-input-label for="first_name" :value="__('Lesson Title')" />
                        <x-text-input wire:model="title" id="title" name="title" type="text" class="block w-full mt-2" required autofocus autocomplete="title" />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="introduction_video" :value="__('Video')" />
                        <x-text-input wire:model="introduction_video" id="introduction_video" name="introduction_video" type="file" class="block w-full p-2 mt-2 border" autofocus autocomplete="introduction_video" />
                        <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
                    </div>
                    <div class="mt-4 text-right">
                        <x-primary-button type="submit">{{ __('Create') }}</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
