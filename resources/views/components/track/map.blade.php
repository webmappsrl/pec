@props(['track'])
@php
    use App\Models\EcPoi;

    $res = DB::select(DB::raw('SELECT ST_ASGeoJSON(geometry) as geojson from ec_tracks where id='.$track->id.'')); 
    $geometry = $res[0]->geojson;
    $geometry = json_decode($geometry);
    $geometry = $geometry->coordinates;
    $geometry = array_map(function($array){
        $new_array = [$array[1],$array[0]];
        return $new_array;
    },$geometry);
    $geometry = json_encode($geometry);

    $pois = $track->ecPois;
    $pois_collection = [];
    foreach ($pois as $index => $poi) {
        $res_poi = DB::select(DB::raw('SELECT ST_ASGeoJSON(geometry) as geojson from ec_pois where id='.$poi->id.'')); 
        $geometry_poi = $res_poi[0]->geojson;
        $geometry_poi = json_decode($geometry_poi);
        $geometry_poi = $geometry_poi->coordinates;
        $new_array1 = [$geometry_poi[1],$geometry_poi[0]];
        $geometry_poi = json_encode($new_array1);
        $featured_image = get_feature_image_thumbnail($poi,$size = '118x117');
        $pois_collection[$poi->id]['geometry'] = $geometry_poi;
        $pois_collection[$poi->id]['image'] = $featured_image;
    }
@endphp
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<div id="map" style="height: 666px;" class="md:rounded-l-lg"></div>
<script>
    var pois_collection = @json($pois_collection);
    var map = L.map('map').setView([43.689740, 10.392279], 12);
    L.tileLayer('https://api.webmapp.it/tiles/{z}/{x}/{y}.png', {
        attribution: '<a  href="http://webmapp.it" target="blank"> © Webmapp </a><a _ngcontent-wbl-c140="" href="https://www.openstreetmap.org/about/" target="blank">© OpenStreetMap </a>',
        maxZoom: 16,
        tileSize: 256,
        scrollWheelZoom: false,
    }).addTo(map);
    var polyline = L.polyline({{$geometry}}, {color: 'red'}).addTo(map);
    for (const [poiID, value] of Object.entries(pois_collection)) {
        var greenIcon = L.icon({
            radius: 200,
            className: 'poi-'+poiID,
            iconUrl: value.image,
            iconSize:     [38, 38], // size of the icon
            iconAnchor:   [22, 38], // point of the icon which will correspond to marker's location
        });
        L.marker(JSON.parse(value.geometry), {icon: greenIcon,id:'poi-'+poiID}).addTo(map).on('click', openmodal)
    }
    function openmodal(e) {
        flash('relatedpois');
        $('#'+this.options.id).click();
    }
    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());
</script>