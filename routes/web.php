<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});
Route::controller(StudentController::class)
       ->group(function(){
       Route::get('/','index')->name('student.index');
       Route::post('/student','store')->name('student.store');
       Route::get('/create','create');
       Route::delete('/student/{id}','destroy')->name('student.destroy');
       Route::get('/student/edit/{id}','edit')->name('student.edit');
       Route::put('/student/update/{id}','update')->name('student.update');
});
