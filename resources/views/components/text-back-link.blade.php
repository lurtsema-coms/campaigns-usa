<a class="inline-block" wire:navigate {{ $attributes }}>
    <div class="flex items-center gap-2 font-medium text-sky-600 hover:cursor-pointer hover:opacity-70">
        <span>{{ $slot->isEmpty() ? 'Back to Home' : $slot }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </div>
</a>