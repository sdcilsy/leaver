<?php

namespace App\Http\Controllers;

use App\Bag;
use App\Book;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Course;
use App\Enrollment;
use App\Note;

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
        $notes = Note::join('users', 'notes.student_id', '=', 'users.id')
                        ->join('courses', 'notes.course_id', '=', 'courses.id')
                        ->where('users.id', $std_id)
                        ->where('courses.id', $cs_id)
                        // ->where('notes.id', $note_id)
                        ->select('notes.name', 'notes.id')
                        ->get();
        // dd($notes);
        return view('teacher/student', ["cs_id" => $cs_id, "std_id" => $std_id, "notes" => $notes]);
    }
    public function book_progress($cs_id, $std_id, $note_id){
        $notes = Note::join('users', 'notes.student_id', '=', 'users.id')
                        ->join('courses', 'notes.course_id', '=', 'courses.id')
                        ->where('users.id', $std_id)
                        ->where('courses.id', $cs_id)
                        ->where('notes.id', $note_id)
                        ->select('notes.name', 'notes.content')
                        ->get();
        // dd($notes);
        return view('teacher/book', ['notes' => $notes, 'cs_id' => $cs_id, 'note_id' => $note_id]);
        // return view('teacher/book');
    }
    public function library(){
        $courses = Course::where('id_teacher',Auth::user()->id)->get();
        foreach ($courses as $id_course) {
            $library = Book::join('users', 'books.user_id', '=', 'users.id')
                            ->join('courses','books.course_id','=','courses.id')
                            ->where('users.id', Auth::user()->id)
                            ->orWhere('course_id',$id_course->id)
                            ->select('users.name as username', 'books.name as bname', 'books.id', 'books.location','courses.name as cname')
                            ->get();
            // return view('teacher/library', ['libraries' => $library,'courses'=>$courses]);   
            dd($library);
        }
    }

    public function delete_book($book_id)
    {
        $url = Book::where('id',$book_id)->select('location')->first();
        unlink("C:/xampp/htdocs/larapro/leaver/public/$url->location");
        Book::where('id',$book_id)->delete();
        return redirect('library');
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
        ]);
        $file = $request->file('file');
        if($file->getClientOriginalExtension() == 'php'){
            return redirect('student/library');
        }
        $std_id = Auth::user()->username;
        $tujuan_upload = "teacher_file/$std_id";
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        // Ganti Bag ke Book
        Book::insert([
            'user_id' => Auth::user()->id,
            'course_id' => $request->course,
            'name' => $file->getClientOriginalName(),
            'location' => $tujuan_upload."/".$file->getClientOriginalName(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('teacher/library');
    }
}
