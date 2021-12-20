@php
    $json_tracks = json_decode(file_get_contents($path = resource_path("jsons/tracks.geojson"))); 
    $tracks = $json_tracks->features;
    
    $json_explore = json_decode(file_get_contents($path = resource_path("jsons/where.geojson"))); 
    $explore = $json_explore->features;
@endphp
<x-siteLayout>
    <x-header/>
    <main class="">
        <x-home.banner></x-banner>
        <x-home.explore :features="$explore"></x-explore>
        <x-home.highlight-tracks :features="$tracks"></x-highlight-tracks>
        <x-home.highlight-pois :features="$tracks"></x-highlight-pois>
        <x-cta-map :link="0"></x-cta-map>
    </main>
    <x-footer/>
</x-siteLayout>