<div class="swiper-slide p-8 md:p-2">
    <a href="/track/{{$feature->id}}">
    <div class="flex flex-col rounded-lg shadow-md overflow-hidden duration-300 hover:shadow-lg">
        <div class="flex-shrink-0">
            <img class="h-48 w-full object-cover" src="{{get_feature_image_thumbnail($feature,'1440x500')}}" alt="">
        </div>
        <div class="bg-white p-6 text-primary">
            @foreach ($feature->taxonomyActivities as $activity)
                <div class="pb-2 inline-flex items-center">
                    @svg(icon_mapping($activity->identifier), 'icon-2lg bg-light-grey rounded-full p-1')
                    <div class="pl-2">{{$activity->name}}</div>
                </div>
            @endforeach
            <h3 class="w-full" style="min-height: 69px;display: -webkit-inline-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;
            overflow: hidden;">{{$feature->name}}</h3>
            <div class="pt-2 w-full" style="min-height: 80px;display: -webkit-inline-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;">
                {!! $feature->description !!}
            </div>  
            <p class="mt-8 text-lg uppercase font-bold inline-flex items-center">Scopri di più 
                <svg width="20" height="20" fill="currentColor" class="ml-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </p>
        </div>
    </div>
    </a>
</div> 