<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(Request $request){

        return view('account.course-list');
    }

    public function mySession(Request $request, $sessid){
        //get user
        $user = $request->user();
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course')
                        ->where('session_id',(int)$sessid);
        $activepage = 'course';
        $account = compact('user',
                            'usercourses',
                            'activepage',
                            'sessid'
                        );
        return view('account.session-course-list',$account);
    }

    public function my(Request $request){
        //get user
        $user = $request->user();
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course');
        $activepage = 'course';
        $account = compact('user',
                            'usercourses',
                            'activepage'
                        );
        return view('account.my-course-list',$account);
    }

    public function dashboardEditor(Request $request){
        $user = $request->user();
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course');
        $activepage = 'course';
        $account = compact('user',
                            'usercourses',
                            'activepage'
                        );
        return view('account.course-dashboard-editor',$account);
    }

    public function appEditor(Request $request){
        return view('account.course-app-editor');
    }

    public function create(Request $request, $sessid){
        return $request;
    }

    public function update(Request $request, $sessid, $courseid){
        return $request;
    }

    public function delete(Request $request, $sessid, $courseid){
        return $request;
    }

    public function detail(Request $request, $sessid, $courseid){
        return view('account.course');
    }

    public function detailFace(Request $request, $courseid){
        $course = \App\Course::find((int) $courseid);
        $urlparams = [
            'sessid'=> $course->session_id,
            'courseid'=>(int) $courseid
        ];
        return redirect()->route('course',$urlparams);
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
