<?php

use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use App\Models\Announcement;
use App\Models\Courses;

new class extends Component {

    public $course;
    public $course_id;
    public $announcements;
    public $course_title;
    #[Validate('required|min:3')] 
    public $description;
    
    public function mount()
    {
        $this->course_id = request()->route('id');
        $this->course = Courses::find($this->course_id);
        $this->course_title = $this->course->title;
        $this->announcements = $this->course->announcements()->get();
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

    public function deleteAnnouncement($id)
    {
        Announcement::find($id)->delete();
        $this->announcements = $this->course->announcements()->get();
    }

    public function editAnnouncement($id, $description)
    {
        if(empty($description)) {
            $this->deleteAnnouncement($id);
        } else {
            Announcement::find($id)->update([
                'description' => $description
            ]);
            $this->announcements = $this->course->announcements()->get();
        }

        $this->dispatch('success', id: $id);
    }
}; ?>

<div class="">
    <x-text-back-link href="{{ route('instructor-courses') }}" />
    <form wire:submit='addAnnouncement'>
        <div class="grid max-w-4xl grid-cols-2 p-5 mx-auto gap-x-8 gap-y-4 rounded-xl">
            <div class="col-span-2">
                <label class="text-2xl font-semibold text-gray-700">
                    {{$course_title}}
                </label>
            </div>
            <div class="col-span-2">
                <x-input-label for="first_name" :value="__('Add Announcement')" />
                <x-textarea wire:model="description" id="description" name="description" type="text" class="block w-full mt-4" autofocus autocomplete="description" />
                <x-input-error class="mt-4" :messages="$errors->get('description')" />
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
            <div class="mt-4 space-y-4">
                @foreach ($announcements as $announcement)
                    <div 
                        class="flex items-center gap-4" 
                        x-data="{ 
                            isEditing: false, 
                            id: @js($announcement->id),
                            data: @js($announcement->description),
                            originalData: @js($announcement->description),
                            closeEdit() {
                                this.data = this.originalData;
                                this.isEditing = false;
                            },
                            saveEdit() {
                                $wire.editAnnouncement(this.id, this.data);
                                this.originalData = this.data;
                                this.isEditing = false;
                            },
                            focusTextArea() {
                                this.isEditing = true;
                                this.$nextTick(() => this.$refs.textarea.focus());
                            },
                            deleteAnnouncement() {
                                $wire.deleteAnnouncement(this.id)
                            }
                        }"
                        wire:key="announcement-{{ $announcement->id }}"
                        x-transition
                        wire:ignore
                        x-ref="parentContainer"
                    >
                        <div 
                            x-show="!isEditing"
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-md"
                        >
                            <span x-html="data.replace(/\n/g, '<br>')"></span>
                        </div>
                        
                        <textarea 
                            class="w-full border-gray-300 rounded-md shadow-sm h-28 focus:ring-0 focus:outline-none focus:border-blue-400"
                            x-show="isEditing"
                            x-model="data"
                            x-ref="textarea"
                        ></textarea>

                        <div >
                            <div
                                class="flex items-center gap-2" 
                                x-show="!isEditing"
                            >
                                {{-- Edit --}}
                                <button x-on:click="focusTextArea">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-500 size-6 hover:opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                </button>
                                {{-- Delete --}}
                                <button x-on:click="deleteAnnouncement()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 size-6 hover:opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </div>
                            <div 
                                class="flex items-center gap-2" 
                                x-show="isEditing"
                            >
                                {{-- Save Edit  --}}
                                <button 
                                    x-on:click="saveEdit"
                                >
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-500 size-6 hover:opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </button>
                                {{-- Cancel Edit --}}
                                <button x-on:click="closeEdit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 size-6 hover:opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ id: @js($announcement->id), showSuccses: false }">
                        <span 
                            class="text-green-500" 
                            x-on:success.window="
                                if($event.detail.id == id){
                                    showSuccses = true; 
                                    setTimeout(() => showSuccses = false, 3500)
                                } return;
                            "
                            x-show="showSuccses"
                            x-transition
                            x-cloak
                        >
                            Saved
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
