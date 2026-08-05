<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index',compact('categories'));
    }
    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['required'],
            'description' => ['required']
        ]);
        $categories = Category::create($validate);
        return redirect()->route('admin.categories.index')->with('success','Created Categories Successfully');
    }
    public function create(){
        return view('admin.categories.add');
    }
    public function destroy(){}
    public function update(){}
    public function show(){}
    public function edit(){}
}
