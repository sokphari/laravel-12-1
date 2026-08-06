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
            'description' => ['required'],
            'status' => ['required', 'in:active,inactive']
        ]);
        $categories = Category::create($validate);
        return redirect()->route('index')->with('success','Created Categories Successfully');
    }
    public function create(){
        return view('admin.categories.add');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('index')->with('success','Deleted Successfully');
    }
    
    public function update(Request $request, Category $category){
        $validate = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'status' => ['required', 'in:active,inactive']
        ]);

        $category->update($validate);

        return redirect()->route('index')->with('success','Updated Successfully');
        
        
        //return redirect()->route('admin.categories.index')->with('success','Updated Successfully');

    }
    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }
    
    public function show(){}
    
}
