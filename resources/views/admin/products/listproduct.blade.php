<main class="flex-1 p-4 lg:p-6 ">

    <!-- Product List Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <div class="flex flex-wrap items-center justify-between gap-4 p-5 pb-0">
            <div>
                <h2 class="text-lg font-bold text-slate-900">Product List</h2>
                <p class="text-sm text-slate-400">Manage and view all products in your inventory.</p>
            </div>
            <a href="{{ route('insert.products') }}"
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
        <div class=" px-5">

            <table class="w-full text-left border-collapse">




                <thead>
                    <tr class="text-gray-400 text-xs uppercase border-b border-gray-100 bg-gray-50/50">
                    <tr class="text-slate-400 text-xs uppercase tracking-wide border-b border-slate-100">
                        <th class="text-left font-semibold py-3 pr-4">Product</th>
                        <th class="text-left font-semibold py-3 pr-4">description</th>
                        <th class="text-left font-semibold py-3 pr-4">SKU</th>
                        <th class="text-left font-semibold py-3 pr-4">Category</th>
                        <th class="text-left font-semibold py-3 pr-4">Quantity</th>
                        <th class="text-left font-semibold py-3 pr-4">Price</th>
                        <th class="text-left font-semibold py-3 pr-4">Status</th>
                        <th class="text-right font-semibold py-3 pl-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @foreach ($products as $prd)
                        
             
                    <tr class="text-gray-600 hover:bg-gray-50/50 transition">
                        <td class="py-3 pr-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-lg overflow-hidden">
                                    <img src="https://i.pinimg.com/736x/70/98/91/709891f06ecfe7260fbcc88787cf59ce.jpg"
                                        alt="" class="w-full h-full">
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-800">{{$prd->name}}</p>
                                    <p class="text-xs text-slate-400">Sony</p>
                                </div>
                            </div>
                        </td>
                        
                        <td class="py-3 pr-4 text-slate-500">{{$prd->description}}</td>
                        <td class="py-3 pr-4 text-slate-500">{{$prd->sku}}</td>
                        <td class="py-3 pr-4">
                            <span class="px-2.5 py-1 rounded-md text-xs font-semibold ${catClass}">{{$prd->category_id}}</span>
                        </td>
                        <td class="py-3 pr-4 text-slate-700">{{$prd->quantity}}</td>
                        <td class="py-3 pr-4 text-slate-700">{{$prd->price}}</td>
                        <td class="py-3 pr-4">
                            <span class="px-2.5 py-1 rounded-md text-xs font-semibold ${statusClass}">In Stock</span>
                        </td>
                        <td class="relative py-3  text-right" x-data="{ open: false }">
                            <button type="button" @click.stop="open = !open"
                                class="inline-flex h-8 w-8   rounded-lg text-slate-500 hover:bg-slate-100 hover:text-slate-700 transition">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>

                            <div x-show="open" x-transition.origin.top.right @click.outside="open = false" x-cloak
                                class="absolute right-6 top-11 z-50 w-36 overflow-hidden rounded-xl border border-gray-200 bg-white py-1 shadow-xl">
                                <a href="{{ route('edit.products', $prd->id) }}"
                                    class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <i class="fa-solid fa-pen-to-square w-4 text-center"></i>
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('delete.products', $prd->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this product?')"
                                        class="flex w-full items-center gap-3 px-4 py-2.5 text-left text-sm text-red-600 hover:bg-red-50 transition">
                                        <i class="fa-solid fa-trash-can w-4 text-center"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                           @endforeach
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

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function toggleMenu(button) {
        // Close all other menus
        document.querySelectorAll(".action-menu").forEach(menu => {
            if (menu !== button.nextElementSibling) {
                menu.classList.add("hidden");
            }
        });

        // Toggle current menu
        button.nextElementSibling.classList.toggle("hidden");
    }

    // Close when clicking outside
    document.addEventListener("click", function(e) {
        if (!e.target.closest("td")) {
            document.querySelectorAll(".action-menu").forEach(menu => {
                menu.classList.add("hidden");
            });
        }
    });
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
                        '#22C55E' // Green-500
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
