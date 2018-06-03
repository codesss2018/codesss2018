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
        if ((int)$request->session()->get('user_mode',1) === 1) {
            $usercourses = $user->course_trackers()
                            ->with('course')
                            ->get()
                            ->pluck('course')
                            ->where('session_id',(int)$sessid);
            $toEdit = false;
        }else{
            $usercourses = $user->courses()
                            ->where('session_id',(int)$sessid)
                            ->get();
            $toEdit = true;
        }
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

    public function create(Request $request){
        // dd($request);
        \App\CodeSession::create($request->all());
        return redirect()->route('account');
    }

    public function edit(Request $request, $sessid){
        if ($request->user()->type === 3 and (int)$request->session()->get('user_mode',1) === 3) {
            $user = $request->user();
            $activepage = '';
            $sess = \App\CodeSession::find($sessid);
            $structors = \App\CodeSessionTracker::where('session_id',$sessid)->select('user_id');
            $sesinstructors = \App\CodeSessionTracker::where('session_id',$sessid)->with('user')->get()->pluck('user')->whereIn('type',[2,3]);
            $instructors = \App\User::whereIn('type',[2,3])->whereNotIn('id',$structors)->get();
            $data = compact('sess','user','activepage','instructors','sesinstructors');
            // return $data;
            return view('account.session-edit',$data);
        }else{
            return redirect()->route('account');
        }
    }
}
