<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Inventory Dashboard')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<body class="bg-slate-50 text-slate-900 antialiased">
    <div
        x-data="{ sidebarOpen: false }"
        class="min-h-screen"
    >
        {{-- Mobile sidebar background --}}
        <div
            x-show="sidebarOpen"
            x-transition.opacity
            @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-slate-950/40 lg:hidden"
            style="display: none;"
        ></div>

        <x-admin.sidebar />

        <div class="lg:pl-65">
            <x-admin.navbar />

            <main class="p-4 sm:p-6 lg:p-8">
                @if(session('success'))
                    <div
                        class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700"
                    >
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div
                        class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-medium text-red-700"
                    >
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>