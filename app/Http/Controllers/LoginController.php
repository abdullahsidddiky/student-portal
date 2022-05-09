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
      if(Auth::attempt($credentials)){
        return "logged";
      }
      return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');

}
}
