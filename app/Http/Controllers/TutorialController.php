<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //
    public function index(Request $request, $sessid){
        return view('account.tutorial');
    }

    public function create(Request $request, $sessid, $tutorialid){
        return $request;
    }

    public function update(Request $request, $sessid, $tutorialid){
        return $request;
    }

    public function delete(Request $request, $sessid, $tutorialid){
        return $request;
    }

    public function get(Request $request, $sessid, $tutorialid){
        return $request;
    }
}
