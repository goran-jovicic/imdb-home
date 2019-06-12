@foreach ($movies as $movie)
    <h2> Title : {{ $movie->title }} </h2>
    <h4> Director : {{ $movie->director }} </h4>
    <p> Genre : {{ $movie->genre }} </p> 
    <p>{{ $movie->production_year }} </p>
    <p> {{ $movie->storyline }} </p>
@endforeach