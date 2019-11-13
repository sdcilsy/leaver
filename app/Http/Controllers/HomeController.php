<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function dashadmin(){
        return view('examples-dashboard/index');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
