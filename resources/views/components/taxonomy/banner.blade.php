@props(['taxonomy'])
<div class="relative">
    <div style="width: 100%; height: 457px" class="flex overflow-x-hidden relative">
          <x-taxonomy.banner-slide source="{{get_feature_image_thumbnail($taxonomy,'1440x500')}}"></x-banner-slide>
          <div class="absolute bottom-1 md:bottom-10 w-full">
              <div class="max-w-screen-xl m-auto px-0 md:px-4">
                  <h1 class="py-6 px-6 md:py-4 md:px-8 bg-white bg-opacity-70 md:rounded-xl max-w-3xl w-full md:w-max text-primary text-2xl md:text-4xl font-bold md:font-extrabold">{{$taxonomy->name}}</h1>
              </div>
          </div>
    </div>
</div>