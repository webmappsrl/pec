@php
    $track_total = $tracks->total();
@endphp
<x-siteLayout>
    <x-header/>
    <main class="">
        <div class="max-w-screen-xl m-auto py-6 px-4">
            <div class="py-8">
                <h2>Risultati per "{{request('search')}}"</h2>
                <h3>{{$track_total}} {{ ($track_total == 1 ) ? 'risultato trovato' : 'risultati trovati' }}</h3>
                <div class="grid md:grid-cols-3 overflow-x-scroll md:overflow-auto grid-flow-col md:grid-flow-row">
                @foreach ($tracks as $feature)
                    <x-track-card :feature="$feature" :highlights="false"/>
                @endforeach
                </div>
                {{ $tracks->links() }}
            </div>
        @if ($tracks)
            <x-taxonomy.leaflet-map :tracks="$tracks"/>
        @endif
    </div>
    </main>
    <x-footer/>
</x-siteLayout>