<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title','genre','director','production_year','storyline'
    ];

    const STORE_RULES = [
        'title' => 'required',
        'genre' => 'required',
        'production_year' => 'required',
        'director' => 'required',
        'storyline' => 'required'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
