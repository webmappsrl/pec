@props(['link'])
@php
    if ($link) {
        $linkto = "https://3.app.geohub.webmapp.it/$link";
    }
    else {
        $linkto = 'https://4.app.geohub.webmapp.it';
    }
@endphp
<div class="max-w-screen-xl m-auto pt-0 pb-8 md:py-12 px-0 md:px-4">
    <div class="flex items-end mx-auto bg-cover bg-center bg-no-repeat" style="width: 100%;height: 520px; background-image:url('{{asset('images/cta-map.jpeg')}}');">
        <div class="md:rounded-lg py-4 px-8 h-fit m-0 md:m-8" style="background: rgba(0, 51, 0, 0.8);">
            <h2 class="text-white pb-8">Esplora la mappa interattiva</h2>
            <a href="{{$linkto}}" target="_blank"><p class="w-min py-2 px-4 text-white border border-white rounded-lg duration-300 hover:text-primary hover:bg-white">Esplora</p></a>
        </div>
    </div>
</div>