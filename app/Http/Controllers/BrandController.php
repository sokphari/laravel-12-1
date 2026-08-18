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
    public function show($id){
        try{
            $user = Brand::find($id);
            if(!$user){
                return response()->json([
                    'message' => 'require missing brand_id',
                    'status' => false,
                    'data' => null
                ],400);
            }
            return response()->json([
                'message' => 'Brand found',
                'status' => true,
                'data' => $user,
            ],200);

        }catch(\Exception $e){
            return response()->json([
                'message' => 'brand not found',
                'satus' => false,
                'data' => null
            ]
            ,500);
        }
    }
    public function destroy($id){
        try{
            $user = Brand::find($id);
            if(!$user){
                return response()->json([
                    'message' => 'require missing brand_id',
                    'status' => false,
                    'data' => null
                ],400);
            }
            $user->delete();
            return response()->json([
                'message' => 'delete user successfully',
                'status' => true,
                'data' => $user,
            ],200);

        }catch(\Exception $e){
            return response()->json([
                'message' => 'delete not found',
                'satus' => false,
                'data' => null
            ]
            ,500);
        }
    }
    public function update(Request $request,$id){
        try{
            $brand = Brand::find($id);
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

            $brand->update([
                'name' => $validated['name'] ?? '',
                'image' => $validated['image'] ?? $imageName,
                'description'=>$validated['description'],
                'status'=>$validated['status'] ?? true,
            ]);
            
            return response()->json([
                'message' => 'Update Brands Successfully',
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
                    'message' => "Update Fails",
                    'status'  => false,
                    'data'    => null,
            ],500);
        }
    }
}

