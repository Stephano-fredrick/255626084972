<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function addRating(Request $request){

if ($request->isMethod('post')){

    $data= $request->all();
    if(!Auth::check()){

        $messsage = "Loging to rate this product";
        Session::flash('error_message', $messsage);
        return redirect('/Home');
    }
}



    }
}
