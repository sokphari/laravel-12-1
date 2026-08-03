@extends('layouts.admin.app')

@section('title', 'Product Dashboard')

@section('content')
    <!DOCTYPE html>
<html lang="en" class="h-full overflow-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product Full Screen</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 h-full flex flex-col items-center justify-center overflow-hidden p-6">

  <!-- Main Content Wrapper - Expanded to fill the screen nicely -->
  <main class="max-w-6xl w-full flex flex-col justify-center overflow-hidden">
    
    <!-- Page Heading & Back Button Container -->
    <div class="flex items-center justify-between mb-4 shrink-0 px-2">
      <div>
        <h2 class="text-2xl font-bold text-slate-900">Add New Product Data</h2>
        <p class="text-sm text-slate-500">Fill in the product details and upload an image to your inventory.</p>
      </div>
      <a href="{{route('admin.products.index')}}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white text-slate-600 font-medium text-sm hover:bg-slate-50 transition-colors shadow-sm">
        <i data-lucide="arrow-left" class="w-4 h-4 "></i>
        Back
      </a>
    </div>

    <!-- Full Screen Card Container -->
    <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden shrink-0">

      <!-- Form Body with comfortable proportions -->
      <form class="p-6 sm:p-8 space-y-5">

        <!-- Row 1: Product Name & Brand/Vendor -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Product Name</label>
            <input type="text" placeholder="e.g. Wireless Headphones" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-blue-500 focus:bg-white transition-all">
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Brand / Vendor</label>
            <input type="text" placeholder="e.g. Sony" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-blue-500 focus:bg-white transition-all">
          </div>
        </div>

        <!-- Row 2: SKU & Category -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">SKU Code</label>
            <input type="text" placeholder="e.g. WH-1000XM5" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-blue-500 focus:bg-white transition-all font-mono">
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Category</label>
            <div class="relative">
              <select class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 pr-10 text-sm text-slate-800 focus:outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer">
                <option value="" disabled selected>Select category</option>
                <option>Electronics</option>
                <option>Furniture</option>
                <option>Stationery</option>
                <option>Accessories</option>
                <option>Home & Office</option>
              </select>
              <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"></i>
            </div>
          </div>
        </div>

        <!-- Row 3: Quantity, Price & Status -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Quantity</label>
            <input type="number" placeholder="0" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-blue-500 focus:bg-white transition-all">
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Price ($)</label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-400">$</span>
              <input type="number" step="0.01" placeholder="0.00" class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-8 pr-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-blue-500 focus:bg-white transition-all">
            </div>
          </div>
          <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Stock Status</label>
            <div class="relative">
              <select class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 pr-10 text-sm text-slate-800 focus:outline-none focus:border-blue-500 focus:bg-white transition-all cursor-pointer">
                <option value="in-stock">In Stock</option>
                <option value="low-stock">Low Stock</option>
                <option value="out-of-stock">Out of Stock</option>
              </select>
              <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"></i>
            </div>
          </div>
        </div>

        <!-- Row 4: Product Image File Input -->
        <div>
          <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">Product Image</label>
          <label class="border-2 border-dashed border-slate-200 hover:border-blue-500 rounded-2xl p-4 flex items-center justify-center gap-4 bg-slate-50/50 hover:bg-blue-50/35 transition-all cursor-pointer group text-left block">
            <input type="file" accept="image/*" class="hidden">
            <div class="w-10 h-10 rounded-full bg-white shadow-sm border border-slate-100 flex items-center justify-center text-slate-400 group-hover:text-blue-600 shrink-0">
              <i data-lucide="upload-cloud" class="w-5 h-5"></i>
            </div>
            <div>
              <p class="text-sm font-medium text-slate-700">Click to upload <span class="text-slate-500 font-normal">or drag and drop</span></p>
              <p class="text-xs text-slate-400">SVG, PNG, JPG or GIF (max. 800x800px)</p>
            </div>
          </label>
        </div>

        <!-- Footer Action Buttons -->
        <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
          <a href="{{route('admin.products.index')}}" class="px-6 py-3 rounded-xl border border-slate-200 text-slate-600 font-medium text-sm hover:bg-slate-50 transition-colors cursor-pointer">
            Cancel
          </a>
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-6 py-3 rounded-xl shadow-lg shadow-blue-500/20 transition-all cursor-pointer">
            Save Product
          </button>
        </div>

      </form>

    </div>
  </main>

  <!-- Initialize Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>
</body>
</html>
@endsection