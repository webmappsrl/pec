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
        return $query->where('user_id', '=', config('geohub.app_user'));
    })->whereRelation(
        'TaxonomyThemes', 'identifier', '=', 'recommended-route'
    )->inRandomOrder()->limit(5)->get();
    
    $pois = EcPoi::whereHas('author', function ($query) {
        return $query->where('user_id', '=', config('geohub.app_user'));
    })->inRandomOrder()->has('ecTracks')->limit(5)->get();
 
    // Taxonomy where ids: I parchi and sort them by the given sequence
    $taxonomyWhere = TaxonomyWhere::find([13220,13221,13214,13216,13217,13213,13215,13219])->sortBy(function($el){
        return array_search($el->getKey(), [13220,13221,13214,13216,13217,13213,13215,13219]);
    });

    return view('homepage',[
        'tracks' => $tracks,
        'pois' => $pois,
        'taxonomyWhere' => $taxonomyWhere,
    ]);
});

Route::get('taxonomy/{taxonomy:identifier}',function (string $taxonomy) {
    try {
        $taxonomyType = '';
        $paginations = 6;

        if ( $taxonomy == 'hiking' || $taxonomy == 'cycling' ) {
            $taxonomyObj = TaxonomyActivity::where('identifier',$taxonomy)->firstOrFail();
            $taxonomyType = 'TaxonomyActivities';
        } elseif ( in_array($taxonomy,array('cycle-route','recommended-route','ridge-route','historical-route','route-in-stages'))) {
            $taxonomyObj = TaxonomyTheme::where('identifier',$taxonomy)->firstOrFail();
            $taxonomyType = 'TaxonomyThemes';
        } elseif ( in_array($taxonomy,array('alta-via-parchi','piccola-cassia','percorso-natura-secchia','sentiero-spallanzani','sentiero-vulcani-fango','via-germanica-imperiale','via-matildica-volto-santo','via-romea-nonantolana','sentiero-ducati','
        sentiero-europeo-e1'))) {
            $taxonomyObj = TaxonomyTheme::where('identifier',$taxonomy)->firstOrFail();
            $taxonomyType = 'TaxonomyThemes';
            $paginations = 9;
        } else {
            $taxonomyObj = TaxonomyWhere::where('identifier',$taxonomy)->firstOrFail();
            $taxonomyType = 'taxonomyWheres';
        }

        $tracks = EcTrack::whereHas('author', function ($query) {
            return $query->where('user_id', '=', config('geohub.app_user'));
        })->whereRelation(
            $taxonomyType, 'identifier', '=',$taxonomy
        )->orderBy('name', 'asc')->paginate($paginations);
    }
    catch (Exception $e) {
        abort(404);
    }
    // $taxonomy = json_decode($file);
    return view('taxonomy', [
        'taxonomy' => $taxonomyObj,
        'relatedTracks' => $tracks
    ]);
});

Route::get('/track/{id}',function($id){
    
    $track = EcTrack::whereHas('author', function ($query) {
        return $query->where('user_id', '=', config('geohub.app_user'));
    })->find($id);

    if ($track == null) {
        abort(404);
    }
    return view('track',[
        'track' => $track
    ]);

});

Route::get('search/',[SearchController::class, 'index']);