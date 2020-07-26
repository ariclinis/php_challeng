<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'movie_id',
        'rating',
        'review',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function movie(){
        return $this->belongsTo('App\Movie');
    }
}
