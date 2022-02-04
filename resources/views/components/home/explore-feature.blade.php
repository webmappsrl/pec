@props(['feature'])

<a href="/taxonomy/{{$feature->identifier}}">
    <div class="bg-cover bg-no-repeat bg-center rounded-xl flex items-end p-6" style="min-height: 180px;background-image:url('{{$feature->featureImage->thumbnail('1440x500')}}')"><h3 class="text-white" 
        style="display: -webkit-inline-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;">{{$feature->name}}</h3></div>
</a>