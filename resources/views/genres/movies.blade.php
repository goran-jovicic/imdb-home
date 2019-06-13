@extends('layouts.master')
@section('content')
    <h1> Movies in this genre : </h1>
    @foreach ($genreMovies as $movie)
        <h3> {{ $movie->title }} </h3>
    @endforeach
        </div>
        @include('partials.sidebar')
@endsection