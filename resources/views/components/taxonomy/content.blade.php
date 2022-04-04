@props(['taxonomy','tracks'])
<div class="max-w-screen-xl m-auto py-6 px-4">
    <div class="py-8">
        <div class="pb-8 taxonomy-body">
            {!! $taxonomy->description !!}
        </div>
        <h3>{{$taxonomy->name}}: {{$tracks->total()}} Itinerari</h3>
        <div class="grid md:grid-cols-3 overflow-x-scroll md:overflow-auto grid-flow-col md:grid-flow-row">
            @foreach ($tracks as $feature)
                <x-track-card :feature="$feature" :highlights="false"/>
            @endforeach
        </div>
        {{ $tracks->links() }}
    </div>
</div>