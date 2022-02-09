@props(['feature'])

<a href="/taxonomy/{{$feature->identifier}}">
    <div class="bg-cover bg-no-repeat bg-center rounded-xl relative h-full explore-grid-item-overlay" style="min-height: 180px;background-image:url('{{$feature->featureImage->thumbnail('1440x500')}}')">
        <div class="flex items-end p-6 h-full rounded-xl">
            <h3 class="text-white z-10" 
            style="display: -webkit-inline-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;">{{$feature->name}}</h3>
        </div>
    </div>
</a>