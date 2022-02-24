@props(['track'])
@php
    $related_urls = json_decode($track->related_url,true);
    $gallery = $track->ecMedia;
@endphp
<div class="max-w-screen-xl m-auto py-6 px-4">
    <div>
        @if ($track->description)
            <h3>Descrizione</h3>
            {!! $track->description !!}
        @endif
        @if (count($related_urls) > 0)
            <h4>Link utili</h4>
            @foreach ($related_urls as $label => $url)
                <a href="{{$url}}" target="_blank" rel="noopener noreferrer" class="text-primary-border font-bold">{{$label}}</a><br>
            @endforeach
        @endif
    </div>
</div>
<div class="max-w-screen-xl m-auto py-6 px-4 relative">
    @if ($gallery->count() > 0)
        <x-track.carousel :gallery="$gallery" />
    @endif
</div>