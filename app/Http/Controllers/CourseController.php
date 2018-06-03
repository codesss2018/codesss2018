<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(Request $request){
        $user = $request->user();
        $data = compact('user');
        return view('account.course-list',$data);
    }

    public function mySession(Request $request, $sessid){
        //get user
        $user = $request->user();
        if ((int)$request->session()->get('user_mode',1) === 1) {
            $usercourses = $user->course_trackers()
                            ->with('course')
                            ->get()
                            ->pluck('course')
                            ->where('session_id',(int)$sessid);
        }else{
            $usercourses = $user->courses()
                            ->where('session_id',(int)$sessid)
                            ->get();
        }

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

    public function appEditor(Request $request, $sessid, $courseid = NULL){
        $user = $request->user();
        $usercourses = $user->course_trackers()
                        ->with('course')
                        ->get()
                        ->pluck('course');
        if (!$courseid) {
            $toEdit = False;
            $course = "";
            
        }else{
            $toEdit = True;
            $course = \App\Course::where('id',(int)$courseid)->first();
        }
        $activepage = 'course';
        $account = compact('user',
                            'usercourses',
                            'activepage',
                            'course',
                            'sessid',
                            'toEdit'
                        );
        // return $account;
        return view('account.course-app-editor',$account);
    }

    public function create(Request $request){
        $newdata = $request->all();
        $newdata['code'] = "abc";
        $newdata['certificate_id'] = 1;
        $newdata['structure'] = json_encode("");
        $newdata['user_id'] = $request->user()->id;
        // return $newdata;
        try {
            $id = \App\Course::insertGetId($newdata);
        } catch (\Exception $e) {
            return $e;
        }


        if ($id) {
            $data = ['status'=>true,'url'=>"/account/session/{$newdata['session_id']}/define/course/{$id}"];
        }else{
            $data = ['status'=>false];
        }

        return $data;
    }

    public function update(Request $request, $sessid, $courseid){
        return $request;
    }

    public function delete(Request $request, $sessid, $courseid){
        return $request;
    }

    public function detail(Request $request, $sessid, $courseid){
        $user = $request->user();
        $data = compact('user');
        return view('account.course',$data);
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
