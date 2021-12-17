@props(['track'])
@php
    if (!$track->featureImage) {
        $featured_image = asset('images/banner-1.png');
    } else {
        $featured_image = $track->featureImage->thumbnail('1440x500');
    }
@endphp
<div class="relative">
    <div style="width: 100%; height: 457px" class="flex overflow-x-hidden relative">
          <x-track.banner-slide source="{{$featured_image}}"></x-track.banner-slide>
          <div class="absolute bottom-10 w-full">
              <div class="max-w-screen-xl m-auto px-4">
                  <div class="py-4 px-8 bg-white bg-opacity-70 rounded-xl max-w-3xl w-max">
                    @if ($track->taxonomyWheres->count() > 0 )
                        @foreach ($track->taxonomyWheres->pluck('name') as $name)
                            <div class="py-2 inline-flex items-center text-primary">{{ $loop->iteration > 1 ? ', ' : '' }}{{$name}}</div>
                        @endforeach
                    @endif
                      <h1 class="text-primary text-4xl font-extrabold">{{$track->name}}</h1>
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