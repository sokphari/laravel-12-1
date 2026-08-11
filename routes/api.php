<?php

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

?>