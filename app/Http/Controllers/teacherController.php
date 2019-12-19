<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){
        return view('teacher/landing');
    }
    public function class(){
        return "this is my class";
    }
    public function new_class(){
        return "Create new class";
    }
    public function library(){
        return "library";
    }
    public function token($length = 6){
        $token = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQESTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
        return $token;
    }
}
