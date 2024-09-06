<a class="flex" href="{{ $href }}" wire:navigate>
    <div {{ $attributes->merge(['class' => 'text-sm text-white/95 bg-slate-500 rounded-lg h-9 flex items-center justify-center px-4 hover:bg-slate-600']) }} {{ $attributes }}>
        {{ $slot }}
    </div>
</a>