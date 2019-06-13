@extends('layouts.master')
@section('content')
    <h1> Add movie </h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/create">
        @csrf
        <div>
            <label for="title">Title : </label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="genre">Genre : </label>
            <input type="text" id="genre" name="genre">
        </div>
        <div>
            <label for="director">Director : </label>
            <input type="text" id="director" name="director">
        </div>
        <div>
            <label for="production_year">Year it was made in : </label>
            <input type="number" id="production_year" name="production_year">
        </div>
        <div>
            <label for="storyline">Storyline : </label>
            <input type="text" id="storyline" name="storyline">
        </div>
        <div>
            <input type="submit" value="Submit movie">
        </div>
    </form>
@endsection
