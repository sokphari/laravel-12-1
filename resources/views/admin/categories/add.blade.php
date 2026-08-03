@extends('layouts.admin.app')

@section('title', 'Categories')
@section('page-heading', 'Create Categories')

@section('content')

<div class="w-full">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-200">

        <!-- Header -->
        <div class="px-8 py-6 border-b border-slate-200">
            <h2 class="text-2xl font-bold text-slate-800">
                Create Category
            </h2>
            <p class="text-slate-500 mt-1">
                Fill in the information below to create a new category.
            </p>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.categories.index') }}" method="POST" class="p-8">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Item Category -->
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Item Category
                    </label>
                    <input
                        type="text"
                        name="category"
                        placeholder="Enter category name"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <!-- Total -->
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Total Items
                    </label>
                    <input
                        type="number"
                        name="total"
                        placeholder="0"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                        <option>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
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
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none"></textarea>
                </div>

            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-4 mt-8 border-t border-slate-200 pt-6">

                <a href="{{ route('admin.categories.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white px-5 py-2 rounded-xl inline-flex items-center">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-blue-600 text-white hover:bg-blue-700">
                    Create Category
                </button>

            </div>

        </form>

    </div>
</div>

@endsection