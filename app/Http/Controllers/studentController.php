<?php

namespace App\Http\Controllers;

use App\Bag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Enrollment;
use App\Course;
use App\Book;
use App\Note;

class studentController extends Controller
{
    public function index()
    {
        $courses = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('courses.name', 'courses.id')
                                ->get();
        return view('student/landing', ['courses' => $courses]);
    }
    public function create(){
        $courses = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('courses.name', 'courses.id')
                                ->get();

        return view('student/create', ['courses' => $courses]);
    }
    public function create_process(Request $request){
        $validate = $request->validate([
            'name'=>'required|max:100',
            'content'=>'required'
        ]);
        // Insert to database
        Note::insert([
            'name' => $request->name,
            'content' => $request->content,
            'student_id' => Auth::user()->id,
            'course_id' => $request->cs_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/student/read/$cs_id');
    }
    public function create_book($cs_id){
        return view('student/create_book', ['cs_id' => $cs_id]);
    }
    public function read($cs_id){
        $notes = Note::join('users', 'notes.student_id', '=', 'users.id')
                    ->join('courses', 'notes.course_id', '=', 'courses.id')
                    ->where('users.id', Auth::user()->id)
                    ->where('courses.id', $cs_id)
                    ->select('notes.name', 'notes.id')
                    ->get();

        return view('student/read', ['cs_id' => $cs_id, 'notes' => $notes]);
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
        $libraries = Book::join('users', 'books.student_id', '=', 'users.id')
                        ->where('users.id', Auth::user()->id)        
                        ->select('books.name', 'books.id', 'books.location')
                        ->get();

        return view('student/library', ['libraries' => $libraries]);
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
        Book::insert([
            'student_id' => Auth::user()->id,
            'name' => $file->getClientOriginalName(),
            'location' => $tujuan_upload."/".$file->getClientOriginalName(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('student/library');
        // return $tujuan_upload."/".$file->getClientOriginalName()." success uploaded";
    }
}
