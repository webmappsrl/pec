@props(['taxonomy'])
<div class="relative">
    <div style="width: 100%; height: 457px" class="flex overflow-x-hidden relative">
          <x-taxonomy.banner-slide source="{{$taxonomy->properties->image}}"></x-banner-slide>
          <div class="absolute bottom-10 w-full">
              <div class="max-w-screen-xl m-auto px-4">
                  <h1 class="py-4 px-8 bg-white bg-opacity-70 rounded-xl max-w-3xl w-max text-primary text-4xl font-extrabold">{{$taxonomy->properties->name->it}}</h1>
              </div>
          </div>
    </div>
</div>