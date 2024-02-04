@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-transparent focus:border-transparent focus:ring-0 bg-gray-200 rounded-md outline-none py-1.5 pl-3']) !!}>
