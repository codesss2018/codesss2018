<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','ensurelevel']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        //get user
        $user = $request->user();
        //get active codesession
        $activecodesession = [\App\CodeSession::orderBy('start_date','desc')->first()];
        //get sessions user has participated for
        $usercodesessions = $user->code_session_trackers()
                            ->with('code_session')
                            ->get()
                            ->pluck('code_session');
        //determine whether user is registered for current session
        $isusercurrentsession = $usercodesessions->contains($activecodesession[0]);
        $codesessions = \App\CodeSession::all();
        //get current courses user has registered for regardless of the current session
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course');

        //get latest forum activities
        // $forum = \App\Comment::all();
        $userforum = \App\Comment::whereIn('course_id',$usercourses->pluck('id')
                    ->all())
                    ->with(['course','user'])
                    ->get();
        // $a = $usercourses->pluck('id')->all();
        //get all user acquired certificates
        $usercerts = $user->certificate_trackers()
                    ->with('certificate')
                    ->get()
                    ->pluck('certificate');
        $activepage = 'dash';
        $account = compact('user',
                            'isusercurrentsession',
                            'activecodesession',
                            'codesessions',
                            'usercourses',
                            'userforum',
                            'usercerts',
                            'activepage'
                        );

        return view('account.dashboard',$account);
        return $account;
    }

    public function mode(Request $request, $mode){
        $user = $request->user();
        if ($user->type >= (int)$mode) {
            $request->session()->put('user_mode',$mode);
        }

        return redirect()->route('account');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home',['page'=>'home']);
    }
}
