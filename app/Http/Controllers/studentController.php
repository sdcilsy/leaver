<?php

namespace App\Http\Controllers;

use App\Bag;
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
            'name'=>'required|max:100',
            'content'=>'required'
        ]);
        // Insert to database
        return "Successfull created $request->name, $request->content";
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

    public function upload_process(Request $request){
        $this->validate($request, [
			'file' => 'required',
        ]);
        $file = $request->file('file');
        if($file->getClientOriginalExtension() == 'php'){
            return redirect('student/library');
        }
        $tujuan_upload = 'student_file';
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        // ganti Bag ke Book
        // Bag::insert([
        //     'name'=>Auth::user()->username,
        //     'content'=>$tujuan_upload."/".$file->getClientOriginalName()
        // ]);
        return $tujuan_upload."/".$file->getClientOriginalName()." success uploaded";
    }
}
