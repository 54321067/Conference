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
    public function  evaluation()
    {
        return view('adminconference.evaluation');
    }

    public function index()
    {
        $Professor = DB::table('users')->where('status','admin')->get();
        return view('adminconference.index')->with('admins',$Professor);
    }
    public function info($id)
    {
        $admininfo = DB::table('users')->where('id',$id)->get();
        return view('adminconference.i1')->with('infos',$admininfo);
    }
    public function droppaper($id)
    {
        
    }
    public function dropadmin($id)
    {
        $destroy = DB::table('users')->where('id',$id)->delete(); 
        $Professor = DB::table('users')->where('status','admin')->get();
        return view('adminconference.index')->with('admins',$Professor);
    }
     public function admin()
    {
        $con = DB::table('conferall')->count(); 
        $paper = DB::table('paper')->count();
        $unreview = DB::table('paper')->where('paper.status_reviewer','=','0')->count();
        $unpay = DB::table('paper')->where('paper.status_payment','=','0')->count();
        return view('adminconference.path')->with('unreviews',$unreview)->with('unpays',$unpay)->with('cons',$con)->with('papers',$paper);
    }
  
 
    public function adminhome()
    {
        $conference = DB::table('conferall')->get();
        return view('adminconference.adminhome')->with('conferences',$conference);
    }

    // public function show($id)
    // {
    //  $Teachs = Teach::find($id);
    //     $Movies = Movie::get();
    //  return view('adminconference.i1')->with('Teach',$Teachs)->with('Movies',$Movies);
    // }

    public function aboutConference($id)
    {
        $con = confer::find($id);
        return view('adminconference.aboutConference')->with('con',$con);
    }
    public function viewpaper($id)
    {
        $value = DB::table('paper')->where('con_id', '=', $id)->get();
        $name = DB::table('conferall')->where('conid', '=', $id)->first();
        return view('adminconference.viewpaper',['names'=>$name,'id'=>$id,'values'=>$value]);
    }
    public function choosereviewer($id,$conid)
    {
        $name = DB::table('conferall')->where('conid', '=', $conid)->first();
        return view('adminconference.choosereviewer')->with('id',$id);
    }
    public function install()
    {
    
        return view('adminconference.installcfs');
    }
    public function store(Request $request)
    {
        $store = new confer;
        $main  = $request->input('main');
        $sub  = $request->input('subcon');
        $topics1 = explode(",",$main);
        $topics2 = explode(",", $sub);
        $store->name = $request->input('type');
        $store->Acronym_N = $request->input('name');
        $store->Acronym_L = $request->input('subname');
        $store->Loca = $request->input('locate');
        $store->Content = $request->input('maincontent');
        $store->Detail = $request->input('detail');
        $store->D_Line = $request->input('deadlinetime');
        $store->R_Line = $request->input('completetime');
        $store->S_Line = $request->input('showtime');
        $store->Y_Line = $request->input('i9');
        $store->topic_1    = $main;
        $store->topic_2    = $sub;
        
        $store->save();

        
        return redirect()->to('/adminhome');
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
        $destroy = confer::where('conid',$id)->delete();
        return redirect()->to('/adminhome');
    }
    public function review(Request $request,$id)
    {
        
       
    
        
        

        //1.before insert reviewer
        $C1=DB::table('reviewer')->where('Name','=',$request->input('A1'))->where('Lname','=',$request->input('A2'))->count();
        $C2=DB::table('reviewer')->where('Name','=',$request->input('B1'))->where('Lname','=',$request->input('B2'))->count();
        $C3=DB::table('reviewer')->where('Name','=',$request->input('C1'))->where('Lname','=',$request->input('C2'))->count();


        
        
        
        $i1=0;$i2=0;$i3=0;
        if($C1 <= 0  ){
            $add1 = DB::table('reviewer')->insert([
        'Name'=>$request->input('A1'),'Lname'=>$request->input('A2'),'Email'=>$request->input('A5'),'Number_people'=>$request->input('A4'),'Rank'=>$request->input('A3'),'Cellphone'=>$request->input('A6'),'created_at'=> new \dateTime,
        'updated_at'  => new \dateTime]
         );
            $i1 = $add1[0]->Id;

        }else{
            $check = DB::table('reviewer')->where('Name','=',$request->input('A1'))->where('Lname','=',$request->input('A2'))->get();
            $i1 = $check[0]->Id;
        }


        if($C2 <=0 ){
            $add2 = DB::table('reviewer')->insert(['Name'=>$request->input('B1'),'Lname'=>$request->input('B2'),'Email'=>$request->input('B5'),'Number_people'=>$request->input('B4'),'Rank'=>$request->input('B3'),'Cellphone'=>$request->input('B6'),'created_at'=> new \dateTime,
        'updated_at'  => new \dateTime]

        );
            $i2 = $add2[0]->Id;
        }else{
            $check2 = DB::table('reviewer')->where('Name','=',$request->input('B1'))->where('Lname','=',$request->input('B2'))->get();
            $i2 = $check2[0]->Id;
        }

        if($C3 <=0 ){
            $add3 = DB::table('reviewer')->insert(['Name'=>$request->input('C1'),'Lname'=>$request->input('C2'),'Email'=>$request->input('C5'),'Number_people'=>$request->input('C4'),'Rank'=>$request->input('C3'),'Cellphone'=>$request->input('C6'),'created_at'=> new \dateTime,
        'updated_at'  => new \dateTime]      
        );     
            $i3 = $add3[0]->Id;
        }else{
            $check3 = DB::table('reviewer')->where('Name','=',$request->input('C1'))->where('Lname','=',$request->input('C2'))->get();
            $i3 =  $check3[0]->Id;
        }

        //2.create group
        DB::table('group')->insert(
            ['paper_id'=>$id,'Reviewer_id1' => $i1 ,'Reviewer_id2' => $i2 ,'Reviewer_id3' => $i3 ,'created_at'=> new \dateTime,
        'updated_at'  => new \dateTime]
        );
         //3.update group_id of paper table
        $groupid = DB::table('group')->max('Group_id');
        DB::table('paper')->where('paper_id',$id)->update(
            ['Group_id'=>$groupid,'updated_at'  => new \dateTime]
        );

        //4.update status_reviewer of paper
        DB::table('paper')->where('paper_id',$id)->update(
            ['status_reviewer'=>1,'updated_at'  => new \dateTime]
        );

        //5.send email to reviewers
        $email = $request->input('A5');
        $email2 = $request->input('B5');
        $email3 = $request->input('C5');

        /*$reviewers = DB::table('reviewer')->where('Group_id',$groupid)->get();
        $i=0;
        foreach ($reviewers as $reviewerid) {
            if($i==0){
                    $id1=$reviewerid->;
            }elseif ($i==1) {
                    $id2=$reviewerid;
            }elseif($i==2) {
                    $id3=$reviewerid;
            }
            $i+=1;
        }*/
        $data = array('0'=> '','1' => '', '2' => '');
        $data['0'] = 'http://127.0.0.1:8000/get/'.$groupid.'/'.$i1;
        $data['1'] = 'http://127.0.0.1:8000/get/'.$groupid.'/'.$i2;
        $data['2'] = 'http://127.0.0.1:8000/get/'.$groupid.'/'.$i3;
            
        

         $data = array( 'email' => $email, 'link' => $data['0'],
                        'email2' => $email2, 'link2' => $data['1'],
                        'email3' => $email3, 'link3' => $data['2']);

        Mail::raw('', function ($message) use ($data){
                $message->to($data['email']);
                $message->from('somratza35677@gmail.com', 'Conference');
                $message->setBody('your link : '.$data['link'] );
                $message->subject('แจ้งเตือน:ถึงเวลาใช้งาน');
        });
        Mail::raw('', function ($message) use ($data){
                $message->to($data['email2']);
                $message->from('somratza35677@gmail.com', 'Conference');
                $message->setBody('your link : '.$data['link2'] );
                $message->subject('แจ้งเตือน:ถึงเวลาใช้งาน');
        });
        Mail::raw('', function ($message) use ($data){
                $message->to($data['email3']);
                $message->from('somratza35677@gmail.com', 'Conference');
                $message->setBody('your link : '.$data['link3'] );
                $message->subject('แจ้งเตือน:ถึงเวลาใช้งาน');
        });
        
        
        return redirect()->to('/adminhome');
    }
    
   
}
