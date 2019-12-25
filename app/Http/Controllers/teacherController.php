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
        return view('teacher/class');
    }
    public function student_progress(){
        return view('teacher/student');
    }
    public function book_progress(){
        return view('teacher/book');
    }
    public function library(){
        return "library";
    }
    public function process(Request $request){
        $class = $request->class_name;
        $token = $request->token;
        $validate = $request->validate([
            'class_name'=>'required|max:100',
        ]);
        // insert to database.., create new column/table
        return "Class : $class, token : $token successfully created!";
    }
    public function new_class(){
        $length = 6;
        $token = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQESTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
        return view('teacher/create_class',['token'=>$token]);
    }
}
