<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback(){
        $user = Socialite::driver('goggle')->user();
        $findUser = User::where('google_id',$user->id)->first();
        if($findUser) {
         Auth::login($findUser);
        } else {
            $user = User::updateOrCreate([
                'email' => $user->email,
            ], [
                'name' => $user->name,
             //   'email' => $githubUser->email,
                'google_id' => $user->id,
                'password' => encrypt('123456789'),
            ]);

                Auth::login($user);
        }
        return redirect()->intended('home');


    }
}
