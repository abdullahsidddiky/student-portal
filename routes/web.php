<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\StudentController;
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
Route::get('/course',[AdminController::class,'course'])->name('create_course');
Route::post('/course',[AdminController::class,'store_course']);
Route::get('/subject',[AdminController::class,'subject'])->name('subject');
Route::post('/subject',[AdminController::class,'store_subject'])->name('store_subject');

Route::get('/login',[LoginController::class,'show_logpage'])->name('login');
Route::post('/login',[LoginController::class,'show_logged'])->name('logged');

Route::get('/supervisor_register',[SupervisorController::class,'show'])->name('register_supervisor');
Route::post('/supervisor_register',[SupervisorController::class, 'store_supervisor']);
Route::get('/supervisor',[SupervisorController::class,'redirect_supervisor_page'])->name('supervisor_page');
Route::post('/supervisor',[SupervisorController::class,'get_section_id'])->name('get_section_id');


Route::get('/student_register',[StudentController::class,'show'])->name('register_student');
Route::post('/student_register',[StudentController::class,'store_student']);
Route::get('/student',[StudentController::class,'redirect_student_page'])->name('student_page');
Route::get('/advising_window',[StudentController::class,'take_course'])->name('take_course');
Route::post('/advising_window',[StudentController::class,'store_course'])->name('store_course');
