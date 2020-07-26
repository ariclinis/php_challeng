<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    /**
     * @param request
     * @return error if field movie not be filled
     * @return object Movie inserted if all Okay
     */
    public function insertMovie(Request $request){
        // Validation of insert
        $rulesToInsert =[
            'movie' => 'required',
        ];
        $validator= Validator::make($request->all(),$rulesToInsert);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        //end Validation
        $movie = new Movie;
        $movie->movie = $request->movie;
        $movie->save();
        $movie = Movie::all()->last();
        return response()->json($this->dataMovie($movie,"create","success"),201);
    }

     /**
     * @param id movie
     * @return object movie deleted if all Okay
     */
    public function deleteMovie($id){
        $movie = Movie::find($id);
        $this->foundMovie($movie,"delete"); // Found Movie
        Movie::find($id)->delete();
        return response()->json($this->dataMovie($movie,"delete","success"),204);
    }

    /**
     * @param id Movie
     * @return object with movie specific
     */
    public function getMovie($id){
        $movie = Movie::find($id);
        $this->foundMovie($movie,"get");
        return response()->json($this->dataMovie($movie,"get","success"),200);
    }

    /**
     * @return object with all Movies
     */
    public function getAllMovies(){
        $movies = Movie::all('id','movie');
        return response()->json($movies,201);
    }
    
    /**
     * @param Movie
     * @param option
     * @return object with status error 
     */
    private function foundMovie($movie,$option){
        if(is_null($movie)){
            $movie = new Movie;
            echo json_encode($this->dataMovie($movie,$option,"error"));
            exit();
        }
    }

    /**
     * @param movie
     * @param option
     * @param status
     * @return object with all data to show in response 
     */
    private function dataMovie(Movie $movie,$option,$status){
        return ["id"=>$movie->id,
                "movie"=>$movie->movie,
                "option"=>$option,
                "status"=>$status];
    }
}
