@props(['features'])
<div class="max-w-screen-xl m-auto py-8 md:py-12 px-4">
    <h2>Parchi Emilia Centrale</h2>
    <div class="numbers-grid py-4">
        <div></div>

        <x-home.numbers-feature :target="2457" :unit="'km'" :text="'di rete escursionistica'"></x-home.numbers-feature>
        <x-home.numbers-feature :target="15" :unit="''" :text="'di cammini'"></x-home.numbers-feature>
        <x-home.numbers-feature :target="523" :unit="'kmq'" :text="'di aree protette'"></x-home.numbers-feature>
        <x-home.numbers-feature :target="978" :unit="'kmq'" :text="'di percorsi nelle aree protette'"></x-home.numbers-feature>
        <x-home.numbers-feature :target="98" :unit="''" :text="'tappe'"></x-home.numbers-feature>

    </div>
</div>