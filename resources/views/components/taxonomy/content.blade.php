@props(['taxonomy'])
@php
    $track_total = count($taxonomy->features);
@endphp
<div class="max-w-screen-xl m-auto py-6 px-4">
    <div class="py-8">
        <div class="pb-8 taxonomy-body">
            {!! $taxonomy->properties->description->it !!}
        </div>
        <h3>{{$taxonomy->properties->name->it}}: {{$track_total}} Itinerari</h3>
        <div class="grid grid-cols-3">
            @foreach ($taxonomy->features as $feature)
                <x-track-card :feature="$feature" />
            @endforeach
        </div>
    </div>
</div>