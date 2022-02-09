@props(['link', 'tracks'])
@php
    if ($link) {
        $linkto = "https://3.app.geohub.webmapp.it/$link";
    }
    else {
        $linkto = 'https://4.app.geohub.webmapp.it';
    }
    $track_collection = [];
    foreach ($tracks as $track) {
        $res = DB::select(DB::raw('SELECT ST_ASGeoJSON(ST_Centroid(geometry)) as geojson from ec_tracks where id='.$track->id.'')); 
        $geometry = $res[0]->geojson;
        $geometry = json_decode($geometry);
        $featured_image = get_feature_image_thumbnail($track,$size = '118x117');
        $activitiesString = '';
        foreach ($track->taxonomyActivities as $activity){
            $activitiesString .= getIconSVGhtml($activity->identifier);
            $activitiesString .= '<p>'.$activity->name.'</p>';
        }
                    
        $track_collection[$track->id]['geometry'] = [$geometry->coordinates[1],$geometry->coordinates[0]];
        $track_collection[$track->id]['image'] = $featured_image;
        $track_collection[$track->id]['title'] = $track->name;
        $track_collection[$track->id]['activity'] = $activitiesString;
    }
@endphp
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>

<div class="max-w-screen-xl m-auto pt-0 pb-8 md:py-12 px-0 md:px-4">
    <div id="map" style="height: 666px;" class="md:rounded-l-lg taxonomyLeafletMap"></div>
</div>

<script>
    var track_collection = @json($track_collection);

    var map = L.map('map').setView([43.689740, 10.392279], 12);
    L.tileLayer('https://api.webmapp.it/tiles/{z}/{x}/{y}.png', {
        attribution: '<a  href="http://webmapp.it" target="blank"> © Webmapp </a><a _ngcontent-wbl-c140="" href="https://www.openstreetmap.org/about/" target="blank">© OpenStreetMap </a>',
        maxZoom: 16,
        tileSize: 256,
        scrollWheelZoom: false,
    }).addTo(map);

    var trackMarkers = L.featureGroup().addTo(map);

    for (const [poiID, value] of Object.entries(track_collection)) {
        var pecIcon = L.icon({
            className: 'poi-'+poiID,
            iconUrl: value.image,
            iconSize:     [38, 38], // size of the icon
            iconAnchor:   [22, 38], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
       marker = L.marker(value.geometry, {icon: pecIcon,id:'poi-'+poiID});
       marker.bindPopup("<h4>"+value.title+"</h4><div class='inline-flex items-center text-sm'>"+value.activity+"</div><br><a href='/track/"+poiID+"'><div style='padding:11px;justify-content:center; ' class='inline-flex uppercase justify-center bg-primary p-2 w-full text-white rounded-lg font-bold text-sm'>Dettaglio itinerario <svg width='20' height='20' fill='currentColor' class='ml-2' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/></svg></div></a>").openPopup();
       trackMarkers.addLayer(marker);
       trackMarkers.addTo(map);
    }
    function openpopup(e) {
        $('#'+this.options.id).click();
    }
    // zoom the map to the polyline
    map.fitBounds(trackMarkers.getBounds());
</script>