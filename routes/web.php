<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('api')->group(function(){
    Route::get('/testapi_1',function(){
        return 'web route';
    });
});
