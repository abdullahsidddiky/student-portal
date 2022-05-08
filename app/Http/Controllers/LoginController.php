<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    //
    public function show_logpage(){
      return view('login');
    }
    public function show_logged(Request $request){
      $request->validate([
        'email'=>'required|email',
        'password'=>'required|string'
      ]);
      $credentials = $request->only('email','password');
      dd($credentials);
      /*if(Auth::attempt($credentials)){
        //return redirect()->route('login');
        return "logged";
      }

        return "error";
      else{
        return "error";
      }*/

    }
}
