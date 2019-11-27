<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function process(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->where('password', $password)->first();
        
        if ($user) {
            return view('teacher/landing');
        }
        else {
            return redirect('/login');
        }
    }
}
