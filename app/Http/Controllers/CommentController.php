<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function index(Request $request, $sessid){
        return view('account.forum');
    }

    public function course(Request $request, $sessid, $courseid){
        return view('account.forum-course');
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
