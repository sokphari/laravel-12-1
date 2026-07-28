<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view('layouts.app');
});
Route::get('/navbar',function(){
    return view('components.navbar');
});
Route::get('/student',function(){
    return view('pages.student.index');
});
Route::get('/instructor',function(){
    return view('pages.instructor.index');
});
Route::get('/employee.user',function(){
    return view('admin.user.index');
});