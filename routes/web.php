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
// Route::get('/categories', [CategoryController::class, 'index'])
//     ->name('admin.categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/create', [CategoryController::class, 'create'])
    ->name('create.category');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
    ->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])
    ->name('category.update');
Route::get('/index/category', [CategoryController::class, 'index'])->name('index');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

// User / Employee 
Route::post('/users',[UserController::class, 'store'])->name('admin.users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('create.users');
Route::get('/users/index',[UserController::class, 'index'])->name('users');
Route::get('/users/{id}/edit',[UserController::class, 'edit'])->name('edit.users');
Route::get('/users/update',[UserController::class, 'update'])->name('update.users');
Route::get('/users/{id}',[UserController::class, 'destroy'])->name('destroy.users');

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