@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-lg text-gray-800 text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
