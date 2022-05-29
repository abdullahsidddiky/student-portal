<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\student;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
  public function show(){
    return view('student.StudentRegistration');
  }
  public function store_student(Request $request){
    $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'password'=>'required'
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->is_admin = 0;
    $user->is_supervisor = 0;
    $user->save();
    $student = new student();
    $student->name = $request->name;
    $student->email = $request->email;
    $user->student()->save($student);
  }
  public function redirect_student_page(){
    return view('student.student');
  }
  public function take_course(){
    $course  = DB::table('courses')->get();
    return view ('student.take_course',['course'=>$course]);
  }
  public function store_course(Request $request){

    $user = Auth::user();
    $student= student::where('email',$user->email)->first();
    $course = DB::table('courses')->where('id',$request->course)->first();
    $grade=new Grade();
    $grade->course_name=$course->course_name;
    $grade->supervisor_name= $course->supervisor_name;
    $grade->supervisor_id= $course->supervisor_id;
    $grade->section=$course->section;
    $student->grade()->save($grade);
}

  public function show_grade(){
    $user = Auth::user();
    $student = Student::where('user_id',$user->id)->first();
    $grades = Grade::where('student_id',$student->id)->get();
    return view('student.grades',['grades'=>$grades]);
  }
}
