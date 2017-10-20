<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Teach;
use App\Project;
use App\Form;
use App\confer;
use Auth;

class ProjectController extends Controller
{
   
    public function  myConference()
    {
        return view('adminconference.myConference');
    }
    public function  home()
    {
        return view('adminconference.home');
    }
    public function  evaluation()
    {
        return view('adminconference.evaluation');
    }
    
     public function  coninfo()
    {
        return view('cfs.coninfo');
    }
    public function  infoConference()
    {
        
        return view('adminconference.infoConference');
    }
    public function savewait()
    {
        return view('adminconference.save_waiting');
    }
    public function contact()
    {
        return view('adminconference.contact');
    }
    public function about()
    {
        return view('adminconference.about');
    }
    public function views()
    {
        return view('adminconference.view');
    }

    public function index()
    {
    	//$Professor = Teach::get();
    	return view('adminconference.index');
        //->with('Teachs',$Professor);
    }
     public function admin()
    {
        $Projects = Project::get();
        return view('adminconference.path')->with('Projects',$Projects);
    }
    public function submitcreate()
    {
        return view('adminconference.submitcreate');
    }
    public function create()
    {
    	return view('adminconference.create');
    }
    public function viewconferrence()
    {
        return view('adminconference.viewconferrence');
    }
    public function adminhome()
    {
        return view('adminconference.adminhome');
    }

    // public function show($id)
    // {
    // 	$Teachs = Teach::find($id);
    //     $Movies = Movie::get();
    // 	return view('adminconference.i1')->with('Teach',$Teachs)->with('Movies',$Movies);
    // }

    public function aboutConference($id)
    {
        $con = confer::find($id);
        return view('adminconference.aboutConference')->with('con',$con);
    }
    public function viewpaper($id)
    {
        
        return view('adminconference.viewpaper')->with('id',$id);
    }
    public function checkreviewer($id)
    {
        
        return view('adminconference.checkreviewer')->with('id',$id);
    }
    public function checkpayment($id)
    {
        
        return view('adminconference.checkpayment')->with('id',$id);
    }
    public function choosereviewer($id)
    {
        
        return view('adminconference.choosereviewer')->with('id',$id);
    }
    public function install()
    {
    
        return view('adminconference.installcfs');
    }
    public function store(Request $request)
    {
        $store = new confer;
        $store->name = $request->input('i1');
        $store->Acronym_N = $request->input('i4');
        $store->Acronym_L = $request->input('i5');
        $store->Loca = $request->input('i9');
        $store->Content = $request->input('i10');
        $store->Detail = $request->input('i11');
        $store->D_Line = $request->input('i6');
        $store->R_Line = $request->input('i7');
        $store->S_Line = $request->input('i8');
        $store->topic_1    = $request->input('i2');
        $store->topic_2    = $request->input('i3');
        
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
    	return view('adminconference.edit')->with('Project',$Projects);
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
    public function conall()
    {
        return view('cfs.homecon');
    }
    
    /*public function show()
    {
        return view('adminconference.tshome');
    }*/
}
