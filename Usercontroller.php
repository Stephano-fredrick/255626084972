<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class Usercontroller extends Controller
{


   public function login(Request $request) {

    $incomingFields=$request->validate([

    'name'=> ['required', 'min:3', 'max:10'],
        'email'=>['required', 'email'],
        'password'=>['required', 'min:8', 'max:20']
    ]);

$incomingFields['password']=bcrypt($incomingFields['password']);
   $user = user::create($incomingFields);
   auth()->login($user);
return redirect('/Home');
   }
}
