<header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="flex h-20 items-center gap-4 px-4 sm:px-6 lg:px-8">
        {{-- Mobile menu --}}
        <button
            type="button"
            @click="sidebarOpen = true"
            class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-600 lg:hidden"
        >
            <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
            </svg>
        </button>

        <h1 class="text-xl font-bold text-slate-950 sm:text-2xl">
            @yield('page-heading', 'Inventory Dashboard')
        </h1>

        <div class="ml-auto flex items-center gap-3">
            {{-- Search --}}
            <!-- <form
                action="#"
                method="GET"
                class="hidden md:block"
            >
                <div class="relative">
                    <svg
                        class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-4.35-4.35m1.1-5.4a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z"
                        />
                    </svg>

                    <input
                        type="search"
                        name="search"
                        placeholder="Search products, categories, users..."
                        class="h-12 w-80 rounded-xl border border-slate-200 bg-white pl-12 pr-4 text-sm text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10"
                    >
                </div>
            </form> -->

            {{-- Notification --}}
            <button
                type="button"
                class="relative flex h-11 w-11 items-center justify-center rounded-full bg-slate-50 text-slate-600 transition hover:bg-slate-100"
            >
                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                    />
                </svg>

                <span class="absolute right-0 top-0 flex h-5 min-w-5 items-center justify-center rounded-full bg-blue-600 px-1 text-[10px] font-bold text-white">
                    3
                </span>
            </button>

            {{-- Profile --}}
            <div
                x-data="{ open: false }"
                class="relative"
            >
                <button
                    type="button"
                    @click="open = !open"
                    class="flex items-center gap-3 rounded-xl p-1.5 transition hover:bg-slate-50"
                >
                    <img
                        src="https://ui-avatars.com/api/?name=John+Doe&background=e2e8f0&color=0f172a"
                        alt="John Doe"
                        class="h-11 w-11 rounded-full object-cover"
                    >

                    <div class="hidden text-left sm:block">
                        <p class="text-sm font-semibold text-slate-900">
                            John Doe
                        </p>

                        <p class="text-xs text-slate-500">
                            Admin
                        </p>
                    </div>

                    <svg
                        class="hidden h-4 w-4 text-slate-500 sm:block"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m19.5 8.25-7.5 7.5-7.5-7.5"
                        />
                    </svg>
                </button>

                <div
                    x-show="open"
                    x-transition
                    @click.outside="open = false"
                    class="absolute right-0 mt-2 w-48 rounded-xl border border-slate-200 bg-white p-2 shadow-xl"
                    style="display: none;"
                >
                    <a
                        href="#"
                        class="block rounded-lg px-3 py-2 text-sm text-slate-600 hover:bg-slate-50"
                    >
                        My Profile
                    </a>

                    <a
                        href="#"
                        class="block rounded-lg px-3 py-2 text-sm text-slate-600 hover:bg-slate-50"
                    >
                        Settings
                    </a>

                    <button
                        type="button"
                        class="block w-full rounded-lg px-3 py-2 text-left text-sm text-red-600 hover:bg-red-50"
                    >
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>