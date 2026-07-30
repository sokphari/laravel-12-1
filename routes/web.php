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


Route::get('/', function () {
    return view('layouts.admin.app');
});
Route::get('/navbar', function () {
    return view('components.navbar');
});
Route::get('/student', function () {
    return view('pages.student.index');
});
Route::get('/instructor', function () {
    return view('pages.instructor.index');
});
Route::get('/categories', function () {
    return view('admin.categories.index');
})->name('admin.categories.index');

Route::get('/users',function(){
    return view('admin.user.index');
});
Route::get('/users/create',function(){
    return view('admin.user.insert');
});



Route::get('/product',function(){
    return view('admin.products.index');
});
Route::get('/product/insert',function(){
    return view('admin.products.insert');
});
