<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * @param request
     * @return message of erro if field user not be filled
     * @return object User inserted if all Okay
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
        return response()->json($this->dataUser($user,"create","success"),201);
    }

     /**
     * @param id user
     * @return object User deleted if all Okay
     */
    public function deleteUser($id){
        $user = User::find($id);
        $this->foundUser($user,"delete"); // Found user
        User::find($id)->delete();
        return response()->json($this->dataUser($user,"delete","success"),201);
    }

    /**
     * @return object with all Users
     */
    public function getAllUsers(){
        $users = User::all('id','name');
        return response()->json($users,201);
    }

    /**
     * @param id user
     * @return object with user specific 
     */
    public function getUser($id){
        $user = User::find($id);
        $this->foundUser($user,"get");
        return response()->json($this->dataUser($user,"get","success"),201);
    }

    /**
     * @param User
     * @return object with status error 
     */
    private function foundUser(User $user,$status){
        if(is_null($user)){
            $user = new User;
            echo json_encode($this->dataUser($user,$status,"error"));
            exit();
        }
    }

    /**
     * @param user
     * @param option
     * @param status
     * @return object with all data to show in response 
     */
    private function dataUser(User $user,$option,$status){
        return ["id"=>$user->id,
                "user"=>$user->name,
                "option"=>$option,
                "status"=>$status];
    }

}
