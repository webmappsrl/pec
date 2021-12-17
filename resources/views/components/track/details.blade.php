@props(['track'])
@php
    $classes = 'text-secondary uppercase border-b border-gray-300 border-solid w-full text-center pt-4 pb-2 tab-nav-link'
@endphp
<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'details' }" id="tab_wrapper">
    <!-- The tabs navigation -->
    <nav class="map-detail-tab grid grid-cols-2">
        <a class="{{$classes}}" :class="{ 'active': tab === 'details' }" @click.prevent="tab = 'details'; window.location.hash = 'details'" href="#">Dettagli tecnici</a>
        <a class="{{$classes}}" :class="{ 'active': tab === 'relatedpois' }" @click.prevent="tab = 'relatedpois'; window.location.hash = 'relatedpois'" href="#">Punti di interesse</a>
    </nav>
  
    <!-- The tabs content -->
    <div x-show="tab === 'details'">
        Lorem ipsum dettagli tecnici.
     </div>
     <div x-show="tab === 'relatedpois'">
        Lorem ipsum Punti di interesse.
     </div>
</div>