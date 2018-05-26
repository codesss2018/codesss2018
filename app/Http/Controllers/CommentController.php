<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function index(Request $request, $sessid){
        $user = $request->user();
        $categories = \App\CourseTracker::where('user_id',$user->id)
                    ->with('course')
                    ->get()
                    ->pluck('course')
                    ->where('session_id',$sessid);
        $categories = $categories->each(function ($item, $key) {
            return $item->load('comments');
        });
        $data = compact('user','sessid','categories');
        return view('account.forum',$data);
    }

    public function course(Request $request, $sessid, $courseid){
        $user = $request->user();
        $course = \App\Course::find($courseid);
        $categories = \App\CourseTracker::where('user_id',$user->id)
                    ->with('course')
                    ->get()
                    ->pluck('course')
                    ->where('session_id',(int)$sessid);
        $comments = \App\Comment::where('course_id', (int)$courseid)
        ->with('user')
        ->get();
        $data = compact('user','course','comments','sessid','categories');
        // return $data;
        return view('account.forum-course',$data);
    }

    public function courseFace(Request $request, $courseid){
        $course = \App\Course::find((int) $courseid);
        $urlparams = [
            'sessid'=> $course->session_id,
            'courseid'=>(int) $courseid
        ];
        return redirect()->route('course-comments',$urlparams);
    }

    public function thread(Request $request, $sessid, $courseid, $commentid){
        return view('account.forum-thread');
    }

    public function threadFace(Request $request, $commentid){
        $comment = \App\Comment::find((int)$commentid);
        $course = $comment->course()->get()->first();
        $urlparams = [
            'commentid' => (int)$commentid,
            'sessid' => $course->session_id,
            'courseid' => $course->id
        ];

        return redirect()->route('thread-comments',$urlparams);
    }

    public function create(Request $request, $sessid, $commentid){
        return $request;
    }

    public function update(Request $request, $sessid, $commentid){
        return $request;
    }

    public function delete(Request $request, $sessid, $commentid){
        return $request;
    }

    public function get(Request $request, $sessid, $commentid){
        return $request;
    }
}
