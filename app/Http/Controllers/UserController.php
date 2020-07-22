<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * return error if field user not be filled
     * return object User inserted if all Okay
     */
    public function insertUser(Request $request){
        // Validation of insert
        $rulesToInsert =[
            'user' => 'required',
        ];
        $validator= Validator::make($request->all(),$rulesToInsert);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        //end Validation
        $user = new User;
        $user->name = $request->user;
        $user->save();
        $user = User::all()->last();
        return response()->json($user,201);
    }

     /**
     * return error if field id not be filled or if User with id not exist
     * return object User deleted if all Okay
     */
    public function deleteUser(Request $request,$id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(["message"=>"Record not found!"],404);
        }
        User::find($id)->delete();
        return response()->json($user,201);
    }

    /**
     * return object with all Users
     */
    public function getAllUsers(){
        $users = User::all('id','name');
        return response()->json($users,201);
    }

}
