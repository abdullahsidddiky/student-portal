<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show(){
      return view('admin.AdminHome');
    }
    public function register_admin(){
      return view('admin.AdminRegistration');
    }
    public function store_admin(request $request){
      dd($request->name);
    }
}
