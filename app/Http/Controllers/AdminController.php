<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Form;
use App\confer;
use Auth;
use DB;
use Mail;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
    }

    public function  home()
    {
        return view('adminconference.home');
    }

    public function index()
    {
        $Professor = DB::table('users')->where('status','admin')->get();
        $i=1;
        if ($Professor->isEmpty()) {
            $i=0;
        }
        //return response()->json($Professor->isEmpty());
        return view('adminconference.index')->with('admins',$Professor)->with('i',$i);
    }
    public function info($id)
    {
        $admininfo = DB::table('users')->where('id',$id)->get();
        $a = DB::table('conferall')->where('own_id',$id)->count();
        return view('adminconference.i1')->with('infos',$admininfo)->with('count',$a);
    }
    public function dropadmin($id)
    {
        $destroy = DB::table('users')->where('id',$id)->delete(); 
        $Professor = DB::table('users')->where('status','admin')->get();
        return redirect()->route('adminconference.index');
    }
     public function admin()
    {
        $count1 =0;$count2=0;
        if (Auth::user()->status == 'superadmin') {
            $con = DB::table('conferall')->count(); 
            $paper = DB::table('paper')->count();
            $unpay = DB::table('paper')->where('paper.status_send','=','1')->count();
            $count1 =$con;$count2=$paper;
        }else{
            $con = DB::table('conferall')->where('own_id',Auth::user()->id)->get();
            $box1 = array(); 
            foreach ($con as $key) {
                $box1[] = $key->conid;
                $count1++;            
            }
            $paper = DB::table('paper')->whereIn('con_id',$box1)->get();
            $box2 = array(); 
            foreach ($paper as $key) {
                $box2[] = $key->con_id;
                $count2++;            
            }
            $unpay = DB::table('paper')->whereIn('paper_id',$box2)->where('paper.status_send','=','1')->count();
        }
        return view('adminconference.path')->with('unpays',$unpay)->with('cons',$count1)->with('papers',$count2);
    }
 
    public function adminhome()
    {
         //phpinfo();
        //date_default_timezone_set("Asia/Bangkok");
        //return response()->json(date("Y-m-d h:i:sa"));
        if (Auth::user()->status == 'superadmin'){
            $conference = DB::table('conferall')->get();
            //return response()->json([date("Y-m-d h:i:sa", $a) < date("Y-m-d h:i:sa")]);
        }else{
            $conference = DB::table('conferall')->where('own_id',Auth::user()->id)->get();
        }
        
        return view('adminconference.adminhome')->with('conferences',$conference);
    }
    public function aboutConference($id)
    {
        $con = confer::find($id);
        if(Auth::user()->status == 'superadmin') {
            $admin = DB::table('users')->where('id',$con->own_id)->get();
            if ($admin->isEmpty()) { // superadmin is creater conference.
                $admin = DB::table('users')->where('id',Auth::user()->id)->get();
                return view('adminconference.aboutConference')->with('con',$con)->with('admin',$admin);
            }
            //return response()->json($admin->isEmpty());
            return view('adminconference.aboutConference')->with('con',$con)->with('admin',$admin);
            
        }else{
            return view('adminconference.aboutConference')->with('con',$con);
        }
        
    }
    public function preview($name)
    {
        $pathToFile = '/file/'.$name;
        return response()->file(public_path($pathToFile));
    }
    public function viewpaper($id)
    {
        $value = DB::table('paper')->where('con_id', '=', $id)->get();
        $name = DB::table('conferall')->where('conid', '=', $id)->first();
        return view('adminconference.viewpaper',['names'=>$name,'id'=>$id,'values'=>$value]);
    }
    public function install()
    {
        $chairs = DB::table('users')->where('status', '=', 'chair')->get();
        return view('adminconference.installcfs',['chair'=>$chairs]);
    }
    public function store(Request $request)
    {
        $store = new confer;
        $main  = $request->input('main');
        $sub  = $request->input('subcon');
        //$strmain = array();
        //return response()->json(implode(" ",$strmain));
        $topics1 = implode(",",$main);
        $topics2 = implode(",", $sub);
        $store->name = $request->input('type');
        $store->Acronym_N = $request->input('name');
        $store->Acronym_L = $request->input('subname');
        $store->Loca = $request->input('locate');
        $store->Content = $request->input('maincontent');
        $store->Content = $request->input('chair');
        $store->Detail = $request->input('detail');
        $store->D_Line = $request->input('deadlinetime');
        $store->R_Line = $request->input('completetime');
        $store->S_Line = $request->input('showtime');
        $store->Y_Line = $request->input('i9');
        $store->topic_1    = $topics1;
        $store->topic_2    = $topics2;
        $store->chair_id = $request->input('chair');
        $id = Auth::user()->id;
        $store->own_id  = $id;
        $store->save();

        
        return redirect()->route('adminconference.adminhome');
    }
    public function setpayment($id,$conid){
        DB::table('paper')->where('paper_id',$id)->update(['status_payment'=>1]);
        return redirect()->route('adminconference.viewpaper', ['id' => $conid]);
    }
    public function resetpayment($id,$conid){
        DB::table('paper')->where('paper_id',$id)->update(['status_send'=>0]);
        return redirect()->route('adminconference.viewpaper', ['id' => $conid]);
    }
    public function table()
    {
        $Teachs = Teach::get();
        return view('adminconference.tables')->with('Teach',$Teachs);
    }
    public function edit($id)
    {
        $Projects = Project::find($id);
        return view('moviegod.edit')->with('Project',$Projects);
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

    public function destroy($id)
    {
        $old = DB::table('conferall')->where('conid',$id)->first();
        DB::table('oldconference')->insert(['name'=> $old->name ,'Acronym_N'=> $old->Acronym_N ,'Acronym_L'=>$old->Acronym_L,'Loca'=>$old->Loca,'Content'=>$old->Content,'Detail'=>$old->Detail,'D_Line'=>$old->D_Line,'R_Line'=>$old->R_Line,'S_Line'=>$old->S_Line,'Y_Line'=>$old->Y_Line,'topic_1'=>$old->topic_1,'topic_2'=>$old->topic_2,'created_at'=> new \dateTime,
        'updated_at'  => new \dateTime]);
        $destroy = confer::where('conid',$id)->delete();
        return redirect()->to('/adminhome');
    }
    
    
   
}
