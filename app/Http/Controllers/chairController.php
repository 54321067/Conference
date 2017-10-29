<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Form;
use App\confer;
use Auth;
use DB;
use Mail;
class chairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('chair');
    }

    public function  home()
    {
        return view('chaircon.home');
    }

    public function index()
    {
        $Professor = DB::table('users')->where('status','admin')->get();
        return view('chaircon.index')->with('admins',$Professor);
    }
    public function info($id)
    {
        $admininfo = DB::table('users')->where('id',$id)->get();
        return view('chaircon.i1')->with('infos',$admininfo);
    }
    public function droppaper($id)
    {
        
    }
    public function dropadmin($id)
    {
        $destroy = DB::table('users')->where('id',$id)->delete(); 
        $Professor = DB::table('users')->where('status','admin')->get();
        return view('chaircon.index')->with('admins',$Professor);
    }
     public function chair()
    {
        $con = DB::table('conferall')->where('chair_id',Auth::user()->id)->count(); 
        $paper = DB::table('paper')->count();
        $unreview = DB::table('paper')->where('paper.status_reviewer','=','0')->count();
        $unpay = DB::table('paper')->where('paper.status_payment','=','0')->count();
        return view('chaircon.path')->with('unreviews',$unreview)->with('unpays',$unpay)->with('cons',$con)->with('papers',$paper);
    }
    public function getscore(Request $request){
        
    }
 
    public function chairhome()
    {
        
        $conference = DB::table('conferall')->where('chair_id',Auth::user()->id)->get();
        return view('chaircon.chairhome')->with('conferences',$conference);
    }

    public function aboutConference($id)
    {
        $con = confer::find($id);
        return view('chaircon.chairinfo')->with('con',$con);
    }
    public function preview($name)
    {
        $pathToFile = '/file/'.$name;
        return response()->file(public_path($pathToFile));
    }
    public function viewpaper($id)
    {
        $values = DB::table('paper')->where('con_id',$id)->get();
        $name  = DB::table('conferall')->where('conid', '=', $id)->first();

        return view('chaircon.chairview',['names'=>$name,'id'=>$id,'values'=>$values]);
        
        
    }
    public function choosereviewer($id,$conid)
    {
        $name = DB::table('conferall')->where('conid', '=', $conid)->first();
        $values = DB::table('paper')->where('paper_id',$id)->get();
        return view('chaircon.choosereviewer')->with('id',$id)
                                                    ->with('values',$values);
    }
    public function install()
    {
    
        return view('chaircon.installcfs');
    }
    public function storechair(Request $request)
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

        
        return redirect()->to('/chairhome');
    }
    public function table()
    {
        $Teachs = Teach::get();
        return view('chaircon.tables')->with('Teach',$Teachs);
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
    public function assessment($id)
    {   
        $paper=DB::table('paper')->where('paper_id',$id)->get();
        $group=DB::table('group')->where('paper_id',$id)->get();
        $reviewer1=DB::table('reviewer')->where('Id',$group[0]->Reviewer_id1)->get();
        $reviewer2=DB::table('reviewer')->where('Id',$group[0]->Reviewer_id2)->get();
        $reviewer3=DB::table('reviewer')->where('Id',$group[0]->Reviewer_id3)->get();
        return view('chaircon.assessment')  ->with('paper',$paper)
                                            ->with('group',$group)
                                            ->with('reviewer1',$reviewer1)
                                            ->with('reviewer2',$reviewer2)
                                            ->with('reviewer3',$reviewer3);
    }
   
}
