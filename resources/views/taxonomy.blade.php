<x-siteLayout>
    <x-header/>
    <main class="">
        <x-taxonomy.banner :taxonomy="$taxonomy"></x-banner>
        <x-taxonomy.content :taxonomy="$taxonomy" :tracks="$relatedTracks"></x-content>
            @if ($taxonomy->getTable() == 'taxonomy_wheres')
                <x-taxonomy.leaflet-map :link="$taxonomy->id" :tracks="$relatedTracks"/>
            @endif
    </main>
    <x-footer/>
</x-siteLayout>