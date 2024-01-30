@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-transparent focus:border-transparent focus:ring-0 bg-gray-100 rounded-md']) !!}>
