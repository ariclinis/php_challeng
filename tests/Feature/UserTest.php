<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testInsertUser(){
        $userData =["user"=>"Ariclene"];
        $this->json('POST','insertUser',$userData)
       ->assertJson(
           [
        'id'=>User::all()->last()->id,
       'user'=>'Ariclene',
       'option' =>'create',
       'status' =>'success'
       ])->assertStatus(201);
    }

    public function testDeleteUser(){
        $u = new User;
        $u->name = "Ariclene";
        $u->save();

        $this->json('DELETE','deleteUser/'.$u->id)
        ->assertStatus(204);
    }

    public function testGetUser(){
        $u = new User;
        $u->name = "Ariclene";
        $u->save();

        $this->json('GET','getUser/'.$u->id)
        ->assertJson(
            ['id'=>$u->id,
            'user'=>'Ariclene',
            'option' =>'get',
            'status' =>'success'
            ]
        )->assertStatus(200);
    }
}
