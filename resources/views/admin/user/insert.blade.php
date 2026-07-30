@extends('layouts.admin.app')
<!-- @yield('content') -->
@section('page-heading','Create User Data')
@section('content')
<div class="max-w-7xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <div class="flex justify-between">
        <a href="{{ url('/users') }}" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white bg-white border border-gray-300 rounded-lg hover:bg-red-500 transition-colors">
            <!-- Left Chevron SVG -->
            <svg class="w-4 text-gray-500 hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back
        </a>
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Create User</h2>
    </div>

  <form class="space-y-5" action="" method="POST">
    
    <!-- User Name -->
    <div>
      <label for="userName" class="block text-sm font-semibold text-gray-700 mb-1">User Name</label>
      <input type="text" id="userName" name="userName" placeholder="Enter full name" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email address" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
    </div>

    <!-- Role & Department Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <!-- Role -->
      <div>
        <label for="role" class="block text-sm font-semibold text-gray-700 mb-1">Role</label>
        <select id="role" name="role" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none bg-white transition-all">
          <option value="" disabled selected>Select role</option>
          <option value="admin">Admin</option>
          <option value="manager">Manager</option>
          <option value="user">User</option>
        </select>
      </div>

      <!-- Department -->
      <div>
        <label for="department" class="block text-sm font-semibold text-gray-700 mb-1">Department</label>
        <select id="department" name="department" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none bg-white transition-all">
          <option value="" disabled selected>Select department</option>
          <option value="it">IT</option>
          <option value="hr">Human Resources</option>
          <option value="finance">Finance</option>
          <option value="sales">Sales</option>
        </select>
      </div>
    </div>

    <!-- Status -->
    <div>
      <label for="status" class="block text-sm font-semibold text-gray-700 mb-1">Status</label>
      <select id="status" name="status" required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none bg-white transition-all">
        <option value="active" selected>Active</option>
        <option value="inactive">Inactive</option>
        <option value="pending">Pending</option>
      </select>
    </div>

    <!-- Form Actions -->
    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
      <button type="cencel" class="px-5 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-all">
        Cancel
      </button>
      <a href="">
        <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-sm transition-all">
            Save User
      </button>
      </a>
    </div>

  </form>
</div>
@endsection