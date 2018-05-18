<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(Request $request, $sessid){
        return view('account.lms');
    }

    public function create(Request $request, $sessid){
        return view('account.lms');
    }

    public function update(Request $request, $sessid, $courseid){
        return $request;
    }

    public function delete(Request $request, $sessid, $courseid){
        return $request;
    }

    public function get(Request $request, $sessid, $courseid){
        return $request;
    }

    public function show(Request $request){
        return $request;
    }

    public function showAll(Request $request){
        return $request;
    }

    public function getShow(Request $request, $courseid){
        return $request;
    }
}
