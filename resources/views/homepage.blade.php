<x-siteLayout>
    <x-header/>
    <main class="">
        <x-home.banner></x-banner>
        <x-home.explore :features="$taxonomyWhere"></x-explore>
        <x-home.numbers></x-numbers>
        <x-home.highlight-tracks :features="$tracks"></x-highlight-tracks>
        <x-home.highlight-pois :features="$pois"></x-highlight-pois>
        <x-cta-map :link="0"></x-cta-map>
    </main>
    <x-footer/>
</x-siteLayout>