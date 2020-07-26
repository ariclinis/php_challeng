<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [
        'name',
    ];

    /**
     * Relaction with Model Review
     */
    public function reviews(){
       return $this->hasMany('App\Review');
    }
    
}
