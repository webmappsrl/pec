@php
    $track_total = count($tracks);
@endphp
<x-siteLayout>
    <x-header/>
    <main class="">
        <div class="max-w-screen-xl m-auto py-6 px-4">
            <div class="py-8">
                <h2>Risultati per "{{request('search')}}"</h2>
                <h3>{{$track_total}} {{ ($track_total == 1 ) ? 'risultato trovato' : 'risultati trovati' }}</h3>
                <div class="grid grid-cols-3">
                @foreach ($tracks as $feature)
                    <x-track-card :feature="$feature" />
                @endforeach
                </div>
        </div>
    </div>
    </main>
    <x-footer/>
</x-siteLayout>