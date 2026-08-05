<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'sku' => ['required'],
            'quantity' => ['required','integer'],
            'price' => ['required','numeric'],
            'description' => ['required'],
            // 'stock' => ['required']
        ]);
        $products = Product::create($validate);
        return redirect()->route('admin.products.index')->with('success', 'Created Product Successfully');
    }
    public function create()
    {
        return view('admin.products.insert');
    }
    public function destroy() {}
    public function update() {}
    public function edit() {}
    public function show() {}
}
