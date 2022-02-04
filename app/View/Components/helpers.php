<?php

if (!function_exists('icon_mapping')) {
    function icon_mapping($slug){
        $mapping = $array = [
            'hiking' => 'hiking-15',
            'mtb' => 'cyc_mtb',
            'cycling' => 'cyc_bici'
        ];
        return $mapping[$slug];
    }
}

if (!function_exists('get_feature_image_thumbnail')) {
    function get_feature_image_thumbnail($feature,$size = '1440x500'){
        if (!$feature->featureImage)
            return $featured_image = asset('images/banner-1.png');
            
        if (!$feature->featureImage->thumbnail($size))
            return $featured_image = asset('images/banner-1.png');

        
        return $featured_image = $feature->featureImage->thumbnail($size);
    }
}