<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReviewerController extends Controller
{
    public function  evaluation(Request $request,$id,$id2)
    {
    	//find reviewer'st
    	$p1 = DB::table('group')->where('Group_id',$id)->where('Reviewer_id1',$id2)->count();
    	$p2 = DB::table('group')->where('Group_id',$id)->where('Reviewer_id2',$id2)->count();
    	$p3 = DB::table('group')->where('Group_id',$id)->where('Reviewer_id3',$id2)->count();
    	$R1 = DB::table('paper')->where('group_id',$id)->get();
    	if($p1){
    		DB::table('group')->where('Group_id',$id)->update(['score_1'=> $request->input('frequency')]);
    	}elseif ($p2) {
    		DB::table('group')->where('Group_id',$id)->update(['score_2'=> $request->input('frequency')]);
    	}elseif($p3){
    		DB::table('group')->where('Group_id',$id)->update(['score_3'=> $request->input('frequency')]);
    	}
    	

        return view("adminconference.evaluation")->with('groupid',$id)->with('id',$id2)->with('paper',$R1);
    }
    public function view($id,$id2)
    {
        $R1 = DB::table('paper')->where('group_id',$id)->get();
        return view('adminconference.evaluation')->with('groupid',$id)->with('id',$id2)->with('paper',$R1);
    }
}
