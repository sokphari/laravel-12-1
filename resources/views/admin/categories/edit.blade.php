@extends('layouts.admin.app')

@section('title', 'Categories')
@section('page-heading', 'Edit Categories')

@section('content')

<div class="w-full">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-200">

        <!-- Header -->
        <div class="px-8 py-6 border-b border-slate-200">
            <h2 class="text-2xl font-bold text-slate-800">
                Edit Category
            </h2>
            <p class="text-slate-500 mt-1">
                Fill in the information below to create a new category.
            </p>
        </div>
        @if ($errors->any())
    <div class="bg-red-100 text-red-700 px-4 py-3 rounded-xl mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <!-- Form -->
        <form action="{{ route('category.update', $category->id) }}" method="POST" class="p-8">
            @csrf
            @method('PUT')
            

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Item Category -->
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Item Category
                    </label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $category->name) }}"
                        placeholder="Enter category name"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Category ID
                    </label>
                    <input
                        type="text"
                        disabled
                        name="id"
                        value="{{ old('id', $category->id) }}"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <!-- Total
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Total Items
                    </label>
                    <input
                        type="number"
                        name="total"
                        placeholder="0"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div> -->

                <!-- Status -->
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                        <option value="">Select Status</option>
                        <option value="active" {{ old('status', $category->status) === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $category->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Empty column for alignment -->
                <div></div>

                <!-- Description -->
                <div class="lg:col-span-2">
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="6"
                        placeholder="Enter category description..."
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none">{{ old('description', $category->description) }}</textarea>
                </div>

            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-4 mt-8 border-t border-slate-200 pt-6">

                <a href="{{ route('index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white px-5 py-2 rounded-xl inline-flex items-center">
                    
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-blue-600 text-white hover:bg-blue-700">
                    Save Changes
                </button>
                @if (session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-3 rounded-xl mb-4">
        {{ session('success') }}
    </div>
@endif

            </div>

        </form>

    </div>
</div>

@endsection