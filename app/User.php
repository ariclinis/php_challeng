<?php

namespace App;

/*
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;*/
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
