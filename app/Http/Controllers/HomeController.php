<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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

    public function loginProcess(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->where('password', $password)->first();
        
        if ($user) {
            return redirect('/teacher/landing');
        }
        else {
            return redirect('/login');
        }
    }

    public function registerProcess(Request $request)
    {
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $phone = $request->phone;

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required|numeric'
        ]);

        User::insert(
            [
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'phone' => $phone,
            ]
        );

        return redirect('/teacher/landing');
    }
}
