<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\User\UserController;

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


// Route::get('/', function () {
//     return view('layouts.admin.app');
// });
// Route::get('/navbar', function () {
//     return view('components.navbar');
// });
// Route::get('/student', function () {
//     return view('pages.student.index');
// });
// Route::get('/instructor', function () {
//     return view('pages.instructor.index');
// });
Route::post('/categories',[CategoryController::class,'store'])->name('admin.categories.index');
Route::get('/create',[CategoryController::class,'create'])->name('create.category');
Route::get('/index/category',[CategoryController::class,'index'])->name('index');

// User / Employee 
Route::post('/users',[UserController::class, 'store'])->name('admin.users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('create.users');
Route::get('/users/index',[UserController::class, 'index'])->name('users');

Route::get('/dashboard', function(){
    return view('admin.overview.overview');
});


Route::get('/product',function(){
    return view('admin.products.index');
});
Route::get('/product/insert',function(){
    return view('admin.products.insert');
})->name('create');
Route::get('/employees', function(){
    return view('admin.Employee.index');
})->name('admin.employees.index');



// Login page shows first
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Register page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');