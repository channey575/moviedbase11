<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reviewer;

class ReviewerController extends Controller
{
    public function index()
    {
        $reviews = Reviewer::with('directors', 'actors', 'genres', 'ratings')->get();
        return response()->json($reviews);
    }

    public function show(Reviewer $reviewer) 
    { 
        return $reviewer->load('directors', 'actors', 'genres', 'ratings'); 
    }
}
