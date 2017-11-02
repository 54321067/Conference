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
    		DB::table('group')->where('Group_id',$id)->update(['score_1'=> $request->input('frequency'),'rating_1'=>$request->input('Overall'),'Presentation_1'=>$request->input('Presentation'),'Relevance_1'=>$request->input('Relevance'),'Technical_1'=>$request->input('Technical'),'comment_1'=>$request->input('comment')]);
    	}elseif ($p2) {
    		DB::table('group')->where('Group_id',$id)->update(['score_2'=> $request->input('frequency'),'rating_2'=>$request->input('Overall'),'Presentation_2'=>$request->input('Presentation'),'Relevance_2'=>$request->input('Relevance'),'Technical_2'=>$request->input('Technical'),'comment_2'=>$request->input('comment')]);
    	}elseif($p3){
    		DB::table('group')->where('Group_id',$id)->update(['score_3'=> $request->input('frequency'),'rating_3'=>$request->input('Overall'),'Presentation_3'=>$request->input('Presentation'),'Relevance_3'=>$request->input('Relevance'),'Technical_3'=>$request->input('Technical'),'comment_3'=>$request->input('comment')]);
    	}

        $paperid=DB::table('group')->where('group_id',$id)->select('paper_id')->get();
        
        DB::table('paper')->where('Group_id',$id)->update(['status_check'=> DB::raw('status_check+1') ]);
    	

        return redirect()->to('/home');
    }
    public function view($id,$id2)
    {
        //select paper 
        $p = DB::table('paper')->where('group_id',$id)->get();
        $R2 = DB::table('reviewer')->where('Id',$id2)->get();
        return view('cfs.bank')->with('groupid',$id)->with('id',$id2)->with('paper',$p)->with('R',$R2);
    }
    
    public function getchair($id,$id2){
        $value = DB::table('conferall')->get();
        return view('cfs.homecon')->with('values',$value);
    }

}
