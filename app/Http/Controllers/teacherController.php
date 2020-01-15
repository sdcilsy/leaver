<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Enrollment;

class teacherController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('teacher/landing', ['courses' => $courses]);
    }
    public function class($std_id){
        $students = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->select('users.name')
                                ->where('courses.id', $std_id)
                                ->get();
        return view('teacher/class', ['students' => $students]);
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
        $id_teacher = Auth::user()->id;
        $name = $request->name;
        $token = $request->token;
        $validate = $request->validate([
            'name'=>'required|max:100',
        ]);
        // insert to database.., create new column/table

        Course::insert([
            'name' => $name,
            'id_teacher' => $id_teacher,
            'token' => $token,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
        return redirect('/teacher');
    }
    public function new_class(){
        $length = 6;
        $token = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQESTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
        return view('teacher/create_class',['token'=>$token]);
    }
    public function upload_process(Request $request){
        $this->validate($request, [
			'file' => 'required',
			'owner' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        if($file->getClientOriginalExtension() == 'php'){
            return redirect('student/library');
        }
        $tujuan_upload = 'teacher_file';
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        
        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';

        // real path
		echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
    }
}
