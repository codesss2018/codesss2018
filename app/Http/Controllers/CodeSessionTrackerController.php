<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeSessionTrackerController extends Controller
{
    //

    public function intructorJoins(Request $request, $sessid){

        $inst = [];
        foreach ($request->all()['instructors'] as $key => $value) {
            $inst[] = ['user_id'=>(int)$value,'session_id'=>(int)$sessid];
        }
        \App\CodeSessionTracker::insert($inst);
        return redirect()->route('session-edit',['sessid'=>$sessid]);
    }

    public function intructorRemoves(Request $request, $sessid){

        \App\CodeSessionTracker::where('session_id',$sessid)->whereIn('user_id',$request->all()['instructors'])->delete();
        return redirect()->route('session-edit',['sessid'=>$sessid]);
    }
}
