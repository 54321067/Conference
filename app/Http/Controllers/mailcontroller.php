<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Input;

class mailcontroller extends Controller
{ 
   public function index(){
      return view('mail.mail');
   }
   public function sendemail(Request $request,id $id){
      $email = $request->input('Email');
      $link = $request->input('Link');
      $data = array( 'email' => $email, 'link' => $link);
      Mail::raw('', function ($message) use ($data){
            $message->to($data['email']);
            $message->from('somratza35677@gmail.com', 'test');
            $message->setBody('your link : '.$data['link']);
            $message->subject('แจ้งเตือน:ถึงเวลาใช้งาน');
       });

      return redirect()->back();

   }     
}
