@props(['active' => false])

@php
    $classes = 'block text-left px-6 py-3 text-sm leading-6 bg-primary text-white hover:underline focus:underline';   
    
    if ($active) $classes .= 'menu-item-selected';
@endphp

<a {{ $attributes(['class'=> $classes]) }}>{{ $slot }}</a>