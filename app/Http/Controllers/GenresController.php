<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre)
    {
        $genreMovies = Movie::where('genre', $genre)->get();

        return view('genres.movies', compact('genreMovies'));
    }
}
