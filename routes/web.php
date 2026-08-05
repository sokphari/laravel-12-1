<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Product\ProductController;

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
Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.index');
Route::get('/create', [CategoryController::class, 'create'])->name('create.category');
Route::get('/index/category', [CategoryController::class, 'index'])->name('index');


Route::post('/products',[ProductController::class,'store'])->name('admin.products.store');
Route::get('/products/create',[ProductController::class,'create'])->name('insert.products');
Route::get('/products/index',[ProductController::class,'index'])->name('admin.products.index');

// User / Employee 
Route::get('/users', function () {
    return view('admin.user.index');
});
Route::get('/users/create', function () {
    return view('admin.user.insert');
});
Route::get('/dashboard', function () {
    return view('admin.overview.overview');
});

Route::get('/employees', function () {
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
