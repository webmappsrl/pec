<?php

use App\Http\Controllers\SearchController;
use App\Models\EcPoi;
use App\Models\EcTrack;
use App\Models\TaxonomyActivity;
use App\Models\TaxonomyWhere;
use App\Models\TaxonomyTheme;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tracks = EcTrack::whereHas('author', function ($query) {
        return $query->where('user_id', '=', config('geohub.geohub_app_user'));
    })->inRandomOrder()->limit(5)->get();
    
    $pois = EcPoi::whereHas('author', function ($query) {
        return $query->where('user_id', '=', config('geohub.geohub_app_user'));
    })->inRandomOrder()->limit(5)->get();

    // Taxonomy where ids: I parchi
    $taxonomyWhere = TaxonomyWhere::find([13221,13220,13219,13217,13216,13215,13214,13213]);

    return view('homepage',[
        'tracks' => $tracks,
        'pois' => $pois,
        'taxonomyWhere' => $taxonomyWhere,
    ]);
});

Route::get('taxonomy/{taxonomy:identifier}',function (string $taxonomy) {
    try {
        $tracks = EcTrack::whereHas('author', function ($query) {
            return $query->where('user_id', '=', config('geohub.geohub_app_user'));
        })->whereRelation(
            'taxonomyWheres', 'identifier', '=',$taxonomy
        )->get();

        if ( $taxonomy == 'hiking' || $taxonomy == 'cycling' ) {
            $taxonomy = TaxonomyActivity::where('identifier',$taxonomy)->firstOrFail();
        } elseif ( in_array($taxonomy,array('cycle-route','recommended-route','ridge-route','historical-itinerary','route-in-stages'))) {
            $taxonomy = TaxonomyTheme::where('identifier',$taxonomy)->firstOrFail();
        } else {
            $taxonomy = TaxonomyWhere::where('identifier',$taxonomy)->firstOrFail();
        }
        
    }
    catch (Exception $e) {
        abort(404);
    }
    // $taxonomy = json_decode($file);
    return view('taxonomy', [
        'taxonomy' => $taxonomy,
        'relatedTracks' => $tracks
    ]);
});

Route::get('/track/{id}',function($id){
    
    $track = EcTrack::find($id);

    if ($track == null) {
        abort(404);
    }
    return view('track',[
        'track' => $track
    ]);

});

Route::get('search/',[SearchController::class, 'index']);