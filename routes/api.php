<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Routes to Controller User
 */
Route::get('getAllUsers', 'UserController@getAllUsers');
Route::post('insertUser',  'UserController@insertUser');
Route::delete('deleteUser/{id}',  'UserController@deleteUser');
Route::get('getUser/{id}',  'UserController@getUser');


/**
 * Routes to Controller Movie
 */
Route::get('getAllMovies','MovieController@getAllMovies');
Route::post('insertMovie','MovieController@insertMovie');
Route::delete('deleteMovie/{id}', 'MovieController@deleteMovie');
Route::get('getMovie/{id}',  'MovieController@getMovie');

/**
 * Routes to Controller Review
 */
Route::get('getAllReviews','ReviewController@getAllReviews');
Route::post('insertReview',  'ReviewController@insertReview');
Route::delete('deleteReview/{id}',  'ReviewController@deleteReview');
Route::get('getReview/{id}',  'ReviewController@getReview');