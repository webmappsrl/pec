<x-siteLayout>
    <x-header/>
    <main class="">
        <x-track.banner :track="$track"/>
        <x-track.mapsection :track="$track"/>
        <x-track.content :track="$track" />
    </main>
    <x-footer/>
</x-siteLayout>