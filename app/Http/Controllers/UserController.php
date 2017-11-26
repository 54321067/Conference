<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Teach;
use App\Project;
use App\Form;
use App\confer;
use App\User;
use Closure;
use Auth;
use Hash;
class UserController extends Controller
{

    public function getLogin()
    {
        return view('adminconference.home');

    }

    public function setLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        $values = User::where('username',$data['username'])->get();
        if(Auth::attempt($data)){
            if($values[0]['status'] =='admin' or $values[0]['status'] == 'superadmin'){
                //$message = $values["status"];
            //echo "<script type='text/javascript'>alert('$message');</script>";
                return redirect()->to('/list/admin');
            }elseif($values[0]['status'] =='chair'){
                //$message =$values['status'];
            //echo "<script type='text/javascript'>alert('$message');</script>";
                return redirect()->to('/chairhome');
            }else{
                return redirect()->to('homecon');
            }
           
        }else{
            $message = "Wrong username or Password!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return redirect()->to('/home');
        }
    }

    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $store = User::find(Auth::User()->id);
        $store->name = $request->input('names');
        $store->email = $request->input('email');
        $store->nation_id = $request->input('nation');
        $store->phone = $request->input('phone');
        $store->updated_at = date("Y-m-d h:i:s");
        $store->department = $request->input('department');
        $store->address =  $request->input('address');
        $store->save();

        return redirect()->route('cfs.account')->with('user',$store->name);
        
    }
    public function getRegister()
    {

        return view('users.register');
    }
    public function setRegister(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");
        $store = New User;
        $store->name = $request->input('name');
        $store->username = $request->input('username');
        $store->email = $request->input('email');
        $store->nation_id = $request->input('nation');
        $store->phone = $request->input('phone');
        $store->status = 'member';
        $store->password = Hash::make($request->input('password'));
        $store->created_at = date("Y-m-d h:i:s");
        $store->updated_at = date("Y-m-d h:i:s");
        $store->department = $request->input('department');
        $store->address =  $request->input('address');
        $store->save();

        return redirect()->route('adminconference.home')->with('user',$store->name);
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('adminconference.home');
    }
    public function  home()
    {
        return view('adminconference.home');
    }
}
