<?php

namespace App\Http\Controllers;

use App\Models\EcTrack;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){

        $tracks = EcTrack::whereHas('author', function ($query) {
            return $query->where('user_id', '=', config('geohub.app_user'));
        });
        
        return view('search', [
            'tracks' => $tracks->filter(request(['search']))->orderBy('name', 'asc')->paginate(6)->withQueryString()
        ]);
    }
}
