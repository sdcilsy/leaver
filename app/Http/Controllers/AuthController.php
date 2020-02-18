<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    
    public function reset(){
        return view('forgot');
    }

    public function login_process(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['username' => $username, 'password' => $password])){
            if(Auth::user()->role == 'teacher'){
                return redirect('/teacher');
            }
            return redirect('/student');
        }
        $msg = "Bad username/password";
        return redirect()->route('login')->with(['msg'=>$msg]);

    }
    public function register_process(Request $request){
        $validate = $request->validate([
            'name'=>'required|max:100',
            'username'=>'required|max:100|unique:users,username',
            'email'=>'required|max:100',
            'role'=>'required',
            'password'=>'required|min:7|confirmed',
        ]);
        User::insert([
            'name'=>$request->name,
            'username'=>$request->username,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('/login');
    }
    public function reset_process(Request $request){
        
    }
}
