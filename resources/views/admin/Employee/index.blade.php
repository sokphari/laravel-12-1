<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    
    <!-- Load Tailwind CSS via CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Optional: Add Google Fonts for a cleaner look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F3F4F6;
        }
    </style>
</head>
<body class="p-6 md:p-12">
    <div class="max-w-7xl mx-auto"> 
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Employee Management</h1>
            <p class="text-gray-500">Overview of your team's roles and recent additions.</p>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mt-6">
            <!-- Role Distribution -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between px-6 py-5 border-b bg-gradient-to-r from-blue-600 to-indigo-600">
                    <h2 class="text-lg font-semibold text-white">
                        Role Distribution
                    </h2>
                </div>

                <div class="p-6 flex flex-col lg:flex-row items-center gap-10">

                    <div class="relative w-52 h-52">
                        <canvas id="roleChart"></canvas>

                        <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                            <h3 class="text-4xl font-bold text-gray-800">
                                24
                            </h3>
                            <p class="text-gray-500 text-sm">
                                Total Users
                            </p>
                        </div>
                    </div>

                    <div class="flex-1 space-y-6 w-full">

                        <div class="flex items-center justify-between bg-blue-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-blue-500"></span>
                                <span class="font-medium text-gray-700">Admin</span>
                            </div>
                            <span class="font-bold text-blue-600">
                                5 (20.8%)
                            </span>
                        </div>

                        <div class="flex items-center justify-between bg-purple-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-purple-500"></span>
                                <span class="font-medium text-gray-700">Manager</span>
                            </div>
                            <span class="font-bold text-purple-600">
                                5 (20.8%)
                            </span>
                        </div>

                        <div class="flex items-center justify-between bg-green-50 rounded-xl px-4 py-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-green-500"></span>
                                <span class="font-medium text-gray-700">Staff</span>
                            </div>
                            <span class="font-bold text-green-600">
                                14 (58.4%)
                            </span>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Recently Added Users -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300">

                <div class="flex items-center justify-between px-6 py-5 border-b bg-gradient-to-r from-emerald-600 to-teal-600">
                    <h2 class="text-lg font-semibold text-white">
                        Recently Added Users
                    </h2>
                    <button class="bg-white text-emerald-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-100 transition">
                        View All
                    </button>
                </div>

                <div class="divide-y">

                    <!-- User 1 -->
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/45?img=11" alt="Olivia" class="w-12 h-12 rounded-full ring-2 ring-green-300">
                            <div>
                                <h4 class="font-semibold text-gray-800">
                                    Olivia Thomas
                                </h4>
                                <p class="text-sm text-gray-500">
                                    olivia@example.com
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Staff
                            </span>
                            <p class="text-sm text-gray-500 mt-2">
                                May 20, 2025
                            </p>
                        </div>
                    </div>

                    <!-- User 2 -->
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/45?img=15" alt="Daniel" class="w-12 h-12 rounded-full ring-2 ring-purple-300">
                            <div>
                                <h4 class="font-semibold text-gray-800">
                                    Daniel Anderson
                                </h4>
                                <p class="text-sm text-gray-500">
                                    daniel@example.com
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Manager
                            </span>
                            <p class="text-sm text-gray-500 mt-2">
                                May 19, 2025
                            </p>
                        </div>
                    </div>
                    <!-- User 3 -->
                    <div class="flex items-center justify-between p-5 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-4">
                            <img src="https://i.pravatar.cc/45?img=22" alt="Sophia" class="w-12 h-12 rounded-full ring-2 ring-blue-300">
                            <div>
                                <h4 class="font-semibold text-gray-800">
                                    Sophia Taylor
                                </h4>
                                <p class="text-sm text-gray-500">
                                    sophia@example.com
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                Admin
                            </span>
                            <p class="text-sm text-gray-500 mt-2">
                                May 18, 2025
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('roleChart').getContext('2d');
            
            // Hardcoded static data for the frontend display
            const adminCount = 5;
            const managerCount = 5;
            const staffCount = 14;

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Admin', 'Manager', 'Staff'],
                    datasets: [{
                        data: [adminCount, managerCount, staffCount],
                        backgroundColor: [
                            '#3B82F6', // Blue-500
                            '#A855F7', // Purple-500
                            '#22C55E'  // Green-500
                        ],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '75%', // Creates the hollow center
                    plugins: {
                        legend: {
                            display: false // Hidden since the HTML handles the custom legend
                        },
                        tooltip: {
                            enabled: true,
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed;
                                    }
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>