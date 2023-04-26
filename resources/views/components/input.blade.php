@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-b border-gray-900 focus:border-indigo-500 focus:ring-indigo-500 text-black rounded-md shadow-sm']) !!}>
