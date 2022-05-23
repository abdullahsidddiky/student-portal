<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\student;
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
    return view ('student.take_course');
  }

}
