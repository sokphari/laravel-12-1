<main class="flex-1 p-4 lg:p-6 ">

    <!-- Product List Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <div class="flex flex-wrap items-center justify-between gap-4 p-5 pb-0">
            <div>
                <h2 class="text-lg font-bold text-slate-900">Product List</h2>
                <p class="text-sm text-slate-400">Manage and view all products in your inventory.</p>
            </div>
            <a href="{{ url('/product/insert') }}"
                class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm shadow-blue-200 transition">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                Add Product
            </a>
        </div>

        <!-- Filters -->
        <div class="flex flex-wrap items-center gap-3 p-5">

            <!-- Category -->
            <select id="categoryFilter"
                class="px-4 py-2 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500">

                <option value="">All Categories</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Home</option>
                <option>Sports</option>
                <option>Beauty</option>

            </select>

            <!-- Status -->
            <select id="statusFilter"
                class="px-4 py-2 border border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500">

                <option value="">All Statuses</option>
                <option>In Stock</option>
                <option>Low Stock</option>
                <option>Out of Stock</option>

            </select>

            <!-- Clear -->
            <button id="clearBtn" class="border border-slate-300 hover:bg-gray-100 px-5 py-2 rounded-xl">

                Clear

            </button>

        </div>

        <!-- Table -->
        <div class="overflow-x-auto px-5">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-slate-400 text-xs uppercase tracking-wide border-b border-slate-100">
                        <th class="text-left font-semibold py-3 pr-4">Product</th>
                        <th class="text-left font-semibold py-3 pr-4">SKU</th>
                        <th class="text-left font-semibold py-3 pr-4">Category</th>
                        <th class="text-left font-semibold py-3 pr-4">Quantity</th>
                        <th class="text-left font-semibold py-3 pr-4">Price</th>
                        <th class="text-left font-semibold py-3 pr-4">Status</th>
                        <th class="text-right font-semibold py-3 pl-4">Actions</th>
                    </tr>
                </thead>
                <tbody id="table-body" class="divide-y divide-slate-100">
                    <tr>
                        <td class="py-3 pr-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-lg">
                                    🎧</div>
                                <div>
                                    <p class="font-semibold text-slate-800">Wireless Headphones</p>
                                    <p class="text-xs text-slate-400">Sony</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 pr-4 text-slate-500">WH-1000XM5</td>
                        <td class="py-3 pr-4">
                            <span class="px-2.5 py-1 rounded-md text-xs font-semibold ${catClass}">Electronics</span>
                        </td>
                        <td class="py-3 pr-4 text-slate-700">58</td>
                        <td class="py-3 pr-4 text-slate-700">79.99</td>
                        <td class="py-3 pr-4">
                            <span class="px-2.5 py-1 rounded-md text-xs font-semibold ${statusClass}">In Stock</span>
                        </td>
                        <td class="text-right py-3 px-4">

                            <div class="relative inline-block">

                                <!-- Three Dots Button -->
                                <button type="button"
                                    class="action-btn w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="5" r="2" />
                                        <circle cx="12" cy="12" r="2" />
                                        <circle cx="12" cy="19" r="2" />
                                    </svg>
                                </button>

                                <!-- Popup Menu -->
                                <div
                                    class="action-menu hidden absolute right-12 top-0 w-40 bg-white border border-gray-200 rounded-xl shadow-xl z-50 overflow-hidden">

                                    <button
                                        class="w-full flex items-center gap-2 px-4 py-3 hover:bg-yellow-50 text-yellow-700 transition">
                                        ✏️ Edit
                                    </button>

                                    <button
                                        class="w-full flex items-center gap-2 px-4 py-3 hover:bg-red-50 text-red-600 transition">
                                        🗑️ Delete
                                    </button>

                                </div>

                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination footer -->
        <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-t border-slate-100 mt-2">
            <p class="text-sm text-slate-500" id="pagination-info">Showing 1 to 7 of 1,248 products</p>
            <div class="flex items-center gap-2" id="pagination-controls">
                <button class="px-3 py-1 rounded border border-gray-200 hover:bg-gray-50">&lt;</button>
                <button class="px-3 py-1 rounded boder bg-blue-600 text-white font-medium">1</button>
                <button class="px-3 py-1 rounded border border-gray-200 hover:bg-gray-50">2</button>
                <button class="px-3 py-1 rounded border border-gray-200 hover:bg-gray-50">3</button>
                <button class="px-3 py-1 rounded border border-gray-200 hover:bg-gray-50">4</button>
                <button class="px-3 py-1 rounded border border-gray-200 hover:bg-gray-50">&gt;</button>
            </div>
        </div>
    </div>

    <p class="text-center text-xs text-slate-300 mt-6">Product inventory dashboard — demo UI</p>
</main>

<script>
    const buttons = document.querySelectorAll(".action-btn");

    buttons.forEach(button => {

        button.addEventListener("click", function(e) {

            e.stopPropagation();

            const menu = this.nextElementSibling;

            document.querySelectorAll(".action-menu").forEach(item => {
                if (item !== menu) {
                    item.classList.add("hidden");
                }
            });

            menu.classList.toggle("hidden");

        });

    });

    document.addEventListener("click", function() {
        document.querySelectorAll(".action-menu").forEach(menu => {
            menu.classList.add("hidden");
        });
    });

    document.querySelectorAll(".action-menu").forEach(menu => {
        menu.addEventListener("click", function(e) {
            e.stopPropagation();
        });
    });
</script>
