<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden bg-white rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">
                            Welcome, {{ Auth::user()->first_name }} 🎉
                        </h1>
                        <p class="text-gray-600">
                            Here’s a quick overview of your activity.
                        </p>
                    </div>
                    <div class="grid gap-8 sm:grid-cols-2 xl:grid-cols-3">
                        <div class="overflow-hidden bg-white border rounded-lg shadow">
                            <div class="p-5">
                              <div class="flex items-center">
                                <div class="shrink-0">
                                  <svg class="size-10 text-cyan-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 0 1-2.031.352 5.988 5.988 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971Zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 0 1-2.031.352 5.989 5.989 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971Z" />
                                  </svg>
                                </div>
                                <div class="flex-1 w-0 ml-5">
                                  <dl>
                                    <dt class="font-semibold text-gray-600 truncate text-md">Courses you’ve created</dt>
                                    <dd>
                                      <div class="text-3xl font-medium text-gray-900">7</div>
                                    </dd>
                                  </dl>
                                </div>
                              </div>
                            </div>
                            <div class="px-5 py-3 bg-gray-50">
                              <div class="text-sm">
                                <a wire:navigate href="{{ route('instructor-courses') }}" class="font-medium text-cyan-700 hover:text-cyan-900">View all</a>
                              </div>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white border rounded-lg shadow">
                            <div class="p-5">
                              <div class="flex items-center">
                                <div class="shrink-0">
                                    <svg class="size-10 text-cyan-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                <div class="flex-1 w-0 ml-5">
                                  <dl>
                                    <dt class="font-semibold text-gray-600 truncate text-md">No. of students</dt>
                                    <dd>
                                      <div class="text-3xl font-medium text-gray-900">80</div>
                                    </dd>
                                  </dl>
                                </div>
                              </div>
                            </div>
                            <div class="px-5 py-3 bg-gray-50">
                              <div class="text-sm">
                                <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900" disabled>View all</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
