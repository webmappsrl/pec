@php
    $json_tracks = json_decode(file_get_contents($path = resource_path("jsons/tracks.geojson"))); 
    $tracks = $json_tracks->features;
    
    $json_explore = json_decode(file_get_contents($path = resource_path("jsons/where.geojson"))); 
    $explore = $json_explore->features;
@endphp
<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js" defer></script>
<link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
<x-siteLayout>
    <x-header/>
    <main class="">
        <x-home.banner></x-banner>
        <x-home.explore :features="$explore"></x-explore>
        <x-home.highlight-tracks :features="$tracks"></x-highlight-tracks>
        <x-home.highlight-pois :features="$tracks"></x-highlight-pois>
        <x-cta-map></x-cta-map>
    </main>
    <x-footer/>
</x-siteLayout>