@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-400 px-4 py-2 text-black rounded-md active:border-0']) !!}>
