<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paper_form;
use Auth;
use Illuminate\Support\Facades\Input;
class UploadController extends PaperController
{
   
    public function view()
    {
    	return view('test');
    }
    public function postAction(Request $request){

        $file = Input::file('image');
        $name = Input::get('image');
        $ex = Input::file('image')->getClientOriginalExtension();
        $n2 = Input::file('image')->getClientOriginalName();
        //echo $file;
        echo $ex;
        $des = 'file';
        $file->move($des,$n2);
        //return redirect()->back();
    }
}
