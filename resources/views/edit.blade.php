<x-app-layout>
    <div class="container mx-auto mt-10 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Edit Produk</h1>
        <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="space-y-6 bg-dark dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
        
            <!-- Nama Produk -->
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" class="mt-1 block w-full ..." value="{{ $produk->nama_produk }}" required>
            </div>
        
            <!-- Harga Dasar -->
            <div>
                <label for="harga_dasar" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga Dasar</label>
                <input type="number" id="harga_dasar" name="harga_dasar" class="mt-1 block w-full ..." value="{{ $produk->harga_dasar }}" required>
            </div>
        
            <!-- Harga Jual -->
            <div>
                <label for="harga_jual" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga Jual</label>
                <input type="number" id="harga_jual" name="harga_jual" class="mt-1 block w-full ..." value="{{ $produk->harga_jual }}" required>
            </div>
        
            <!-- Stok -->
            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                <input type="number" id="stok" name="stok" class="mt-1 block w-full ..." value="{{ $produk->stok }}" required>
            </div>
        
            <!-- Kategori -->
            <div>
                <label for="kategori_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                <select id="kategori_id" name="kategori_id" class="mt-1 block w-full ..." required>
                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $produk->kategori_id ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <!-- Buttons -->
            <div>
                <button type="submit" class="btn btn-primary px-3 py-1">Simpan Perubahan</button>
                <button>
                    <a href="{{ route('produk') }}" class="px-3 py-1 btn btn-danger">Batal</a>
                </button>
            </div>
        </form>
        
    </div>
</x-app-layout>
