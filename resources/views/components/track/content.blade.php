@props(['track'])
@php
    $gallery = $track->ecMedia;
@endphp
<div class="max-w-screen-xl m-auto py-6 px-4">
    <div class="py-8">
        <h3>Descrizione</h3>
        {!! $track->description !!}
        @if ($gallery->count() > 0)
            <x-track.carousel :gallery="$gallery" />
        @endif
    </div>
</div>