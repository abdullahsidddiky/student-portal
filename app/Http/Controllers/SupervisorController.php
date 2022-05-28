<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grade;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SupervisorController extends Controller
{
    //
    public function show(){
      return view('supervisor.SupervisorRegistration');
    }
    public function store_supervisor(Request $request){
      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required'
      ]);
      $user = new User();
      $supervisor = new Supervisor();
      $user->name= $request->name;
      $user->email= $request->email;
      $user->password= Hash::make($request->password);
      $user->is_admin=0;
      $user->is_supervisor=1;
      $supervisor->name= $request->name;
      $supervisor->email = $request->email;
      $user->save();
      $user->supervisor()->save($supervisor);
    }
    public function redirect_supervisor_page(){
      return view('supervisor.supervisor');
    }
    public function get_section_id(Request $request){
      $students= Grade::where('section',$request->input('section'))->get();
      return view('supervisor.student_list_section',['students'=>$students]);
    }

    public function update_grade($id){
      $student=Grade::where('student_id',$id)->first();
      $students=Grade::where('section',$student->section)->get();
      return view('supervisor.update',['student'=>$student]);
    }
    public function post_grade(Request $request){
      dd($request->student_id);

      $student= Grade::where('student_id',$request->student_id)->get();
    }

}
