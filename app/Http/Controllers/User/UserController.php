<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(10);
        return view('admin.user.index',compact('users'));
    }
    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['string','required'],
            'email' => ['string','required'],
            'password' => ['stirng','required'],
            'role' => ['required'],
            'department' => ['required']
        ]);
        $users = User::create($validate);
        return redirect()->route('users')->with('Success','Created User Successfully');
    }
    public function create(){
        return view('admin.user.insert');
    }
    public function destroy(){}
    public function update(){}
    public function show(){}
    public function edit(){}
}
