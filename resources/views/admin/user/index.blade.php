@extends('layouts.admin.app')

@section('page-heading', 'Employees / Users')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">

        <!-- Metric Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Total Users</span>
                    <div class="p-2 bg-purple-50 text-purple-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">{{ $totalUsers ?? 24 }}</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 4.2% from last month</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Admins</span>
                    <div class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">{{ $admins }}</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 25% from last month</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Staff</span>
                    <div class="p-2 bg-green-50 text-green-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">{{ $staff }}</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 5.6% from last month</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="text-xs font-semibold text-gray-500">Active Users</span>
                    <div class="p-2 bg-amber-50 text-amber-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2">{{ $action }}</h3>
                    <p class="text-xs text-emerald-600 font-medium mt-1 flex items-center gap-1">↑ 8.7% from last month</p>
                </div>
            </div>
        </div>

        <!-- Main User List Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-visible">
            <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                <h2 class="font-semibold text-gray-800 text-lg">User List</h2>

                <div class="flex gap-2">
                    <select class="border border-gray-200 text-xs rounded-lg px-3 py-2 bg-white text-gray-600 outline-none">
                        <option>All Roles</option>
                    </select>
                    <select class="border border-gray-200 text-xs rounded-lg px-3 py-2 bg-white text-gray-600 outline-none">
                        <option>All Statuses</option>
                    </select>

                    <!-- Add User Button / Trigger (Updated to use standard resource route name) -->
                    <a href="{{ route('users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 text-xs font-semibold rounded-lg shadow-sm flex items-center gap-1.5 transition">
                        <span>+ Add User</span>
                    </a>
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
                        <th class="py-3 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @forelse ($users as $user)
                        <tr class="text-gray-600 hover:bg-gray-50/50 transition">
                            <td class="py-3 px-6">{{ $user->name }}</td>
                            <td class="py-3 px-6">{{ $user->email }}</td>
                            <td class="py-3 px-6">{{ $user->role }}</td>
                            <td class="py-3 px-6 text-gray-500 text-xs">
                                {{ $user->department ?? 'N/A' }}
                            </td>
                            <td class="py-3 px-6">
                                <span class="px-2 py-1 text-xs font-semibold text-emerald-700 bg-emerald-50 rounded-full">
                                    {{ $user->status ?? 'Active' }}
                                </span>
                            </td>

                            <td class="relative py-3 px-6 text-center" x-data="{ open: false }">
                                <button type="button" @click.stop="open = !open"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-slate-100 hover:text-slate-700 transition">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                <div x-show="open" x-transition.origin.top.right @click.outside="open = false" x-cloak
                                    class="absolute right-6 top-11 z-50 w-36 overflow-hidden rounded-xl border border-gray-200 bg-white py-1 shadow-xl">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                        <i class="fa-solid fa-pen-to-square w-4 text-center"></i>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user?')"
                                            class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-red-600 hover:bg-red-50 transition">
                                            <i class="fa-solid fa-trash-can w-4 text-center"></i>
                                            <span>Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-6 text-center text-gray-400 text-sm">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex justify-between items-center px-6 py-5 border-t border-gray-500">
                <p class="text-sm text-slate-500">Showing 1-5 of 86 categories</p>
                <div class="flex gap-2">
                    <button class="w-10 h-10 rounded-lg border hover:bg-slate-100"><</button>
                    <button class="w-10 h-10 rounded-lg bg-blue-600 text-white">1</button>
                    <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">2</button>
                    <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">3</button>
                    <button class="w-10 h-10 rounded-lg border hover:bg-slate-100">></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Recent Users Section -->
    <div class="max-w-7xl mx-auto px-4 mt-6">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
            <!-- Role Distribution -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between px-6 py-5 border-b ">
                    <h2 class="text-lg font-semibold text-black"> Role Distribution</h2>
                </div>

                <div class="p-6 flex flex-col lg:flex-row items-center gap-10">
                    <div class="relative w-52 h-52">
                        <canvas id="roleChart"></canvas>
                        <!--total-->
                        <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                            <h3 class="text-4xl font-bold text-gray-800">{{ $totalUsers }}</h3>
                            <p class="text-gray-500 text-sm">Total Users</p>
                        </div>
                    </div>
                    <!--admin-->
                    <div class="flex-1 space-y-6 w-full">
                        <div class="flex items-center justify-between bg-blue-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-blue-500"></span>
                                <span class="font-medium text-gray-700">Admin</span>
                            </div>
                            <span class="font-bold text-blue-600">{{ $admins }}</span>
                        </div>
                        <!--manager-->
                        <div class="flex items-center justify-between bg-purple-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-purple-500"></span>
                                <span class="font-medium text-gray-700">Manager</span>
                            </div>
                            <span class="font-bold text-purple-600">{{ $managers }}</span>
                        </div>
                        <!--staff-->
                        <div class="flex items-center justify-between bg-green-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-green-500"></span>
                                <span class="font-medium text-gray-700">Staff</span>
                            </div>
                            <span class="font-bold text-green-600">{{ $staff }}</span>
                        </div>
                    </div>
    
                </div>
            </div>

            <!-- Recently Added Users -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between px-6 py-5 border-b">
                    <h2 class="text-lg font-semibold text-black">Recently Added Users</h2>
                    <a href="{{ route('users.index') }}" class="bg-white text-emerald-600 px-4 py-2 rounded-lg text-sm
                     font-semibold hover:bg-gray-100 transition"> View All </a>
                </div>

                <div class="divide-y">
                    @forelse($recentUsers as $user)

                    <div class="flex items-center justify-between p-2 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                        </div>
                        <div class="flex gap-7 items-center">

                            <!-- Name -->
                            <h4 class="font-semibold text-gray-800">{{ $user->name }}</h4>

                            <!-- Email -->
                            <p class="text-sm text-gray-500">{{ $user->email }}</p>

                            <!-- role -->
                            <p class="text-sm bg-red-500 px-1 py-1 rounded-2xl text-white">{{ $user->role }}</p>
                            
                            <!-- Date -->
                            <p class="text-sm text-gray-500 mt-2">{{ $user->created_at->format('M d, Y') }}</p>

                            <!-- Action -->
                            <div class="relative py-3 px-6 text-center" x-data="{ open: false }">
                                <button type="button" @click.stop="open = !open"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-slate-100 hover:text-slate-700 transition">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                <div x-show="open" x-transition.origin.top.right @click.outside="open = false" x-cloak
                                    class="absolute right-6 top-11 z-50 w-36 overflow-hidden rounded-xl border border-gray-200 bg-white py-1 shadow-xl">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                        <i class="fa-solid fa-pen-to-square w-4 text-center"></i>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user?')"
                                            class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-red-600 hover:bg-red-50 transition">
                                            <i class="fa-solid fa-trash-can w-4 text-center"></i>
                                            <span>Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Role and Date -->
                    <div class="text-right">

                        <!-- Admin -->
                        @if($user->role === 'Admin')
                           <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Admin</span>

                        <!-- Manager -->
                        @elseif($user->role === 'Manager')
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Manager</span>

                        <!-- Staff -->
                        @elseif($user->role === 'Staff')
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Staff</span>

                        @endif

                        {{-- <!-- Date -->
                        <p class="text-sm text-gray-500 mt-2">{{ $user->created_at->format('M d, Y') }}</p> --}}
                    </div>
                    @empty
                   <div class="p-6 text-center text-gray-500">No users found.</div>
                   @endforelse
                </div>
            </div>
        </div>
    </div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('roleChart').getContext('2d');
        const adminCount = {{ $admins }};
        const managerCount = {{ $managers }};
        const staffCount = {{ $staff }};
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Admin', 'Manager', 'Staff'],
                datasets: [{
                    data: [
                        adminCount,
                        managerCount,
                        staffCount
                    ],
                    backgroundColor: [
                        '#3B82F6',
                        '#A855F7',
                        '#22C55E'
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '75%',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    });
</script>
@endsection