<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Enrollment;
use App\Course;

class studentController extends Controller
{
    public function index()
    {
        $courses = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('courses.name')
                                ->get();
        return view('student/landing', ['courses' => $courses]);
    }
    public function create(){
        $courses = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('courses.name')
                                ->get();

        return view('student/create', ['courses' => $courses]);
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
        $token = $request->token;

        $id_course = Course::where('token', $token)->first();
        // kasih validate
        $validate = $request->validate([
            'token'=>'required|max:10'
        ]);
        if($id_course){
            Enrollment::insert([
                'id_student' => Auth::user()->id,
                'id_course' => $id_course->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            return redirect('student');
        }
        // kasih notif
        $msg = "Token not found";
        return redirect('student/join')->with(['msg'=>$msg]);
        
    }
    public function library(){
        return view('student/inventory');
    }
}
