<aside
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed inset-y-0 left-0 z-50 flex w-65 flex-col border-r border-slate-200 bg-white px-4 py-5 shadow-sm transition-transform duration-300 lg:translate-x-0">
    {{-- Logo --}}
    <div class="flex h-20 items-center justify-center">
        <a
            href=""
            class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
            <svg
                class="h-8 w-8"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25M21 7.5v9L12 21.75m0-9L3 7.5m9 5.25v9M3 7.5v9l9 5.25" />
            </svg>
        </a>
    </div>

    {{-- Navigation --}}
    <nav class="mt-5 flex-1 space-y-2">
        <a
            href=""
            @class([ 'flex items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold transition' , 'bg-blue-50 text-blue-600'=> request()->routeIs('admin.dashboard'),
            'text-slate-600 hover:bg-slate-50 hover:text-slate-950' => !request()->routeIs('admin.dashboard'),
            ])
            >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955a1.126 1.126 0 0 1 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-6.75h4.5V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75" />
            </svg>

            <span>Overview</span>
        </a>

        <a
            href="{{ url('/product') }}"
            @class([
                'flex items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold transition',
                'bg-blue-50 text-blue-600' => request()->routeIs('admin.products.*'),
                'text-slate-600 hover:bg-slate-50 hover:text-slate-950' => !request()->routeIs('admin.products.*'),
            ])
            >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25M21 7.5v9L12 21.75m0-9L3 7.5m9 5.25v9M3 7.5v9l9 5.25" />
            </svg>

            <span>Products</span>
        </a>

        <a
            href="{{ route('admin.categories.index') }}"
            @class([ 'flex items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold transition' , 'bg-blue-50 text-blue-600'=> request()->routeIs('admin.categories.*'),
            'text-slate-600 hover:bg-slate-50 hover:text-slate-950' => !request()->routeIs('admin.categories.*'),
            ])
            >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9.568 3.75H5.25A1.5 1.5 0 0 0 3.75 5.25v4.318a1.5 1.5 0 0 0 .44 1.06l7.182 7.182a2.25 2.25 0 0 0 3.182 0l3.256-3.256a2.25 2.25 0 0 0 0-3.182L10.628 4.19a1.5 1.5 0 0 0-1.06-.44Z" />
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6.75 6.75h.008v.008H6.75V6.75Z" />
            </svg>

            <span>Categories</span>
        </a>

        <a
<<<<<<< HEAD
            href=""
            @class([ 'flex items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold transition' , 'bg-blue-50 text-blue-600'=> request()->routeIs('admin.users.*'),
            'text-slate-600 hover:bg-slate-50 hover:text-slate-950' => !request()->routeIs('admin.users.*'),
=======
            href="{{url('/users')}}"
            @class([
                'flex items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold transition',
                'bg-blue-50 text-blue-600' => request()->routeIs('admin.users.*'),
                'text-slate-600 hover:bg-slate-50 hover:text-slate-950' => !request()->routeIs('admin.users.*'),
>>>>>>> 7919524580cabd12498542f0a144bad2ed4f24c6
            ])
            >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.203-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <span>Employees / Users</span>

        </a>

        <form
            action="#"
            method="POST"
            class="pt-3">
            @csrf

            <button
                type="submit"
                class="flex w-full items-center gap-4 rounded-xl px-4 py-3 text-sm font-semibold text-slate-600 transition hover:bg-red-50 hover:text-red-600">
                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>

                <span>Logout</span>
            </button>
        </form>
    </nav>

    {{-- Warehouse card --}}
    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-50 text-blue-600">
                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25M21 7.5v9L12 21.75m0-9L3 7.5m9 5.25v9M3 7.5v9l9 5.25" />
                </svg>
            </div>

            <div class="min-w-0 flex-1">
                <p class="text-xs text-slate-500">
                    Warehouse
                </p>

                <p class="truncate text-sm font-semibold text-slate-900">
                    Main Warehouse
                </p>
            </div>

            <svg
                class="h-4 w-4 text-slate-500"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
    </div>
</aside>