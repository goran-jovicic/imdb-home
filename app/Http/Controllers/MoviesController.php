<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        $lastFiveMovies = Movie::latest()->take(5)->get();

        return view('movies.index',compact('movies','lastFiveMovies'));
    }

    public function show($id)
    {
        $movie = Movie::with('comments')->findOrFail($id);

        $lastFiveMovies = Movie::latest()->take(5)->get();

        return view('movies.show', compact('movie','lastFiveMovies'));
    }

    public function create()
    {
        return view('movies.create');
    }
    
    public function store()
    {
        $this->validate(request(), Movie::STORE_RULES);

        $movie = new Movie();

        $movie->title = request('title');
        $movie->genre = request('genre');
        $movie->director = request('director');
        $movie->production_year = request('production_year');
        $movie->storyline = request('storyline');

        $movie->save();

        return redirect('/movies');
    }
}
