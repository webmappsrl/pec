@props(['track'])
<div class="max-w-screen-xl m-auto md:py-6 md:px-4">
    <div class="grid md:grid-cols-3 md:shadow md:rounded-lg">
        <div class=" col-span-2">
            <x-track.map :track="$track"/>
        </div>
        <div class="col-span-1">
            <x-track.details :track="$track"/>
        </div>
    </div>
    <a class="px-4 md:px-0" href="https://geohub.webmapp.it/api/ec/track/download/{{$track->id}}.gpx"><p class="pt-8 text-base font-bold text-primary hover:underline inline-flex items-center">Scarica tracciato GPX <x-icon-download class="ml-2" width="20" height="20"/></p></a>
</div>