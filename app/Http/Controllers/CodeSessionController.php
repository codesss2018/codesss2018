<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeSessionController extends Controller
{
    //

    public function index(Request $request, $sessid ){
        $user = $request->user();
        $count = $user->code_session_trackers()->where('session_id',(int)$sessid)->count();
        $activecodesession = \App\CodeSession::orderBy('start_date','desc')->first();
        //get courses user has registered for within this session
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course')
                        ->where('session_id',(int)$sessid);
        // dd($usercourses);
        $userforum = \App\Comment::whereIn('course_id',$usercourses->pluck('id')
                    ->all())
                    ->with(['course','user'])
                    ->get();
        $userquizzes = $user->quiz_trackers()
                        ->with('quiz')
                        ->get()
                        ->pluck('quiz')
                        ->whereIn('course_id',$usercourses->pluck('id')
                        ->all());
        $account = compact('user',
                            'usercourses',
                            'userforum',
                            'userquizzes',
                            'sessid'
                        );
        // return $account;
        if ($count > 0) {
            return view('account.lms',$account);
        }else{

            if ($activecodesession->id == $sessid) {
                return redirect()->route('account');
            } else {
                return view('account.lms',$account);
            }

        }

    }

    public function join(Request $request, $sessid){
        $user = $request->user();
        $count = $user->code_session_trackers()->where('session_id',(int)$sessid)->count();
        if (!($count > 0)) {
            $user->code_session_trackers()->create(['session_id'=>(int)$sessid]);
        }
        return redirect()->route('account');
    }
}
