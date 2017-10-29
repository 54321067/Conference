<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paper_form;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use PDF;    
class PaperController extends Controller
{
     public function gotosubmition()
    {  

        $userid= Auth::user()->id;
        $value = DB::table('conferall')->join('paper', 'paper.con_id', '=', 'conferall.conid')
        ->where('paper.user_id',$userid)
        ->select('conferall.*')->distinct()
        ->get();
        $paper = DB::table('paper')->get();
        return view('cfs.mySubmition',['values' => $value,'papers' => $paper,'userid'=>$userid]);
    }
    public function gotopaperdetail($id,$pname,$paperid)
    {   
        //update group table
        

        $conuser = DB::table('conferall')->where('conid', '=', $id)->distinct('Acronym_N')->get();
        $papers = DB::table('paper')->where('paper_id','=',$paperid)->first();
        $score = DB::table('group')->where('paper_id', '=',$paperid )->select('score_1','score_2','score_3')->get();

        
            
        
        
        return view('cfs.paperDetails',['paper' => $papers,'idpaper' => $id, 'namepaper' => $pname,'vb' => $conuser])->with('test',$score);
    }
    public function myinfo(){
        return view('cfs.account');
    }
    public function viewPaymentPDF($id,$pname)
    {
        $paper = DB::table("paper")->where('paper.paper_id','=',$id)->get();
        $pdf = PDF::loadView('cfs.payment', compact('paper'));
        return $pdf->stream('invoice.pdf');
    }
     public function  coninfo($id)
    {
        $value = DB::table('conferall')->where('conid',$id)->first();
        return view('cfs.coninfo')->with('con',$value)->with('id',$id);
    }

    public function Reviewer()
    {
        return view('cfs.Reviewer');
    }

    // public function show($id)
    // {
    // 	$Teachs = Teach::find($id);
    //     $Movies = Movie::get();
    // 	return view('moviegod.i1')->with('Teach',$Teachs)->with('Movies',$Movies);
    // }


    public function viewpaper($id)
    {
        $con = DB::table('conferall')->where('conid',$id)->first();
        return view('cfs.paperform')->with('con',$con);
    }
    public function store(Request $request,$id)
    {
       //$data = explode(",", $full);
        $file = Input::file('attachmentName');
        $namefile = Input::file('attachmentName')->getClientOriginalName();
        
        DB::table('paper')->insertGetId(
            [
                'paper_name'    => $request->input('paper-name'), 
                'writer_name'   => $request->input('writer-name'),
                'keyword1'      => $request->input('tags'),
                'pdf_name'      => $namefile,
                'con_id'        => $id,
                'user_id'       => Auth::user()->id,
                'add_keyword1'  => $request->input('add-keyword1'),
                'add_keyword2'  => $request->input('add-keyword2'),
                'add_keyword3'  => $request->input('add-keyword3'),
                'created_at'    => new \dateTime,
                'updated_at'    => new \dateTime,
            ]
        );

        $idpaper = DB::table('paper')->max('paper_id');
        $name =  $idpaper.'_'.$namefile;
        DB::table('paper')->where('paper_id',$idpaper)->update(['pdf_name' => $name]);
        $file->move('file',$name);


        $value = DB::table('conferall')->get();
        return view('cfs.homecon')->with('values',$value);
    
    }


    public function update($id, Request $request)
    {
    	$update = Movie::find($id);
    	$update->MovieName = $request->input('MovieName');
    	$update->MovieDescription = $request->input('MovieDescription');
        $update->MovieAddress= $request->input('MovieAddress');
        $update->MovieImage = $request->input('MovieImage');
    	$update->save();

    	return redirect()->to('/list/admin');
    }

    public function conall()
    {
        $value = DB::table('conferall')->get();
        return view('cfs.homecon')->with('values',$value);
    }
    
    /*public function show()
    {
        return view('moviegod.tshome');
    }*/
}
