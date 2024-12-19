<x-app-layout>
    <div class="container mx-auto mt-10 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Edit Produk</h1>
        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-dark dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
        
            <!-- Nama Produk -->
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="{{ $produk->nama_produk }}" required>
            </div>
        
            <!-- Harga Dasar -->
            <div>
                <label for="harga_dasar" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga Dasar</label>
                <input type="number" id="harga_dasar" name="harga_dasar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="{{ $produk->harga_dasar }}" required>
            </div>
        
            <!-- Harga Jual -->
            <div>
                <label for="harga_jual" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga Jual</label>
                <input type="number" id="harga_jual" name="harga_jual" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="{{ $produk->harga_jual }}" required>
            </div>
        
            <!-- Stok -->
            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                <input type="number" id="stok" name="stok" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400" value="{{ $produk->stok }}" readonly>
            </div>
        
            <!-- Kategori -->
            <div>
                <label for="kategori_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                <select id="kategori_id" name="kategori_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $produk->kategori_id ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <!-- Gambar -->
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gambar Produk</label>
                
                <!-- Pratinjau Gambar Lama -->
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" class="w-32 h-32 object-cover rounded">
                </div>

                <!-- Input File -->
                <input type="file" id="gambar" name="gambar" class="mt-1 block w-full text-sm text-gray-900 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Kosongkan jika tidak ingin mengganti gambar.</p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="btn btn-primary px-3 py-1">Simpan Perubahan</button>
                <a href="{{ route('produk') }}" class="px-3 py-1 btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>
