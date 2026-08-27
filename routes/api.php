<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\v1\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->controller(UserController::class)->group(function(){
    Route::get('/','index');
    Route::post('/create','store');
    Route::get('/show/{id}','show');
    Route::put('/update/{id}','update');
    Route::delete('/delete/{id}','destroy');
});
// patch
// put


Route::middleware('auth:sanctum')->get('/user',function(){
    return response()->json([
        'data' => 'test1'
    ]);
});

// funciton public 
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);