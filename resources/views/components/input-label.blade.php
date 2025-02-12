@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-lg text-gray-700 text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
