@props(['active' => false])

@php
    $classes = 'block text-left px-6 py-3 text-sm leading-6 bg-white md:bg-primary text-primary md:text-white md:hover:bg-primary-light md:focus:bg-primary-light md:hover:text-primary md:focus:text-primary';   
    
    if ($active) $classes .= 'menu-item-selected';
@endphp

<a {{ $attributes(['class'=> $classes]) }}>{{ $slot }}</a>