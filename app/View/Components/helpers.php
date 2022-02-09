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

if (!function_exists('getIconSVGhtml')) {
    function getIconSVGhtml($identifier) {
        $output = '';
        if ($identifier == 'hiking') {
            $output = file_get_contents(base_path().'/resources/SVG/hiking-15.svg');
            $output = str_replace('<svg','<svg class="icon-2lg bg-light-grey rounded-full p-1 mr-2"',$output); 
        }
        if ($identifier == 'cycling') {
            $output = file_get_contents(base_path().'/resources/SVG/cyc_bici.svg');
            $output = str_replace('<svg','<svg class="icon-2lg bg-light-grey rounded-full p-1 mr-2"',$output); 
        }
        return $output;
    }
}

