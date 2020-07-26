<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Movie;

class MovieTest extends TestCase
{
    
    public function testInsertMovie(){
        $movieData =["movie"=>"Tarzan"];
        $this->json('POST','insertMovie',$movieData)
       ->assertJson(
           [
        'id'=>Movie::all()->last()->id,
       'movie'=>'Tarzan',
       'option' =>'create',
       'status' =>'success'
       ])->assertStatus(201);
    }

    public function testDeleteMovie(){
  
        $m = new Movie;
        $m->movie = "Tarzan";
        $m->save();

        $this->json('DELETE','deleteMovie/'.$m->id)
        ->assertStatus(204);
    }


    public function testGetMovie(){
        $m = new Movie;
        $m->movie = "Tarzan";
        $m->save();

        $this->json('GET','getMovie/'.$m->id)
        ->assertJson(
            ['id'=>$m->id,
            'movie'=>'Tarzan',
            'option' =>'get',
            'status' =>'success'
            ]
        )->assertStatus(200);
    }

}
