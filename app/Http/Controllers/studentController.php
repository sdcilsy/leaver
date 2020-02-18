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
        return redirect("/student/read/$request->cs_id");
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
    public function read_book($cs_id, $note_id){
        $notes = Note::join('users', 'notes.student_id', '=', 'users.id')
                        ->join('courses', 'notes.course_id', '=', 'courses.id')
                        ->where('users.id', Auth::user()->id)
                        ->where('courses.id', $cs_id)
                        ->where('notes.id', $note_id)
                        ->select('notes.name', 'notes.content')
                        ->get();
        // dd($notes);
        return view('student/read_book', ['notes' => $notes, 'cs_id' => $cs_id, 'note_id' => $note_id]);
        // dd($notes);
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
    
    public function delete_book($book_id)
    {
        $url = Book::where('id',$book_id)->select('location')->first();
        unlink("C:/xampp/htdocs/larapro/leaver/public/$url->location");
        Book::where('id',$book_id)->delete();
        return redirect('student/library');
    }

    public function library(){
        // $course_id = Enrollment::where('id_student',Auth::user()->id)->get();
        $course_id = Enrollment::join('users', 'enrollment.id_student', '=', 'users.id')
                                ->join('courses', 'enrollment.id_course', '=', 'courses.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('courses.id','courses.name')
                                ->get();
        foreach ($course_id as $courses) {
            $libraries = Book::join('users', 'books.user_id', '=', 'users.id')
                            ->where('users.id', Auth::user()->id)        
                            // ->where('course_id',$courses->id)
                            ->select('users.name as username', 'books.name', 'books.id', 'books.location')
                            ->get();
            return view('student/library', ['libraries' => $libraries, 'course_id'=>$course_id]);
            // dd($course_id->id);
            // var_dump($courses->id);
            // dd($libraries);
        }
    }

    public function update_process(Request $request){
        $validate = $request->validate([
            'name'=>'required|max:100',
            'content'=>'required'
        ]);
        Note::where('id', $request->note_id)
            ->update([
                'name' => $request->name,
                'content' => $request->content,
                'updated_at' => Carbon::now(),
            ]);
        return redirect("/student/read/$request->cs_id");
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
        $tujuan_upload = "student_file/$std_id";
        // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        // ganti Bag ke Book
        Book::insert([
            'user_id' => Auth::user()->id,
            'course_id' => $request->course,
            'name' => $file->getClientOriginalName(),
            'location' => $tujuan_upload."/".$file->getClientOriginalName(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('student/library');
    }
}
