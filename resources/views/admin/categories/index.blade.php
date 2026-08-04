<!DOCTYPE html>
<html lang="en">
@extends('layouts.admin.app')
@section('title', 'Categories')
@section('page-heading','Categories')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
</head>
<body class="bg-slate-100">
    <div class="max-w-7xl mx-auto px-6 ">

        <!-- ========================= -->
        <!-- Statistic Cards -->
        <!-- ========================= -->

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-2 mt-0 ">

            <!-- Card -->

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition">

                <div class="flex justify-between">
                    <div class="h-14 w-14 rounded-xl bg-green-100 flex items-center justify-center">

                        <i class="fa-solid fa-tag text-green-600 text-xl"></i>

                    </div>
                    <div>

                        <p class="text-sm text-slate-500">
                            Total Categories
                        </p>

                        <h2 class="text-3xl font-bold mt-2">
                            86
                        </h2>

                        <p class="text-green-500 text-sm mt-3">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            8.3% from last month
                        </p>

                    </div>



                </div>

            </div>

            <!-- Card -->

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition">

                <div class="flex justify-between">

                    <div>

                        <p class="text-sm text-slate-500">
                            Total Products
                        </p>

                        <h2 class="text-3xl font-bold mt-2">
                            1,248
                        </h2>

                        <p class="text-green-500 text-sm mt-3">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            12.5% from last month
                        </p>

                    </div>

                    <div class="h-14 w-14 rounded-xl bg-blue-100 flex items-center justify-center">

                        <i class="fa-solid fa-cube text-blue-600 text-xl"></i>

                    </div>

                </div>

            </div>

            <!-- Card -->

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition">

                <div class="flex justify-between">

                    <div>

                        <p class="text-sm text-slate-500">
                            Largest Category
                        </p>

                        <h2 class="text-2xl font-bold mt-2">
                            Electronics
                        </h2>

                        <p class="text-slate-500 text-sm mt-3">
                            320 Products
                        </p>

                    </div>

                    <div class="h-14 w-14 rounded-xl bg-violet-100 flex items-center justify-center">

                        <i class="fa-regular fa-star text-violet-600 text-xl"></i>

                    </div>

                </div>

            </div>

            <!-- Card -->

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-lg transition">

                <div class="flex justify-between">

                    <div>

                        <p class="text-sm text-slate-500">
                            Empty Categories
                        </p>

                        <h2 class="text-3xl font-bold mt-2">
                            4
                        </h2>

                        <p class="text-slate-500 text-sm mt-3">
                            4.7% of total
                        </p>

                    </div>

                    <div class="h-14 w-14 rounded-xl bg-orange-100 flex items-center justify-center">

                        <i class="fa-solid fa-box-open text-orange-500 text-xl"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- Main Content -->
        <!-- ========================= -->

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mt-8">

            <!-- Table -->

            <div class="lg:col-span-3 bg-white rounded-2xl border border-slate-200 shadow-sm">

                <!-- Header -->

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 p-6 border-b ">

                    <h2 class="font-semibold text-xl">
                        Category List
                    </h2>

                    <div class="flex gap-3">

                        <div class="relative">

                            <input
                                type="text"
                                placeholder="Search..."
                                class="pl-10 pr-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">

                            <i class="fa-solid fa-search absolute left-3 top-3 text-slate-400"></i>

                        </div>

                        <select
                            class="border border-slate-200 rounded-xl px-4">

                            <option>Status</option>
                            <option>Active</option>
                            <option>Inactive</option>

                        </select>

                        <a href="{{ url('/categories/create') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl inline-flex items-center">
                            <i class="fa-solid fa-plus mr-2"></i>
                            Create Category
                        </a>

                    </div>

                </div>

                <!-- Table -->

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-slate-50 text-slate-500 text-sm">

                            <tr class="text-center">
                                <th class=" px-6 py-4">Category</th>
                                <th class="px-6 py-4">Description</th>
                                <th class="px-6 py-4">Total</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Actions</th>

                            </tr>

                        </thead>

                        <tbody class="divide-y ">

                            <tr class="hover:bg-slate-50 text-center">

                                <td class="px-6 py-5 font-medium flex items-center gap-3">

                                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">

                                        <i class="fa-solid fa-tv text-blue-600"></i>

                                    </div>

                                    Electronics

                                </td>

                                <td class="text-slate-500">
                                    Electronic devices and gadgets
                                </td>

                                <td class="text-center">
                                    320
                                </td>

                                <td>

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                        Active
                                    </span>

                                </td>

                                <td class="text-center">

                                    <i class="fa-solid fa-ellipsis-vertical text-slate-400"></i>

                                </td>

                            </tr>

                            <tr class="hover:bg-slate-50 text-center">

                                <td class="px-6 py-5 font-medium flex items-center gap-3">

                                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">

                                        <i class="fa-solid fa-couch text-purple-600"></i>

                                    </div>

                                    Furniture

                                </td>

                                <td class="text-slate-500">
                                    Office and home furniture
                                </td>

                                <td class="text-center">
                                    150
                                </td>

                                <td>

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                        Active
                                    </span>

                                </td>

                                <td class="text-center">

                                    <i class="fa-solid fa-ellipsis-vertical text-slate-400"></i>

                                </td>

                            </tr>

                            <tr class="hover:bg-slate-50 text-center">

                                <td class="px-6 py-5 font-medium flex items-center gap-3">

                                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">

                                        <i class="fa-solid fa-pencil text-yellow-600"></i>

                                    </div>

                                    Stationery

                                </td>

                                <td class="text-slate-500">
                                    Office and school supplies
                                </td>

                                <td class="text-center">
                                    210
                                </td>

                                <td>

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                                        Active
                                    </span>

                                </td>

                                <td class="text-center">

                                    <i class="fa-solid fa-ellipsis-vertical text-slate-400"></i>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <!-- Pagination -->

                <div class="flex justify-between items-center px-6 py-5 border-t">

                    <p class="text-sm text-slate-500">
                        Showing 1-5 of 86 categories
                    </p>

                    <div class="flex gap-2">

                        <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">
                            <
                                </button>

                                <button class="w-10 h-10 rounded-lg bg-blue-600 text-white">
                                    1
                                </button>

                                <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">
                                    2
                                </button>

                                <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">
                                    3
                                </button>

                                <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">
                                    >
                                </button>

                    </div>

                </div>

            </div>

            <!-- Sidebar -->

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

                <div class="space-y-6">

    <!-- Electronics -->
    <div>
        <div class="flex items-center justify-between text-sm mb-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-tv text-blue-600"></i>
                <span>Electronics</span>
            </div>
            <span>320</span>
        </div>

        <div class="h-2 bg-slate-200 rounded-full">
            <div class="h-2 bg-blue-600 rounded-full w-full"></div>
        </div>
    </div>

    <!-- Stationery -->
    <div>
        <div class="flex items-center justify-between text-sm mb-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-pen text-yellow-500"></i>
                <span>Stationery</span>
            </div>
            <span>210</span>
        </div>

        <div class="h-2 bg-slate-200 rounded-full">
            <div class="h-2 bg-yellow-500 rounded-full w-3/4"></div>
        </div>
    </div>

    <!-- Furniture -->
    <div>
        <div class="flex items-center justify-between text-sm mb-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-couch text-purple-500"></i>
                <span>Furniture</span>
            </div>
            <span>150</span>
        </div>

        <div class="h-2 bg-slate-200 rounded-full">
            <div class="h-2 bg-purple-500 rounded-full w-1/2"></div>
        </div>
    </div>

    <!-- Accessories -->
    <div>
        <div class="flex items-center justify-between text-sm mb-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-headphones text-cyan-500"></i>
                <span>Accessories</span>
            </div>
            <span>98</span>
        </div>

        <div class="h-2 bg-slate-200 rounded-full">
            <div class="h-2 bg-cyan-500 rounded-full w-2/5"></div>
        </div>
    </div>

</div>

                <button
                    class="w-full mt-8 border border-blue-500 text-blue-600 rounded-xl py-3 hover:bg-blue-50">

                    View All Categories

                </button>

            </div>

        </div>

    </div>

</body>

</html>
@endsection