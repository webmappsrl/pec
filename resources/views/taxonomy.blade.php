<x-siteLayout>
    <x-header/>
    <main class="">
        <x-taxonomy.banner :taxonomy="$taxonomy"></x-banner>
        <x-taxonomy.content :taxonomy="$taxonomy" :tracks="$relatedTracks"></x-content>
            @if ($taxonomy->getTable() == 'taxonomy_wheres')
                <x-cta-map :link="$taxonomy->id"/>
            @endif
    </main>
    <x-footer/>
</x-siteLayout>