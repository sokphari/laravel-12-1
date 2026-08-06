<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'category_id' => ['required'],
            'name' => ['required'],
            // 'sku'         => $sku,
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'stock' => ['required']
        ]);
        $validate['sku'] = strtoupper(
            Str::slug($request->name, '') . rand(1000, 9999)
        );

        $products = Product::create($validate);
        return redirect()->route('admin.products.index')->with('success', 'Created Product Successfully');
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.insert', compact('categories'));
    }
    public function edit(int $id)
    {
        $products = Product::find($id);
        $categories = Category::all();

        return view('admin.products.edit', compact('products', 'categories'));
    }
    public function update(Request $request, int $id) {
        
        $validate = $request->validate([
            'category_id' => ['required'],
            'name' => ['required'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'stock' => ['required']
        ]);
        $validate['sku'] = strtoupper(
            Str::slug($request->name, '') . rand(1000, 9999)
        );
        $products = Product::find($id);
         $categories = Category::all();
         $products->update($validate);
        return redirect()->route('admin.products.index')->with('success', 'Update Product Successfully');

      
    }
    public function destroy(int $id) {
        $products = Product::find($id);
         $categories = Category::all();
         $products->delete();
        return redirect()->route('admin.products.index')->with('success', 'Delete Product Successfully');
    }
    public function show() {}
}
