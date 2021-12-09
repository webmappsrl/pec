@props(['name'])

@php
    $classes = 'pl-4'; 
@endphp

@if ($name == 'down-arrow')
    <img {{$attributes(['class' => $classes])}} src="{{asset('images/chevron-down.png')}}" alt="down arrow" class="" style="display:none;">
@endif
@if ($name == 'up-arrow')
    <img {{$attributes(['class' => $classes])}} src="{{asset('images/chevron-up.png')}}" alt="up arrow" class="" style="display:none;">
@endif