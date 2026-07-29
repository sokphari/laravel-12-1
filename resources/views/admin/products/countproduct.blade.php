<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Metrics Layout</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body >
<div class="flex items-center justify-center p-6">
    <!-- Metrics Grid Container -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-7xl">

    <!-- Card 1: Total Products -->
    <div class="bg-white/80 backdrop-blur-md border border-white/20 rounded-2xl p-6 flex items-center gap-4 shadow-lg">
      <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center shrink-0">
        <i data-lucide="box" class="w-7 h-7 text-blue-600"></i>
      </div>
      <div>
        <p class="text-xs font-medium text-slate-500">Total Products</p>
        <h3 class="text-2xl font-bold text-slate-900 tracking-tight">1,248</h3>
        <p class="text-xs font-medium text-emerald-600 flex items-center gap-1 mt-0.5">
          <i data-lucide="trending-up" class="w-3.5 h-3.5"></i>
          <span>12.5% from last month</span>
        </p>
      </div>
    </div>

    <!-- Card 2: In Stock -->
    <div class="bg-white/80 backdrop-blur-md border border-white/20 rounded-2xl p-6 flex items-center gap-4 shadow-lg">
      <div class="w-16 h-16 rounded-full bg-emerald-500/10 flex items-center justify-center shrink-0">
        <i data-lucide="check-square" class="w-7 h-7 text-emerald-600"></i>
      </div>
      <div>
        <p class="text-xs font-medium text-slate-500">In Stock</p>
        <h3 class="text-2xl font-bold text-slate-900 tracking-tight">1,037</h3>
        <p class="text-xs font-medium text-emerald-600 mt-0.5">
          83.2% <span class="text-slate-500 font-normal">of total products</span>
        </p>
      </div>
    </div>

    <!-- Card 3: Low Stock -->
    <div class="bg-white/80 backdrop-blur-md border border-white/20 rounded-2xl p-6 flex items-center gap-4 shadow-lg">
      <div class="w-16 h-16 rounded-full bg-amber-500/10 flex items-center justify-center shrink-0">
        <i data-lucide="alert-triangle" class="w-7 h-7 text-amber-600"></i>
      </div>
      <div>
        <p class="text-xs font-medium text-slate-500">Low Stock</p>
        <h3 class="text-2xl font-bold text-slate-900 tracking-tight">156</h3>
        <p class="text-xs font-medium text-amber-600 mt-0.5">
          12.5% <span class="text-slate-500 font-normal">of total products</span>
        </p>
      </div>
    </div>

    <!-- Card 4: Out of Stock -->
    <div class="bg-white/80 backdrop-blur-md border border-white/20 rounded-2xl p-6 flex items-center gap-4 shadow-lg">
      <div class="w-16 h-16 rounded-full bg-rose-500/10 flex items-center justify-center shrink-0">
        <i data-lucide="x-circle" class="w-7 h-7 text-rose-600"></i>
      </div>
      <div>
        <p class="text-xs font-medium text-slate-500">Out of Stock</p>
        <h3 class="text-2xl font-bold text-slate-900 tracking-tight">55</h3>
        <p class="text-xs font-medium text-rose-600 mt-0.5">
          4.4% <span class="text-slate-500 font-normal">of total products</span>
        </p>
      </div>
    </div>

  </div>
</div>
  
  

  <!-- Initialize Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>
</body>

</html>