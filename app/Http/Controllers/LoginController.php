<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supervisor;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function show_logpage(){
      return view('login');
    }

    public function show_logged(Request $request){
      $credentials=$request->validate([
        'email'=>['required'],
        'password'=>['required'],
      ]);
      if(Auth::attempt($credentials)){
        $user=Auth::user();
        if($user->is_admin){
        return redirect()->route('adminhome',[$user->name])->with('user',$user);
        }
        else if($user->is_supervisor){
         $supervisor = Supervisor::where('email',$user->email)->first();
         $grade = Grade::where('supervisor_id',$supervisor->id)->get();
          return redirect()->route('supervisor_page',[$user->name])->with('supervisor',$grade);

        }

        else {
          return redirect()->route('student_page',[$user->name])->with('user',$user);
        }

      }
      else {
      return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');
       }

}
}
