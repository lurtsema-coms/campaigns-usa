@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 rounded-md shadow-sm focus:ring-0 focus:outline-none focus:border-blue-400']) !!}>
