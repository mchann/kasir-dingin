<x-app-layout>
    <div class="container mx-auto mt-10 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Tambah atau Kurangi Stok Produk</h1>
        <form action="{{ route('manajemen.stok.update', $produk->id) }}" method="POST" class="space-y-6 bg-dark dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <!-- Nama Produk (Read-only) -->
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"
                       readonly>
            </div>

            <!-- Edit Stok -->
            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                <input type="number" id="stok" name="stok" value="{{ $produk->stok }}" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       required>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="btn btn-primary px-3 py-1">Simpan</button>
                <a href="{{ route('manajemen.stok') }}" class="btn btn-danger px-3 py-1">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>
