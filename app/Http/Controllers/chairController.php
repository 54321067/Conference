<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
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
        return redirect()->to('/chair/viewpaper/'.$check[0]->con_id);
        
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
        $name   = DB::table('conferall')->where('conid', '=', $id)->first();
        $ids    = DB::table('paper')->join('group','group.paper_id','paper.paper_id')->join('conferall','conferall.conid','paper.con_id')->where('conferall.conid',$id)->get();
        //score and name
        $infos=[];
        $paper=array();
        foreach ($values as $value) {
            $paper[] = $value->status_reviewer;
        }
        $items = array();
        foreach ($ids as $i) {
            if (is_null($i->Reviewer_id1) and is_null($i->Reviewer_id2) and is_null($i->Reviewer_id3)){
                $items[] = $i->paper_name;
                $items[] = $i->pdf_name;
                array_push($infos ,array('s1' => -99, 's2' => -99 , 's3' => -99 , 'n1' => '-', 'n2' => '' , 'n3' => '' ,'score' => -99,'paper_id'=>  $i->paper_id , 'topic' => $i->keyword1  , 'status_rv' => $i->status_reviewer ,'rank1' => '' ,'rank2' => '','rank3' => ''));
            


            }else{
                $name1 = DB::table('reviewer')->where('Id',$i->Reviewer_id1)->first();
                $name2 = DB::table('reviewer')->where('Id',$i->Reviewer_id2)->first();
                $name3 = DB::table('reviewer')->where('Id',$i->Reviewer_id3)->first();
                $items[] = $i->paper_name;
                $items[] = $i->pdf_name;
                array_push($infos ,array('s1' => $i->score_1, 's2' => $i->score_2 , 's3' => $i->score_3 , 'n1' => $name1, 'n2' => $name2 , 'n3' => $name3 ,'score' => $i->status_score,'paper_id'=>  $i->paper_id , 'topic' => $i->keyword1  , 'status_rv' => $i->status_reviewer ,'rank1' => $name1->Rank ,'rank2' => $name2->Rank,'rank3' => $name3->Rank,'check' =>$i->status_check ));
            }
            
        }
        //return response()->json($infos);
        //foreach ($infos as $in) {
        //    echo(response()->json($in['n1']));
        //}
        //return response()->json($items);
        //return response()->json($nrv);
        //'rv1' => $id->score_1, 'rv2' => $id->score_2 , 'rv3' => $id->score_3]
        
        return view('chaircon.chairview',compact('infos'))->with('names',$name)->with('id',$id)->with('values',$values)->with('items',$items)->with('paper',$paper);
        
        
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
        //1.insert reviewer
    
        $C1=DB::table('reviewer')->where('Name','=',$request->input('name1'))->where('Lname','=',$request->input('lname1'))->where('Number_people',$request->input('mail1'))->count();
        $C2=DB::table('reviewer')->where('Name','=',$request->input('name2'))->where('Lname','=',$request->input('lname2'))->where('Number_people',$request->input('mail2'))->count();
        $C3=DB::table('reviewer')->where('Name','=',$request->input('name3'))->where('Lname','=',$request->input('lname3'))->where('Number_people',$request->input('mail3'))->count();  
        $i1=0;$i2=0;$i3=0;
        if($C1 <= 0  ){
            DB::table('reviewer')->insert(['Name'=>$request->input('name1'),'Lname'=>$request->input('lname1'),'Email'=>$request->input('mail1'),'Number_people'=>$request->input('PID1'),'Rank'=>$request->input('rank1'),'Cellphone'=>$request->input('phone1'),'created_at'=> new \dateTime,'updated_at'  => new \dateTime]);
            $rvid = DB::table('reviewer')->max('Id');
            $add1 = DB::table('reviewer')->where('Id',$rvid)->get();
            //return response()->json($add1);
            $i1 = $add1[0]->Id;
 
        }else{
             $check = DB::table('reviewer')->where('Name','=',$request->input('name1'))->where('Lname','=',$request->input('lname1'))->get();
             $i1 = $check[0]->Id;
        }

        if($C2 <=0 ){
            DB::table('reviewer')->insert(['Name'=>$request->input('name2'),'Lname'=>$request->input('lname2'),'Email'=>$request->input('mail2'),'Number_people'=>$request->input('PID2'),'Rank'=>$request->input('rank2'),'Cellphone'=>$request->input('phone2'),'created_at'=> new \dateTime,'updated_at'  => new \dateTime]
         );
             $rvid = DB::table('reviewer')->max('Id');
             $add2 = DB::table('reviewer')->where('Id',$rvid)->get();
             $i2 = $add2[0]->Id;
         }else{
             $check2 = DB::table('reviewer')->where('Name','=',$request->input('name2'))->where('Lname','=',$request->input('lname2'))->get();
             $i2 = $check2[0]->Id;
         }
 
         if($C3 <=0 ){
            DB::table('reviewer')->insert(['Name'=>$request->input('name3'),'Lname'=>$request->input('lname3'),'Email'=>$request->input('mail3'),'Number_people'=>$request->input('PID3'),'Rank'=>$request->input('rank3'),'Cellphone'=>$request->input('phone3'),'created_at'=> new \dateTime,'updated_at'  => new \dateTime]      
         );     
            $rvid = DB::table('reviewer')->max('Id');
            $add3 = DB::table('reviewer')->where('Id',$rvid)->get();
            $i3 = $add3[0]->Id;
         }else{
             $check3 = DB::table('reviewer')->where('Name','=',$request->input('name3'))->where('Lname','=',$request->input('lname3'))->get();
             $i3 =  $check3[0]->Id;
         }

        //2.update reviewer
        DB::table('group')->where('paper_id',$id)->update(
            ['Reviewer_id1' => $i1 ,'Reviewer_id2' => $i2 ,'Reviewer_id3' => $i3]
        );
         //3.update group_id and status_reviewer of paper table
        $groupid = DB::table('group')->where('paper_id',$id)->get();
        DB::table('paper')->where('paper_id',$id)->update(
            ['Group_id'=>$groupid[0]->Group_id,'status_reviewer'=>1,'updated_at'  => new \dateTime]
        );
        //5.send email to reviewers
        $email = $request->input('mail1');
        $email2 = $request->input('mail2');
        $email3 = $request->input('mail3');
        $data = array('0'=> '','1' => '', '2' => '');
        $data['0'] = 'http://localhost:8000/list/evaluation/'.$groupid[0]->Group_id.'/'.$i1;
        $data['1'] = 'http://localhost:8000/list/evaluation/'.$groupid[0]->Group_id.'/'.$i2;
        $data['2'] = 'http://localhost:8000/list/evaluation/'.$groupid[0]->Group_id.'/'.$i3;
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
        return redirect()->route('chaircon.adminchair');
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
