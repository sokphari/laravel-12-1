@extends('layouts.admin.app')

@section('title', 'Product Dashboard')
@section('page-heading', 'Product')

@section('content')
<div class="bg-slate-50 min-h-screen p-6">

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">
                    Edit Product
                </h2>
                <p class="text-sm text-slate-500">
                    Fill in the product details and upload an image to your inventory.
                </p>
            </div>

            <a href="{{ route('admin.products.index') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm text-slate-600 hover:bg-slate-50 transition">

                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Back
            </a>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">

            <form action="" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                @csrf

                <!-- Product Name & Brand -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Product Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Wireless Headphones"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Brand / Vendor
                        </label>

                        <input
                            type="text"
                            name="brand"
                            placeholder="Sony"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>

                </div>

                <!-- SKU & Category -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            SKU Code
                        </label>

                        <input
                            type="text"
                            name="sku"
                            placeholder="WH-1000XM5"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Category
                        </label>

                        <select
                            name="category"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl">

                            <option disabled selected>Select Category</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Stationery</option>
                            <option>Accessories</option>
                            <option>Home & Office</option>

                        </select>
                    </div>

                </div>

                <!-- Quantity Price Status -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Quantity
                        </label>

                        <input
                            type="number"
                            name="qty"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Price ($)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            name="price"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                            Stock Status
                        </label>

                        <select
                            name="status"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl">

                            <option value="in-stock">In Stock</option>
                            <option value="low-stock">Low Stock</option>
                            <option value="out-stock">Out of Stock</option>

                        </select>
                    </div>

                </div>

                <!-- Product Image -->
                <div>

                    <label class="block text-xs font-semibold uppercase text-slate-700 mb-2">
                        Product Image
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="w-full border border-slate-200 rounded-xl p-3">

                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-5 border-t">

                    <a href="{{ route('admin.products.index') }}"
                        class="px-6 py-3 border border-slate-200 rounded-xl hover:bg-slate-50">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl">
                        Save Product
                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        lucide.createIcons();
    });
</script>
@endsection