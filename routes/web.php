<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupervisorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/admin',[AdminController::class,'show'])->name('adminhome'); //admin home page
Route::get('/admin_register',[AdminController::class,'register_admin'])->name('register_admin');
Route::post('/admin_register',[AdminController::class,'store_admin']);
Route::get('/login',[LoginController::class,'show_logpage'])->name('login');
Route::post('/login',[LoginController::class,'show_logged'])->name('logged');
Route::get('/supervisor_register',[SupervisorController::class,'show']);
