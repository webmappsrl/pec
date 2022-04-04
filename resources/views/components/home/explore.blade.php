@props(['features'])
<div class="max-w-screen-xl m-auto py-8 md:py-12 pl-4 md:px-4">
    <h2>Esplora</h2>
    <div class="explore-grid py-4">
        @foreach ($features as $feature)
            <x-home.explore-feature :feature="$feature" />
        @endforeach
    </div>
</div>