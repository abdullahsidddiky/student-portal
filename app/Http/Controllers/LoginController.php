<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
      //dd($request->session());
      //$credentials = $request->only('email','password');
      //dd($credentials);
      if(Auth::attempt($credentials)){
        //return redirect()->route('login');
      //  $request->session()->regenerate();
        return "logged";
      }
      return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');

      

}
}
