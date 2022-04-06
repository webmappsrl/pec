@props(['track'])
<div class="relative">
    <div @if ($agent->isMobile()) style="width: 100%; height: 100%" @else style="width: 100%; height: 457px" @endif class="flex overflow-x-hidden relative">
            @if (!$agent->isMobile())
                <x-track.banner-slide source="{{get_feature_image_thumbnail($track,'1440x500')}}"></x-track.banner-slide>
            @endif
          <div class="relative md:absolute bottom-1 md:bottom-10 w-full">
              <div class="max-w-screen-xl m-auto px-0 md:px-4">
                  <div class="py-6 px-6 md:py-4 md:px-8 bg-white bg-opacity-70 md:rounded-xl max-w-3xl w-full md:w-max">
                      <h1 class="text-primary text-4xl font-extrabold">{{$track->name}}</h1>
                      @if ($track->from && $track->to)
                          <p class="pb-2">Da {{$track->from}} a {{$track->to}}</p>
                      @endif
                      @if ($track->taxonomyActivities->count() > 0 )
                            <div class="py-2 inline-flex items-center">
                              @foreach ($track->taxonomyActivities->pluck('identifier','name') as $name => $identifier)
                                  @svg(icon_mapping($identifier), 'icon-2lg bg-light-grey rounded-full p-1')
                                  <div class="pl-2 text-primary ">{{$name}}</div>
                              @endforeach
                          </div>
                      @endif
                  </div>
              </div>
          </div>
    </div>
</div>