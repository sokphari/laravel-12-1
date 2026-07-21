<?php

use App\Http\Controllers\Employee\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/create',[EmployeeController::class,'create']);
Route::post('/create',[EmployeeController::class,'store'])->name('create.post');
// home page
Route::get('/',[EmployeeController::class,'index'])->name('index.get');
Route::delete('/employee/{id}',[EmployeeController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('edit.get');
Route::put('/update/{id}',[EmployeeController::class,'update'])->name('update.put');