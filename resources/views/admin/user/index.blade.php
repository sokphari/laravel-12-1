{{-- @extends() --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees / Users Dashboard</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans" x-data="{ openAddModal: false }">

    <div class="max-w-7xl mx-auto px-4 py-8">
        
        <!-- Top Nav / Profile Mock -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Employees / Users</h1>
            <div class="flex items-center gap-4">
                <div class="relative bg-white border border-gray-200 rounded-lg flex items-center px-3 py-1.5 w-80 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    {{-- <input type="text" placeholder="Search users by name, email, or role..." class="w-full text-xs bg-transparent outline-none text-gray-600 placeholder-gray-400"> --}}
                </div>
            </div>
        </div>

        <!-- Metric Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Total Users</span>
                    <div class="p-2 bg-purple-50 text-purple-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">24</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 4.2% from last month</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Admins</span>
                    <div class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">5</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 25% from last month</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Staff</span>
                    <div class="p-2 bg-green-50 text-green-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">19</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 5.6% from last month</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Active Users</span>
                    <div class="p-2 bg-amber-50 text-amber-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">21</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 8.7% from last month</p>
                </div>
            </div>
        </div>

        <!-- Main User List Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                <h2 class="font-semibold text-gray-800 text-lg">User List</h2>
                
                <div class="flex gap-2">
                    <select class="border border-gray-200 text-xs rounded-lg px-3 py-2 bg-white text-gray-600 outline-none">
                        <option>All Roles</option>
                    </select>
                    <select class="border border-gray-200 text-xs rounded-lg px-3 py-2 bg-white text-gray-600 outline-none">
                        <option>All Statuses</option>
                    </select>
                    <!-- Add User Button Trigger -->
                    <button @click="openAddModal = true" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 text-xs font-semibold rounded-lg shadow-sm flex items-center gap-1.5 transition">
                        <span>+ Add User</span>
                    </button>
                </div>
            </div>

            <!-- Table -->
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-gray-400 text-xs uppercase border-b border-gray-100 bg-gray-50/50">
                        <th class="py-3 px-6">User Name</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Role</th>
                        <th class="py-3 px-6">Department</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6">Last Login</th>
                        <th class="py-3 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    
                </tbody>
            </table>

            <!-- Table Footer -->
            <div class="p-4 border-t border-gray-100 flex justify-between items-center text-xs text-gray-500">
                <span>Showing 1 to 7 of 24 users</span>
                <div class="flex items-center gap-1">
                    <button class="px-2.5 py-1 rounded border border-gray-200 hover:bg-gray-50">&lt;</button>
                    <button class="px-2.5 py-1 rounded bg-blue-600 text-white font-medium">1</button>
                    <button class="px-2.5 py-1 rounded border border-gray-200 hover:bg-gray-50">2</button>
                    <button class="px-2.5 py-1 rounded border border-gray-200 hover:bg-gray-50">3</button>
                    <button class="px-2.5 py-1 rounded border border-gray-200 hover:bg-gray-50">4</button>
                    <button class="px-2.5 py-1 rounded border border-gray-200 hover:bg-gray-50">&gt;</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL POPUP -->
    <div x-show="openAddModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm" x-cloak>
        <div @click.away="openAddModal = false" class="bg-white rounded-2xl shadow-xl w-full max-w-lg mx-4 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-lg text-gray-900">Add New User</h3>
                <button @click="openAddModal = false" class="text-gray-400 hover:text-gray-600">&times;</button>
            </div>

            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Full Name</label>
                    <input type="text" class="w-full rounded-lg border-gray-200 border px-3 py-2 text-sm outline-none" value="Alex Johnson">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Email Address</label>
                    <input type="email" class="w-full rounded-lg border-gray-200 border px-3 py-2 text-sm outline-none" value="alex.j@example.com">
                </div>
                <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                    <button type="button" @click="openAddModal = false" class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100">Cancel</button>
                    <button type="button" @click="openAddModal = false" class="px-4 py-2 rounded-lg text-sm font-medium bg-blue-600 hover:bg-blue-700 text-white shadow-sm">Save User</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>