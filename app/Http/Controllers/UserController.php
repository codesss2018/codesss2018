<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function profileEdit(Request $request){
        //get user
        $user = $request->user();
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course');
        $activepage = 'prof';
        $account = compact('user',
                            'usercourses',
                            'activepage'
                        );
        return view('account.profile',$account);
    }
}
