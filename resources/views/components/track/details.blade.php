@props(['track'])
@php
    use App\Models\EcPoi;
    $classes = 'text-secondary uppercase border-b border-gray-300 border-solid w-full text-center pt-4 pb-2 tab-nav-link';
    $details = array();
    if ($track->distance)
        $details['Lunghezza'] = $track->distance.'km';
    if ($track->ascent)
        $details['Dislivello +'] = $track->ascent.'m';
    if ($track->descent)
        $details['Dislivello -'] = $track->descent.'m';
    if ($track->ele_from)
        $details['Quota di partenza'] = $track->ele_from.'m';
    if ($track->ele_to)
        $details['Quota di arrivo'] = $track->ele_to.'m';
    if ($track->ele_min)
        $details['Quota minima'] = $track->ele_min.'m';
    if ($track->ele_max)
        $details['Quota massima'] = $track->ele_max.'m';
@endphp
<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'details' }" id="tab_wrapper">
    <!-- The tabs navigation -->
    <nav class="map-detail-tab grid grid-cols-2">
        <a class="{{$classes}}" :class="{ 'active': tab === 'details' }" @click.prevent="tab = 'details'; window.location.hash = 'details'" href="#">Dettagli tecnici</a>
        <a class="{{$classes}}" :class="{ 'active': tab === 'relatedpois' }" @click.prevent="tab = 'relatedpois'; window.location.hash = 'relatedpois'" href="#">Punti di interesse</a>
    </nav>
  
    <!-- The tabs content -->
    <div x-show="tab === 'details'" class="px-8 py-6">
        <img src="{{asset('images/altimetric-profile-sample.png')}}" alt="webmapp map" class="pb-6 w-full">
    
        @if (count($details) > 0)
            <h3 class="text-primary font-semibold text-xl">Dettagli Percorso</h3>
            <div class="felx flex-col trackDetails">
                @foreach ($details as $key => $val)
                    <div class="flex flex-row justify-between py-2 border-gray-300 {{!$loop->last ? 'border-b' : ''}}">
                        <p>{{$key}}</p>
                        <p class="font-semibold">{{$val}}</p>
                    </div>
                @endforeach
            </div>
        @endif
     </div>
     <div x-show="tab === 'relatedpois'" style="overflow-y: auto;max-height: 615px;">
         @foreach ($track->ecPois as $poi)
            @php
                $poi = EcPoi::find($poi->id);
                if (!$poi->featureImage) {
                    $featured_image = asset('images/banner-1.png');
                } else {
                    $featured_image = $poi->featureImage->thumbnail('118x117');
                }
            @endphp
            <div class="px-8 py-4 grid grid-cols-3 gap-4 items-center">
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
         @endforeach
     </div>
</div>