@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full px-3 py-1 border rounded-full
focus:border-transparent focus:outline-none focus:ring-2 focus:ring-primary']) !!}>