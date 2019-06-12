@extends('layouts.master')
@section('content')
    <h3> {{ $movie->title }} </h3>
    <p> {{ $movie->genre }} </p>
    <p> {{ $movie->director }} </p>
    <p> {{ $movie->production_year }} </p>
    <p> {{ $movie->storyline }} </p>
@endsection