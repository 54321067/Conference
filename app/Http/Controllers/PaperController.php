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
    public function gotopaperdetail($id,$pname,$paperid,$i)
    {   
        //update group table
        

        $conuser = DB::table('conferall')->where('conid', '=', $id)->distinct('Acronym_N')->get();
        $papers = DB::table('paper')->where('paper_id','=',$paperid)->first();
        $score = DB::table('group')->where('paper_id', '=',$paperid )->select('score_1','score_2','score_3')->get();

        
            
        
        
        return view('cfs.paperDetails',['paper' => $papers,'idpaper' => $paperid, 'namepaper' => $pname,'vb' => $conuser])->with('test',$score)->with('i',$i);
    }
    public function myinfo(){
        $user = DB::table("users")->where('id',Auth::user()->id)->get();
        return view('cfs.account')->with('user',$user);
    }
    public function viewPaymentPDF($id,$pname)
    {
        $paper = DB::table("users")->join('paper','paper.user_id','=','users.id')->where('id',Auth::user()->id)->where('paper.paper_id',$id)->get();
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

    public function preview($name)
    {
        $pathToFile = '/file/'.$name;
        return response()->file(public_path($pathToFile));
    }

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
        date_default_timezone_set("Asia/Bangkok");
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
                'created_at'    => date("Y-m-d h:i:sa"),
                'updated_at'    => date("Y-m-d h:i:sa"),
            ]
        );

        $idpaper = DB::table('paper')->max('paper_id');
        DB::table('group')->insert(
            ['paper_id'=>$idpaper  ,'created_at'=> date("Y-m-d h:i:sa")]
        );
        $name =  $idpaper.'_'.$namefile;
        DB::table('paper')->where('paper_id',$idpaper)->update(['pdf_name' => $name]);
        $file->move('file',$name);
        return redirect()->route('cfs.Mysubmition');
    
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
    public function upload($id){
        date_default_timezone_set("Asia/Bangkok");
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('file', $file->getClientOriginalName()); 
        }
        DB::table('paper')->where('paper_id',$id)->update(
            ['image_payment'=>$file->getClientOriginalName(),'updated_at'  => date("Y-m-d h:i:sa"),'status_send'=>1]);

        return redirect()->to('/Mysubmition');   
    }
}
