<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subject;
use App\Models\Course;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function show(){
      return view('admin.AdminHome');
    }
    public function register_admin(){
      return view('admin.AdminRegistration');
    }
    public function store_admin(Request $request){

         $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required'
        ]);
        $user =new User();
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->is_admin=1;
        $user->is_supervisor=0;
        $user->save();
    }
    public function subject(){
      return view('subject');
    }
    public function store_subject(Request $request){
      $credentials = $request->validate([
        'name'=>['required'],
      ]);
      $subject = new subject();
      $subject->course_name = $request->name;
      $subject->save();
      return redirect()->route('subject');
    }
    public function course(){
      $subject = DB::table  ('subjects')->get();
      $faculty = DB::table('supervisors')->get();
      return view('course',['subject'=>$subject,'faculty'=>$faculty]);
    }
    public function store_course(Request $request){
       $request->validate([
         'subject'=>'required',
         'faculty'=>'required',
         'section'=>'required|unique:courses,section',
         //required|unique:posts,title
       ]);
       //$faculty = DB::table('supervisors')->where('name', $request->faculty)->first();
       //$posts = Post::where('user_id', $user->id)->get();
       $faculty = Supervisor::where('name', $request->faculty)->first();

       $course = new Course();

       $course->supervisor_name= $faculty->name;
       $course->course_name = $request->subject;
       $course->section = $request->section;
       //dd($course->section);
       $faculty->courses()->save($course);

    }
    public function delete_supervisor(){
        $users = DB::table('users')->get();
        return view('admin.user_delete',['users'=>$users]);
    }
}
