<?php

namespace App\Http\Controllers;

use App\Bag;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Enrollment;

class teacherController extends Controller
{
    public function index(){
        $courses = Course::join('users', 'users.id', '=', 'courses.id_teacher')
                            ->select('courses.name', 'courses.id', 'courses.token')
                            ->where('users.id', Auth::user()->id)
                            ->get();
        return view('teacher/landing', ['courses' => $courses]);
    }
    public function class($cs_id){
        $students = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->select('users.name', 'users.id')
                                ->where('courses.id', $cs_id)
                                ->get();
        return view('teacher/class', ['students' => $students, 'cs_id' => $cs_id]);
    }
    public function student_progress($cs_id, $std_id){
        
        return view('teacher/student');
    }
    public function book_progress(){
        return view('teacher/book');
    }
    public function library(){
        return view('teacher/inventory');
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
        $file = $request->file('file');
        if($file->getClientOriginalExtension() == 'php'){
            return redirect('student/library');
        }
        $tujuan_upload = 'student_file';
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        // ganti isi id
        $konten = Bag::where('id','46')->first();
        $namefile = $konten->content;
        if($namefile){
            return "Alreadyy exist";
        }
        Bag::insert([
            'name'=>$request->owner,
            'content'=>$tujuan_upload."/".$file->getClientOriginalName()
        ]);
    }
}
