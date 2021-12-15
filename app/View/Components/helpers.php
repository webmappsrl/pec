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