@extends('layouts.master')
@section('content')
    <h3> {{ $movie->title }} </h3>
    <p> {{ $movie->genre }} </p>
    <p> {{ $movie->director }} </p>
    <p> {{ $movie->production_year }} </p>
    <p> {{ $movie->storyline }} </p>
    <hr>
    <h1> Comments : </h1>
    @foreach ($movie->comments as $comment)
        <p> {{ $comment->content }} </p>
    @endforeach
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('comments-post', ['movie_id' => $movie->id])}}">
        @csrf
        <div>
            <label for="content">content : </label>
            <input type="text" id="content" name="content">
        </div>
        <div>
            <input type="submit" value="Submit comment">
        </div>
    </form>
@endsection