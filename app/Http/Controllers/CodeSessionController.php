<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeSessionController extends Controller
{
    //

    public function index(Request $request, $sessid ){
        return view('account.lms');
    }
}
