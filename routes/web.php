<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
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


Route::post('/products',[ProductController::class,'store'])->name('admin.products.store');
Route::get('/products/create',[ProductController::class,'create'])->name('insert.products');
Route::get('/products/index',[ProductController::class,'index'])->name('admin.products.index');
Route::get('/products/{id}',[ProductController::class,'edit'])->name('edit.products');
Route::put('/products/update/{id}',[ProductController::class,'update'])->name('update.products');
Route::delete('/products/delete/{id}',[ProductController::class,'destroy'])->name('delete.products');


Route::middleware(['auth','role_user:admin','throttle:3,1'])->group(function(){
    
    // User / Employee 
    Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update'); // Fixed to PUT and added ID/update URI
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Fixed method to DELETE
    
    Route::get('/dashboard', function(){
        return view('admin.overview.overview');
    })->name('dashboard');
    
    Route::get('/employees', function () {
        return view('admin.Employee.index');
    })->name('admin.employees.index');
    
});




// Login page shows first
Route::get('', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login/', [AuthController::class, 'storeLogin'])->name('login.store');

// Register page
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// frontend 
Route::get('/client',function(){
    return 'IT Tea Tik Kok ☕';
});