<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show(){
      return view('admin.AdminHome');
    }
    pubic function register_admin(){
      return "register";
    }
}
