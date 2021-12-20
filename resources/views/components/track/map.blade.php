@props(['track'])
@php
    $res = DB::select(DB::raw('SELECT ST_ASGeoJSON(geometry) as geojson from ec_tracks where id='.$track->id.'')); 
    $geometry = $res[0]->geojson;
    $geometry = json_decode($geometry);
    $geometry = $geometry->coordinates;
    $geometry = array_map(function($array){
        $new_array = [$array[1],$array[0]];
        return $new_array;
    },$geometry);

    $geometry = json_encode($geometry);
@endphp

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<div id="map" style="height: 666px;" class="md:rounded-l-lg"></div>
<script>
    var map = L.map('map').setView([43.689740, 10.392279], 12);
    L.tileLayer('https://api.webmapp.it/tiles/{z}/{x}/{y}.png', {
        attribution: '<a  href="http://webmapp.it" target="blank"> © Webmapp </a><a _ngcontent-wbl-c140="" href="https://www.openstreetmap.org/about/" target="blank">© OpenStreetMap </a>',
        maxZoom: 18,
        tileSize: 256,
        scrollWheelZoom: false,
    }).addTo(map);
    var polyline = L.polyline({{$geometry}}, {color: 'red'}).addTo(map);

    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());
</script>