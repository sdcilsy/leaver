<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student/landing');
    }
    public function create(){
        return view('student/create');
    }
    public function read(){
        return view('student/read');
    }
    public function inventory(){
        return view('student/inventory');
    }
}
