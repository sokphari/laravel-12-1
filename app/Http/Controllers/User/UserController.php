<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.insert');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id'=>['default'],
            'userName' => ['string', 'required'],
            'email' => ['string', 'required', 'email', 'unique:users'],
            'password' => ['string', 'required', 'min:8'],
            'role' => ['required'],
            'department' => ['required'],
            'status' => ['required'],
        ]);

        User::create([
            'name' => $validate['userName'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
            'role' => $validate['role'],
            'department' => $validate['department'],
            'status' => $validate['status'],
        ]);

        return redirect()->route('users.index')->with('success', 'Created User Successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validate = $request->validate([
            'userName' => ['string', 'required'],
            'email' => ['string', 'required', 'email', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8'],
            'role' => ['required'],
            'department' => ['required'],
            'status' => ['required'],
        ]);

        $data = [
            'name' => $validate['userName'],
            'email' => $validate['email'],
            'role' => $validate['role'],
            'department' => $validate['department'],
            'status' => $validate['status'],
        ];

        if (!empty($validate['password'])) {
            $data['password'] = Hash::make($validate['password']);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Updated User Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Deleted User Successfully');
    }
}