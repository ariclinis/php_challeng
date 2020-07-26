<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Review;
use App\Movie;
use App\User;

class ReviewTest extends TestCase
{
    public function testInsertMovie(){
       
        $u = new User;
        $u->name = "Ariclene";
        $u->save();
       
        $m = new Movie;
        $m->movie = "Tarzan";
        $m->save();

        $reviewData =[
            "user_id"=>$u->id,
            "movie_id"=>$m->id,
            "rating"=>2,
            "review"=>"Greet",
            "movie"=>"Tarzan",
        ];
        $this->json('POST','insertReview',$reviewData)
       ->assertJson(
           [
        'id'=>Review::all()->last()->id,
       'user_id'=>$u->id,
       'user_name'=>''.$u->name.'',
       'movie_id'=>''.$m->id.'',
       'movie'=>''.$m->movie.'',
       'review'=>"Greet",
       'rating'=>'2',
       'option' =>'create',
       'status' =>'success'
       ])->assertStatus(201);
    }

    public function testDeleteReview(){
        $reviewData =["movie"=>"Ariclene"];
        
        $u = new User;
        $u->name = "Ariclene";
        $u->save();
       
        $m = new Movie;
        $m->movie = "Tarzan";
        $m->save();
        
        $r = new Review;
        $r->movie_id =$m->id;
        $r->user_id =$u->id;
        $r->rating = 6;
        $r->review = "Good";
        $r->save();

        $this->json('DELETE','deleteReview/'.$r->id)
        ->assertStatus(204);
    }

    public function testGetReview(){
        $u = new User;
        $u->name = "Ariclene";
        $u->save();
       
        $m = new Movie;
        $m->movie = "Tarzan";
        $m->save();
        
        $r = new Review;
        $r->movie_id =$m->id;
        $r->user_id =$u->id;
        $r->rating = 6;
        $r->review = "Good";
        $r->save();

        $this->json('GET','getReview/'.$r->id)
        ->assertJson(
            ['id'=>$r->id,
            'user_id'=>$u->id,
            'user_name'=>''.$u->name.'',
            'movie_id'=>''.$m->id.'',
            'movie'=>''.$m->movie.'',
            'review'=>"Good",
            'rating'=>'6',
            'option' =>'get',
            'status' =>'success'
            ]
        )->assertStatus(200);
    }
}
