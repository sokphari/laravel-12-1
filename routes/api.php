<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

    Route::get('/testapi',function(){
        return response()->json([
            'message' => 'I Love You',
            'data' => [
                [
                    'id' => 1,
                    'name' => 'coffee',
                    'product_size' => [
                                        'size' => 'small',
                                        'price' => 4000
                                       ],
                    'discount' => 'In Khmer New Years'

                ]
            ]
        ],200);
    });


    Route::controller(BrandController::class)
    ->group(function(){
        Route::get('/','index')->name('index.get');
        Route::post('/create','store');
        Route::delete('/delete/{id}','destroy');
        Route::put('/update/{id}','update');
        Route::get('/show/{id}','show');

    });
?>





<!-- JavaScript 
async await     -->