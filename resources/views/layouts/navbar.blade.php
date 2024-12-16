<!-- resources/views/layouts/navbar.blade.php -->
<nav class="w-64 bg-gray-800 text-gray-200 dark:text-white shadow-md ">

    <div class="p-4">
        <!-- Logo -->
        <div class="mb-6 flex items-center pl-4">
            <img src="{{ asset('images/logokasir.png') }}" alt="Logo Kasir Dingin" class="h-12">
            <span class="ml-2 text-white text-xl font-bold">       </span>
        </div>
        
        <ul class="space-y-2">
            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/dash.png') }}" alt="Dashboard" class="h-6 w-6 mr-2">
                    <span>Dashboard</span>
                </a>
            </li>
            
            <!-- Produk -->
            <li>
                <a href="{{ route('produk') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/produk.png') }}" alt="Produk" class="h-6 w-6 mr-2">
                    <span>Produk atau Jasa</span>
                </a>
            </li>

              <!-- manajemen stok || just update stok -->
              <li>
                <a href="{{ route('manajemen.stok') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/stok.png') }}" alt="Produk" class="h-6 w-6 mr-2">
                    <span>Manajemen Stok</span>
                </a>
            </li>
            
            <!-- Kategori -->
            <li>
                <a href="{{ route('kategori') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/kat.png') }}" alt="Kategori" class="h-6 w-6 mr-2">
                    <span>Kategori</span>
                </a>
            </li>
            
             <!-- Diskon -->
             <li>
                <a href="{{ route('diskon.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/diskon.png') }}" alt="Diskon" class="h-6 w-6 mr-2">
                    <span>Diskon</span>
                </a>
            </li>

            <!-- Transaksi -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/transaksi.png') }}" alt="Transaksi" class="h-6 w-6 mr-2">
                    <span>Transaksi</span>
                </a>
            </li>
            
            <!-- Laporan -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                    <img src="{{ asset('images/laporan.png') }}" alt="Laporan" class="h-6 w-6 mr-2">
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
