@extends('layouts.master')
@section('content')
@foreach ($movies as $movie)
    <h2> <a href="{{ '/movies/' . $movie->id }}">Title : {{ $movie->title }}</a> </h2>
    <p> {{ $movie->storyline }} </p>
@endforeach
@endsection