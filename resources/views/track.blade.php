{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<x-siteLayout>
    <x-header/>
    <main class="">
        <x-track.banner :track="$track"/>
        <x-track.mapsection :track="$track"/>
        <x-track.content :track="$track" />
    </main>
    <x-footer/>
</x-siteLayout>