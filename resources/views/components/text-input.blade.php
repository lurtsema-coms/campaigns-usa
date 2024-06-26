@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-800 focus:ring-indigo-800 rounded-md shadow-sm bg-gray-200']) !!}>
