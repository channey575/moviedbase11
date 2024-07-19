<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings= Rating::with('directors', 'actors', 'genres', 'ratings')->get();
        return response()->json($ratings);
    }

    public function show(Rating $rating) 
    { 
        return $rating->load('directors', 'actors', 'genres', 'ratings'); 
    }
}
