<!DOCTYPE html>
<html lang="en">
@extends('layouts.admin.app')
@section('title', 'Overview')
@section('page-heading', 'Overview')
@section('content')
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inventory Dashboard</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body class="bg-slate-100">

<div class="max-w-7xl mx-auto p-6">

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Total Products</p>
                <h2 class="text-3xl font-bold mt-1">1,248</h2>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    12.5% from last month
                </p>
            </div>

            <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center">
                <i class="fa-solid fa-box text-blue-600 text-2xl"></i>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Total Categories</p>
                <h2 class="text-3xl font-bold mt-1">86</h2>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    8.3%
                </p>
            </div>

            <div class="h-14 w-14 rounded-full bg-green-100 flex items-center justify-center">
                <i class="fa-solid fa-tags text-green-600 text-2xl"></i>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Total Users</p>
                <h2 class="text-3xl font-bold mt-1">24</h2>
                <p class="text-green-500 text-sm mt-2">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    4.2%
                </p>
            </div>

            <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center">
                <i class="fa-solid fa-users text-purple-600 text-2xl"></i>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Low Stock</p>
                <h2 class="text-3xl font-bold mt-1">37</h2>
                <p class="text-red-500 text-sm mt-2">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    5.6%
                </p>
            </div>

            <div class="h-14 w-14 rounded-full bg-orange-100 flex items-center justify-center">
                <i class="fa-solid fa-triangle-exclamation text-orange-600 text-2xl"></i>
            </div>
        </div>

    </div>


    <!-- Product Table -->

    <div class="bg-white rounded-2xl shadow-sm mt-8">

        <div class="flex justify-between items-center p-6 border-b">

            <h2 class="font-semibold text-lg">
                Product List
            </h2>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                <i class="fa-solid fa-plus mr-2"></i>
                Add Product
            </button>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-gray-50">

                <tr class="text-left text-gray-500">

                    <th class="p-4">Product</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th></th>

                </tr>

                </thead>

                <tbody>

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://placehold.co/45"
                        class="rounded-lg">

                        Wireless Headphones
                    </td>

                    <td>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                            Electronics
                        </span>
                    </td>

                    <td>58</td>

                    <td>$79.99</td>

                    <td>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                            In Stock
                        </span>
                    </td>

                    <td>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </td>

                </tr>

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://placehold.co/45"
                        class="rounded-lg">

                        Mechanical Keyboard
                    </td>

                    <td>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                            Electronics
                        </span>
                    </td>

                    <td>34</td>

                    <td>$129.99</td>

                    <td>
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">
                            Low Stock
                        </span>
                    </td>

                    <td>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </td>

                </tr>

                <tr class="hover:bg-gray-50">

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://placehold.co/45"
                        class="rounded-lg">

                        Office Chair
                    </td>

                    <td>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">
                            Furniture
                        </span>
                    </td>

                    <td>12</td>

                    <td>$149.99</td>

                    <td>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                            Out of Stock
                        </span>
                    </td>

                    <td>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </td>

                </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- Bottom -->

    <div class="grid lg:grid-cols-2 gap-6 mt-8">

        <!-- Category -->

        <div class="bg-white rounded-2xl shadow-sm">

            <div class="flex justify-between p-6 border-b">

                <h2 class="font-semibold">
                    Category List
                </h2>

                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Add Category
                </button>

            </div>

            <table class="w-full">

                <thead class="bg-gray-50">

                <tr>

                    <th class="text-left p-4">Category</th>
                    <th>Products</th>
                    <th>Description</th>

                </tr>

                </thead>

                <tbody>

                <tr class="border-b">

                    <td class="p-4">Electronics</td>
                    <td>320</td>
                    <td>Electronic devices</td>

                </tr>

                <tr class="border-b">

                    <td class="p-4">Furniture</td>
                    <td>150</td>
                    <td>Office furniture</td>

                </tr>

                <tr>

                    <td class="p-4">Accessories</td>
                    <td>98</td>
                    <td>Misc items</td>

                </tr>

                </tbody>

            </table>

        </div>

        <!-- Users -->

        <div class="bg-white rounded-2xl shadow-sm">

            <div class="flex justify-between p-6 border-b">

                <h2 class="font-semibold">
                    User List
                </h2>

                <a href="{{ url('/users/create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Add User
                </a>

            </div>

            <table class="w-full">

                <thead class="bg-gray-50">

                <tr>

                    <th class="text-left p-4">User</th>
                    <th>Role</th>
                    <th>Status</th>

                </tr>

                </thead>

                <tbody>

                <tr class="border-b">

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://i.pravatar.cc/45?img=12"
                        class="rounded-full">

                        John Doe
                    </td>

                    <td>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                            Admin
                        </span>
                    </td>

                    <td>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                            Active
                        </span>
                    </td>

                </tr>

                <tr class="border-b">

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://i.pravatar.cc/45?img=22"
                        class="rounded-full">

                        Jane Smith
                    </td>

                    <td>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">
                            Manager
                        </span>
                    </td>

                    <td>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                            Active
                        </span>
                    </td>

                </tr>

                <tr>

                    <td class="p-4 flex items-center gap-3">
                        <img src="https://i.pravatar.cc/45?img=15"
                        class="rounded-full">

                        Emily Davis
                    </td>

                    <td>
                        <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs">
                            Staff
                        </span>
                    </td>

                    <td>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                            Inactive
                        </span>
                    </td>

                </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
@endsection