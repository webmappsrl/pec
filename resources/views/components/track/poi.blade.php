@props(['poi'])
@php
    use App\Models\EcPoi;

    $poi = EcPoi::find($poi->id);
    if (!$poi->featureImage) {
        $featured_image = asset('images/banner-1.png');
        $featured_image_full = asset('images/banner-1.png');
    } else {
        $featured_image = $poi->featureImage->thumbnail('118x117');
        $featured_image_full = $poi->featureImage->thumbnail('1440x500');
    }
@endphp
<div x-data="{ open: false }">
    <div class="px-8 py-4 grid grid-cols-3 gap-4 items-center hover:bg-gray-100 cursor-pointer" @click="open = true;document.body.style.overflowY = 'hidden'">
        <div class="bg-cover bg-center bg-no-repeat rounded-lg col-span-1" style="width:120px;height:120px;background-image:url('{{$featured_image}}')">
        </div>
        <div class="col-span-2 pl-4">
            <h4 style="display: -webkit-inline-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;
            overflow: hidden;">
                {{$poi->name}}
            </h4>               
            <div style="display: -webkit-inline-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;
            overflow: hidden;">
                {!! $poi->description !!}
            </div>
        </div> 
    </div>
    
    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-end z-1000" style="display:none;background-color: rgba(0,0,0,.5);" x-show="open">
        <div class="overflow-y-auto text-left bg-white h-screen p-4 md:max-w-xl md:p-12 shadow-xl mx-2 md:mx-0" @click.away="open = false;document.body.style.overflowY = ''"
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-end="opacity-0 transform translate-x-full">
            <div class="flex justify-between">
                <div>
                    @if ($poi->taxonomyWheres->count() > 0 )
                        @foreach ($poi->taxonomyWheres->pluck('name') as $name)
                            <div class="py-2 inline-flex items-center text-primary">{{ $loop->iteration > 1 ? ', ' : '' }}{{$name}}</div>
                        @endforeach
                    @endif
                </div>
                <div class="flex justify-end">
                    <div class="text-primary px-4 py-2 rounded no-outline focus:shadow-outline cursor-pointer" @click="open = false;document.body.style.overflowY = ''"><x-icon-close class="mr-2" width="20" height="20"/></div>
                </div>
            </div>
            <h2 class="pb-8">
                {{$poi->name}}
            </h2> 
            <img class="pb-8" src="{{$featured_image_full}}" alt="{{$poi->name}}">              
            <div>
                {!! $poi->description !!}
            </div>
        </div>
      </div>
</div>
