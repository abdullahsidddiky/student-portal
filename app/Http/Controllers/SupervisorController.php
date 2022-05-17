<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
      $user->name= $request->name;
      $user->email= $request->email;
      $user->password= Hash::make($request->password);
      $user->is_admin=0;
      $user->is_supervisor=1;
      $user->save();
    }
    public function redirect_supervisor_page(){
      return view('supervisor');
    }
}
