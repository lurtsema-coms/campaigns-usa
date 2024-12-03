<?php

use App\Models\Courses;
use Livewire\Volt\Component;

new class extends Component {
    
    public $search = '';
    
    public function with() : array
    {
        return [
            'courses' => $this->loadCourses()
        ];
    }

    public function loadCourses()
    {  
        return Courses::paginate(10);
    }
}; ?>

<div class="space-y-8">
    <div class="flex flex-col justify-between gap-4 md:flex-row">
        <x-button-link href="{{ route('instructor-courses-add') }}">
            Add Course
        </x-button-link>
        <x-form.text-input type="search" placeholder="Search..."></x-form.text-input>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Thumbnail
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Last Update
                    </th>
                    <th scope="col" class="px-6 py-3 text-sm tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($courses as $course)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            <img class="object-contain w-full h-28" src="{{ $course->thumbnail_url }}" alt="">
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            {{ Illuminate\Support\Str::limit($course->title, 50) }}
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            {{ $course->price }}
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            {{ $course->created_at }}
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            {{ $course->updated_at }}
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                123
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
