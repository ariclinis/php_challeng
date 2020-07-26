<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ReviewController extends Controller
{

    /**
     * @param request
     * @return error if field review not be filled
     * @return object review inserted if all Okay
     */
    public function insertReview(Request $request){
        // Validation of insert
        $rulesToInsert =[
            'user_id' => 'required',
            'movie_id'=> 'required',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required',
        ];
        $validator= Validator::make($request->all(),$rulesToInsert);
        $user=User::find($request->user_id);
        $movie= User::find($request->user_id);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }else if(is_null($user) || is_null($movie)){
            $this->foundReview(null,"create");
        }
        //end Validation
        $review = new Review;
        $review->user_id = $request->user_id;
        $review->movie_id = $request->movie_id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();
        $review = Review::all()->last();
        return response()->json($this->dataReview($review,"create","success"),201);
    }



    /**
    * @return all Reviews
    */
    public function getAllReviews(){
        
        #Join with Users and Movies
        $reviews = DB::table('reviews')
        ->join('users', 'users.id', '=', 'reviews.user_id')
        ->join('movies', 'movies.id', '=', 'reviews.movie_id')
        ->select('reviews.id','reviews.user_id', 'users.name','reviews.movie_id', 'movies.movie','reviews.review','reviews.rating')
        ->get();
        
        return response()->json($reviews->toArray(),201);
    }

     /**
     * @param id review
     * @return object review deleted if all Okay
     */
    public function deleteReview($id){
        $review = Review::find($id);
        $this->foundReview($review,"delete"); // Found review
        Review::find($id)->delete();
        return response()->json($this->dataReview($review,"delete","success"),204);
    }

     /**
     *@param id review 
     * @return object Review
     */
    public function getReview($id){
        $review = Review::find($id);
        if(is_null($review)){
            echo '{"message":"Record not found!"}';
            exit();
        }
        return response()->json($this->dataReview($review,"get","success"),200);
    }

    /**
     * @param id user
     * @return object json with average rating of user
     */
    public function getAverageRatingOfUser(int $idUser){
        $reviews = Review::where('user_id','=',$idUser)
                    ->join('users', 'users.id', '=', 'reviews.user_id');

        $reviews = $reviews->select(DB::raw('avg(rating) as average, user_id, users.name as user_name'))
                            ->orderBy('user_id', 'desc')
                            ->groupBy('user_id')
                            ->get();
        
        return response()->json($reviews,201);
     }

    /**
     * @param id user
     * @return object json with average rating of user
     */
    public function getAverageRatingOfMovie(int $idMovie){
        $reviews = Review::where('movie_id','=',$idMovie)
                    ->join('movies', 'movies.id', '=', 'reviews.movie_id');

        $reviews = $reviews->select(DB::raw('avg(rating) as average, movie_id, movies.movie as movie'))
                            ->orderBy('movie_id', 'desc')
                            ->groupBy('movie_id')
                            ->get();
        
        return response()->json($reviews,201);
     }

    /**
     * @param review
     * @param option
     * @return object with status error 
     */
    private function foundReview($review,$option){
        if(is_null($review)){
            $review = new Review; // empty review
            $review->User = new User; // empty user
            $review->Movie = new Movie; // empty user
            echo json_encode($this->dataReview($review,$option,"error"));
            exit();
        }
    }

    /**
     * @param review
     * @param option
     * @param status
     * @return object with all data to show in response 
     */
    private function dataReview(Review $review,$option,$status){
        return ["id"=>$review->id,
                "user_id"=>$review->user_id,
                "user_name"=>$review->User->name,
                "movie_id"=>$review->movie_id,
                "movie"=>$review->Movie->movie,
                "review"=>$review->review,
                "rating"=>$review->rating,
                "option"=>$option,
                "status"=>$status];
    }

    

}
