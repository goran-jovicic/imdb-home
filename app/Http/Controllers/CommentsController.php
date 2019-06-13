<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store($movieId)
    {
        $movie = Movie::find($movieId);
        // $team->comments()->create(request()->all());

        $comment = new Comment;
        $comment->content = request('content');
        $comment->movie_id = $movieId;
        $comment->save();

        // \Mail::to($team->email)->send(new CommentReceived($team));
        return back();
    }
}
