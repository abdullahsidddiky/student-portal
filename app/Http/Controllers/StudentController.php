<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\student;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;
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
    //$faculty = DB::table('')
    return view ('student.take_course',['course'=>$course]);
  }
  public function store_course(Request $request){
    $user = auth()->user();
    $grade = new Grade();
    $course=DB::table('courses')->where('id',$request->course)->first();
    $grade->course_name=$course->course_name;
    $grade->supervisor_name= $course->supervisor_name;
    $grade->supervisor_id= $course->supervisor_id;
    $grade->section= $course->section;
    dd($user);

  }

}
