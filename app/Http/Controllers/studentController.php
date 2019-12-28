<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        return view('student/landing');
    }
    public function create(){
        return view('student/create');
    }
    public function create_process(Request $request){
        $validate = $request->validate([
            'book_name'=>'required|max:100'
        ]);
        return "Successfull created";
    }
    public function create_book(){
        return view('student/create_book');
    }
    public function read(){
        return view('student/read');
    }
    public function read_book(){
        return view('student/read_book');
    }
    public function join_class(){
        return view('student/join');
    }
    public function join_process(Request $request){
        return "Success join with token code $request->token";
    }
    public function library(){
        return view('student/inventory');
    }
}
