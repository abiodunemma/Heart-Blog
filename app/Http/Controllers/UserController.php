<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

public function edit($id){
    $Users = User::find($id);
    return$id;
 //   return view ('/User/edit-profile', ["data"=>$Users]);

}

function editprofile(Request $request, $id){
    // return "edit";
     $user= User::find($id);
     $user->name=$request->name;
     $user->email=$request->email;
     $user->password= $request->password;
     $user->image= $request->image;
     $user->bio= $request->bio;
     if($user->save()){
         return redirect("/home");

     }else{
         echo "Please something went";
     }
    }
public function profile(){
  $userData = User::all();
    return view  ('/User/edit-profile');
 //  return view('/User/edit-profile', ['users' => $userData]);
}

}
