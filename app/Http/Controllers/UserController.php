<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function profileEdit(Request $request){
        return view('account.profile');
    }
}
