<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        
        $users = User::where('status','active')->paginate(5);
        
        return response()->json([
            'message' => 'fetch data from users',
            'data' => $users
        ],200);
    }
    public function store(Request $request){
        try{
            $validated = $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required','email','string','unique:users,email'],
                'password' => ['required','string','min:6'],
                'role' => ['required','string',Rule::in(['admin','user'])],
                'status' => ['required','in:active,inactive']
            ]);
            if($validated['password']){
                $validated['password'] = Hash::make($validated['password']);
            }
            $user = User::create($validated);
            return response()->json([
                'message' => 'created user successfully',
                'data'   => $user
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message' => 'create fails',
                'error' => $e->getMessage(),
            ],500);
        }
    }
    public function show($user){
        try{
            $userId = User::findOrFail($user);
            return response()->json([
                'message' => 'user found',
                'data' => $userId
            ],200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'data search not found',
                'error' => $e->getMessage(),
            ],500);
        }
    }
    public function destroy($user){
        $userId = User::findOrFail($user);
        $userId->delete();
        return response()->json([
            'message' => 'delete user successfully',
            'data' => $userId
        ],200);
    }
    public function update(Request $request , $user){
        try{
            $userId = User::findOrFail($user);
            $validated = $request->validate([
                'name' => ['required','string','max:255'],
                'email' => ['required','email','string','unique:users,email'],
                'password' => ['required','string','min:6'],
                'role' => ['required','string',Rule::in(['admin','user'])],
                'status' => ['required','in:active,inactive']
            ]);
            if($validated['password']){
                $validated['password'] = Hash::make($validated['password']);
            }
            else{
                unset($validated['password']); //still old password
            }
            $userId->update($validated);
            return response()->json([
                'message' => 'updated user successfully',
                'data'   => $userId
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message' => 'update fails',
                'error' => $e->getMessage(),
            ],500);
        }
    }
 }
