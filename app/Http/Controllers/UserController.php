<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function edit(User $user){
        $validated = request()->validate(
           [
             'image' => 'image',
             'name' => 'required|min:40',
            'email' => 'required|min:40',
             'bio' => 'required|min:40',
          // return view('/User/edit-profile');
        ]
     );

    $user->update($validated);

   //  return redirect()->route('/User/update');


    }
    public function update(){
return view('/User/update');
    }
}
