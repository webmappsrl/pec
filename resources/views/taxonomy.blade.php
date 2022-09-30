<x-siteLayout>
    <x-header/>
    <main class="">
        <x-taxonomy.banner :taxonomy="$taxonomy"></x-banner>
        <x-taxonomy.content :taxonomy="$taxonomy" :tracks="$relatedTracks"></x-content>
        @if (count($relatedTracks->items()) > 0)
            <x-taxonomy.leaflet-map :tracks="$relatedTracks"/>
        @endif
    </main>
    <x-footer/>
</x-siteLayout>