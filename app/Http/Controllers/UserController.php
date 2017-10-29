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
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $values = User::where('email',$data['email'])->get();
        if(Auth::attempt($data)){
            if($values[0]['status'] =='admin' or $values[0]['status'] == 'superadmin'){
                //$message = $values["status"];
            //echo "<script type='text/javascript'>alert('$message');</script>";
                return redirect()->to('/list/admin');
            }elseif($values[0]['status'] =='chair'){
                //$message =$values['status'];
            //echo "<script type='text/javascript'>alert('$message');</script>";
                return redirect()->to('/list/chair');
            }else{
                return redirect()->to('homecon');
            }
           
        }else{
            $message = "Wrong username or Password!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return redirect()->to('/home');
        }
    }

    public function getRegister()
    {

        return view('users.register');
    }

    public function setRegister(Request $request)
    {
        $store = New User;
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->status = 'member';
        $store->password = Hash::make($request->input('password'));
        $store->save();

        return redirect()->route('adminconference.home')->with('user',$store->name);
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('adminconference.home');
    }
}
