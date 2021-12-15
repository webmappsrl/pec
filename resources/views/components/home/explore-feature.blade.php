@props(['feature'])

<a href="/taxonomy/{{$feature->properties->taxonomy}}/{{$feature->properties->id}}">
    <div class="bg-cover bg-no-repeat bg-center rounded-xl flex items-end p-6" style="min-height: 180px;background-image:url('{{$feature->properties->image}}')"><h3 class="text-white">{{$feature->properties->name}}</h3></div>
</a>