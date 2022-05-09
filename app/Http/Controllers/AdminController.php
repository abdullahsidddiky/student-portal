<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
      //dd($request->name,$request->email,$request->password);
        /*$this->validate(request(),[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required'
        ]);
        */
         $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required'
        ]);
        //dd($validated->name,$validated->email,$validated->password);
        //dd($request);
        $user =new User();
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->is_admin=1;
        $user->is_supervisor=0;
        $user->save();
    }
}
