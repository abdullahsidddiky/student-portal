<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subject;
use Illuminate\Support\Facades\Hash;
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
      //$credentials = $request->validate([
    //    'subject_name'=>['required'],
    //  ]);
      $subject = new subject();
      $subject->name = $request->name;
      dd($request);
      //$subject->save();
      return redirect()->route('login');
    }
}
