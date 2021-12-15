@props(['active' => false])

@php
    $classes = 'block text-left px-6 py-3 text-sm leading-6 bg-primary text-white hover:bg-primary-light focus:bg-primary-light hover:text-primary focus:text-primary';   
    
    if ($active) $classes .= 'menu-item-selected';
@endphp

<a {{ $attributes(['class'=> $classes]) }}>{{ $slot }}</a>