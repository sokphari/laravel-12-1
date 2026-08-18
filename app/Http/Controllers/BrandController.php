<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        // $brands = Brand::latest('id')->paginate(10)->first();
        return response()->json([
                'message' => 'fetch all brands',
                'status'  => true,
                'data'    => $brands
        ],200);
    }
    public function store(Request $request){
        try{
            $rules = [
                'name' => ['required','string','max:255'],
                'description' => ['nullable','string','min:10'],
                'status' => ['required', 'boolean']
            ];

            if($request->hasFile('image')){
                $rules['image'] = ['nullable','image','mimes:png,jpg,jpeg,svg','max:2048'];
            }else{
                $rules['image'] = ['nullable','string','max:2048'];
            }

            $validated = $request->validate($rules);

            $imageName = null;
            if($request->hasFile('image')){
                $file = $request->file('image');
                $imageName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('brands'),$imageName);
                $validated['image'] = $imageName;
            }

            $brand = Brand::create($validated);
            
            return response()->json([
                'message' => 'Created Brands Successfully',
                'status' => true,
                'data'  => $brand
            ],201);

        }catch(\Exception $e){
            if($e instanceof \Illuminate\Validation\ValidationException){
                return response()->json([
                    'message' => 'Validation failed',
                    'status'  => false,
                    'data'    => $e->errors(),
                ],422);
            }
            return response()->json([
                    'message' => "Failed to create brand",
                    'status'  => false,
                    'data'    => null,
            ],500);
        }
    }
    public function show(){

    }
    public function destroy(){

    }
    public function update(){
        
    }
}

