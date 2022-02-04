@props(['taxonomy','tracks'])
@php
    $track_total = count($tracks);
@endphp
<div class="max-w-screen-xl m-auto py-6 px-4">
    <div class="py-8">
        <div class="pb-8 taxonomy-body">
            {!! $taxonomy->description !!}
        </div>
        <h3>{{$taxonomy->name}}: {{$track_total}} Itinerari</h3>
        <div class="grid grid-cols-3">
            @foreach ($tracks as $feature)
                <x-track-card :feature="$feature" />
            @endforeach
        </div>
    </div>
</div>