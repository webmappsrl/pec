<?php

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
    return view('homepage');
});

Route::get('taxonomy/{slug}',function (string $slug) {
    try {
        $file = file_get_contents(resource_path("jsons/$slug.json"));
        // $file = file_get_contents('https://geohub.webmapp.it/api/ec/track/s154');
    }
    catch (Exception $e) {
        abort(404);
    }


    $taxonomy = json_decode($file);

    return view('taxonomy', [
        'taxonomy' => $taxonomy
    ]);
});