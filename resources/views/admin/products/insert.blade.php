@extends('layouts.admin.app')

@section('title', 'Add Product')

@section('content')

<div class="  p-8">

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <!-- Header -->
        <div class="border-b px-8 py-6">
            <h2 class="text-3xl font-bold text-slate-800">
                Create Product
            </h2>
            <p class="text-gray-500 mt-2">
                Fill in the information below to create a new product.
            </p>
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf

            <div class="p-8 space-y-8">

                <!-- Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Product Name -->
                    <div>
                        <label class="block mb-2 font-semibold text-gray-700">
                            Product Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter product name"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block mb-2 font-semibold text-gray-700">
                            Category
                        </label>

                        <select
                            name="category_id"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                            <option value="">Select Category</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('category_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!-- Row 2 -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Quantity -->
                    <div>
                        <label class="block mb-2 font-semibold text-gray-700">
                            Quantity
                        </label>

                        <input
                            type="number"
                            name="quantity"
                            value="{{ old('quantity') }}"
                            placeholder="0"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        @error('quantity')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block mb-2 font-semibold text-gray-700">
                            Price
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            name="price"
                            value="{{ old('price') }}"
                            placeholder="$0.00"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Stock -->
                    <div>
                        <label class="block mb-2 font-semibold text-gray-700">
                            Stock
                        </label>

                        <input
                            type="number"
                            name="stock"
                            value="{{ old('stock',0) }}"
                            placeholder="0"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        @error('stock')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-2 font-semibold text-gray-700">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="6"
                        placeholder="Enter product description..."
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 resize-none focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Footer -->
            <div class="border-t px-8 py-6 flex justify-end gap-4">

                <a href="{{ route('admin.products.index') }}"
                    class="px-6 py-3 rounded-xl bg-gray-500 text-white hover:bg-gray-600 transition">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-8 py-3 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition">
                    Create Product
                </button>

            </div>

        </form>

    </div>

</div>

@endsection