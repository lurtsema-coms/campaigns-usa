<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="space-y-8">
    <x-text-back-link href="{{ route('instructor-courses') }}" />
    <form action="">
        <div class="grid max-w-3xl grid-cols-2 mx-auto gap-x-8 gap-y-4">
            <div class="col-span-2">
                <x-input-label :value="__('Add Course')" />
            </div>
            <div>
                <x-input-label for="first_name" :value="__('Title')" />
                <x-text-input wire:model="first_name" id="title" name="title" type="text" class="block w-full mt-1" required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div>
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input wire:model="price" id="price" name="price" type="text" class="block w-full mt-1" required autofocus autocomplete="price" />
                <x-input-error class="mt-2" :messages="$errors->get('price')" />
            </div>
            <div class="col-span-2" wire:ignore>
                <x-input-label for="price" :value="__('Description')" />
                <div class="mt-1">                    
                    <trix-editor
                        class="mt-2 border border-gray-300 rounded-lg shadow-sm focus:border-blue-400 trix"
                        x-data
                        x-on:trix-change="$dispatch('input', event.target.value)"
                        x-ref="trix"
                        wire:model.debounce.60s="remarks"
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
                <x-input-label for="thumbnail" :value="__('Introduction Video')" />
                <x-text-input wire:model="thumbnail" id="thumbnail" name="thumbnail" type="file" class="block w-full p-2 mt-1 border" required autofocus autocomplete="thumbnail" />
                <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
            </div>
        </div>
        <div class="max-w-3xl mx-auto mt-8">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</div>
