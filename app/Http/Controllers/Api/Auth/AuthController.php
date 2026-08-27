<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register(Request $request){
        try{
            $validated = Validator::make($request->all(),[
                'name' => ['required','string'],
                'email' => ['required','email','unique:users,email'],
                'password' => ['required','string','min:8','confirmed'],
                'role' => ['nullable',Rule::in(['admin','user'])],
                'status' => ['nullable',Rule::in(['active','inactive'])],
            ]);

            if($validated->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validate error',
                    'error' => $validated->errors()
                ],422);
            }

            if($request['password']){
                $request['password'] = Hash::make($request['password']);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'user' ?? $request->role,
                'status' => 'active' ?? $request->status
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Register successfully',
                'data' => $user
            ],201);
        
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Register Fails',
                'error' => $e->getMessage(),
            ],500);
        }
    }
    public function login(Request $request){
        try{
            $validated = Validator::make($request->all(),[
                'email' => ['required','string','email'],
                'password' => ['required','string','min:6']
            ]);
            if($validated->fails()){
                return response()->json([
                    'message' => 'require email and password',
                    'error' => $validated->errors()
                ],422);
            }
            $user = User::where('email',$request->email)->first();
            if(!$user || !Hash::check($request->password,$user->password)){
                return response()->json([
                    'message' => 'You can not have permission'
                ],403);
            }
            if($user->status !== 'active'){
                return response()->json([
                    'message' => 'you must be active'
                ]);
            }

            // create token
            $token = $user->createToken('auth_login')->plainTextToken;

            return response()->json(
                [
                    'status' => true,
                    'message' => 'User Login Successfully',
                    'data' => $user,
                    'token' => $token,
                    'Authorization' => 'Bearer'
                ]
            );
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Login Fails',
                'status' => false,
            ],500);
        }
    }
    public function logout(){}
    public function profile(){}
}
