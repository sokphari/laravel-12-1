<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // private method
    private function checkRole($user){
        if($user->role === "admin"){
            return redirect()->route('dashboard');
        }else if($user->role === "Manage"){
            return redirect()->route('users.index');
        }else{
            return redirect('/client');
        }
        

    }

    public function registerFrom()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'department' => ['nullable','max:20']
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // 1234 = sfihwuerbasndfbsf
            'department' => $request->department
        ]);

        Auth::login($user); // current user login

        return redirect()->route('login');
    }

    public function logintFrom()
    {
        return view('login');
    }

    public function storeLogin(Request $request){}
    public function logout(){}
}