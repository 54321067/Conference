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
         
    public function getscore(Request $request,$id){
        $check = DB::table('paper')->where('paper_id',$id)->get();
        if ($check[0]->status_score == -99) {
                   DB::table('paper')->where('paper_id',$id)->update(['status_score'=>$request->input('throughput'),'updated_at'  => new \dateTime]);
        }
        return redirect()->to('/chairhome');
        
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
        if ($values[0]->status_reviewer == 1) {
            return redirect()->to('/chairhome');
        }
        return view('chaircon.choosereviewer')->with('id',$id)
                                                    ->with('values',$values);
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
        $data['0'] = 'http://localhost:8000/list/evaluation/'.$groupid.'/'.$i1;
        $data['1'] = 'http://localhost:8000/list/evaluation/'.$groupid.'/'.$i2;
        $data['2'] = 'http://localhost:8000/list/evaluation/'.$groupid.'/'.$i3;
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
        return redirect()->to('/chairhome');
    }
    public function assessment($id)
    {   
        $check = DB::table('paper')->where('paper_id',$id)->get();
        if ($check[0]->status_score == -99) {
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
        return redirect()->to('/chairhome');
    }
   
}
