<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        @foreach ($lastFiveMovies as $lastFiveMovie)
            <p> <a href="{{ '/movies/' . $lastFiveMovie->id }}">{{ $lastFiveMovie->title }} </p>
        @endforeach
    </div>
</div><!-- /.blog-sidebar -->