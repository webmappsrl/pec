<x-siteLayout>
    <x-header/>
    <main class="">
        <x-taxonomy.banner :taxonomy="$taxonomy"></x-banner>
        <x-taxonomy.content :taxonomy="$taxonomy"></x-content>
            @if ($taxonomy->properties->taxonomy == 'where')
                <x-cta-map :link="$taxonomy->properties->id"/>
            @endif
    </main>
    <x-footer/>
</x-siteLayout>