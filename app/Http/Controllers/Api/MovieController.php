<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('directors', 'actors', 'genres', 'ratings')->get();
        return response()->json($movies);
    }

    public function show(Movie $movie)
    {
        return $movie->load('directors', 'actors', 'genres', 'ratings');
    }

    public function movie_genre(Genre $movie)
    {
    }
}
