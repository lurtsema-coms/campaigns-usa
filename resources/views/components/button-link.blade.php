<a class="flex" href="{{ $href }}" wire:navigate>
    <div {{ $attributes->merge(['class' => 'text-sm text-white/95 rounded-lg h-9 flex items-center justify-center px-4 hover:opacity-70']) }} {{ $attributes }}>
        {{ $slot }}
    </div>
</a>