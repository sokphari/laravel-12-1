<!DOCTYPE html>
<html lang="en" class="h-full bg-black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="h-full font-sans antialiased text-slate-100 bg-black flex items-center justify-center p-4 sm:p-6 md:p-10">

    <!-- Container Card -->
    <div class="w-full max-w-5xl grid grid-cols-1 lg:grid-cols-12 bg-slate-950 border border-slate-800/80 rounded-3xl shadow-2xl overflow-hidden shadow-blue-950/20">

        <!-- Left Column: Static Image / Hero Section -->
        <div class="relative lg:col-span-5 hidden lg:flex flex-col justify-between p-8 bg-gradient-to-br from-slate-900 via-slate-950 to-black overflow-hidden border-b lg:border-b-0 lg:border-r border-slate-800/80">
            <!-- Background Static Image with Gradient Overlay -->
            <img
                src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1000"
                alt="Student Registration Banner"
                class="absolute inset-0 w-full h-full object-cover opacity-25 mix-blend-luminosity">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>

            <!-- Top Branding -->
            <div class="relative z-10 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-600/20 border border-blue-500/40 flex items-center justify-center text-blue-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <span class="text-xs uppercase tracking-widest font-bold text-slate-400">Academy Portal</span>
            </div>

            <!-- Content Area -->
            <div class="relative z-10 my-auto py-12">
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 mb-4">
                    Student Onboarding
                </span>
                <h2 class="text-3xl font-extrabold text-white leading-tight">
                    Add New Students to the Management System
                </h2>
                <p class="text-sm text-slate-400 mt-3 leading-relaxed">
                    Ensure student details are accurate. Every entry automatically syncs with your database records.
                </p>
            </div>

            <!-- Bottom Note -->
            <div class="relative z-10 text-xs text-slate-500">
                Need help? Contact system administration.
            </div>
        </div>

        <!-- Right Column: Form Section -->
        <div class="lg:col-span-7 p-6 sm:p-10 flex flex-col justify-center bg-slate-950">

            <!-- Mobile Header (Visible only when left hero is hidden) -->
            <div class="lg:hidden mb-6 text-center">
                <h1 class="text-2xl font-bold text-white">Create Student</h1>
                <p class="text-xs text-slate-400 mt-1">Fill out the information below to add a student.</p>
            </div>

            <!-- Desktop Form Title -->
            <div class="hidden lg:block mb-8">
                <h1 class="text-2xl font-bold text-white tracking-tight">Student Details</h1>
                <p class="text-sm text-slate-400 mt-1">Enter profile information to generate a student profile.</p>
            </div>

            <!-- Laravel Form -->
            <form action="{{route('student.store')}}" enctype="multipart/form-data" method="post" class="space-y-5">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                        Full Name <span class="text-blue-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            placeholder="John Doe"
                            class="w-full pl-10 pr-4 py-3 bg-black/60 border border-slate-800 rounded-xl text-slate-100 placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-200">
                    </div>
                </div>

                <!-- Gender Field -->
                <div>
                    <label for="gender" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                        Gender <span class="text-blue-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <select
                            id="gender"
                            name="gender"
                            required
                            class="w-full pl-10 pr-10 py-3 bg-black/60 border border-slate-800 rounded-xl text-slate-100 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-200 appearance-none cursor-pointer">
                            <option value="" disabled selected class="bg-slate-900 text-slate-500">Select Gender</option>
                            <option value="male" class="bg-slate-900 text-slate-100">Male</option>
                            <option value="female" class="bg-slate-900 text-slate-100">Female</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3.5 text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                        Phone Number
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="+1 (555) 000-0000"
                            class="w-full pl-10 pr-4 py-3 bg-black/60 border border-slate-800 rounded-xl text-slate-100 placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-200">
                    </div>
                </div>

                <!-- Address Field -->
                <div>
                    <label for="address" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                        Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Street, City, State"
                            class="w-full pl-10 pr-4 py-3 bg-black/60 border border-slate-800 rounded-xl text-slate-100 placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-200">
                    </div>
                </div>

                <!-- Image Upload Field -->
                <div>
                    <label for="image" class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">
                        Image
                    </label>
                    <div class="relative">
                        <input
                            type="file"
                            id="image"
                            name="image"
                            class="w-full pl-10 pr-4 py-3 bg-black/60 border border-slate-800 rounded-xl text-slate-100 placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-200">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-3">
                    <button
                        type="submit"
                        class="w-full flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl font-semibold text-white bg-blue-600 hover:bg-blue-500 active:bg-blue-700 shadow-lg shadow-blue-600/25 hover:shadow-blue-500/35 transition-all duration-200 cursor-pointer">
                        <span>Create Student</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>