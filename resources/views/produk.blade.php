<x-app-layout>
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-semibold text-white mb-6">Daftar Produk</h1>

        <div class="d-flex justify-content-between mb-4">
            <!-- Tombol Tambah Data dan Lihat Produk Dihapus -->
            <div class="col-md-6 d-flex gap-2">
                <a href="{{ route('produk.create') }}" class="btn btn-info">
                    Tambah Data
                </a>
                <a href="{{ route('produk.trashed') }}" class="btn btn-warning">
                    Lihat Produk Dihapus
                </a>
            </div>

            <!-- Formulir Pencarian -->
            <form action="{{ route('produk') }}" method="GET" class="d-flex align-items-center">
                <input 
                    type="text" 
                    name="search" 
                    class="form-control me-2" 
                    placeholder="Cari produk..."
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        <!-- Tabel Produk -->
        <div class="table-responsive">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
<<<<<<< HEAD
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Created At</th>
                        <th>Updated At</th>
=======
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga Dasar</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Diupload</th>
                        <th>Diubah</th>
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarProduk as $produk)
                        <tr>
<<<<<<< HEAD
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $produk->harga }}</td>
=======
                            <!-- Kolom Gambar -->
                            <td>
                                @if($produk->gambar)
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" class="w-16 h-16 object-cover">
                                @else
                                    <span class="text-gray-500">Tidak Ada Gambar</span>
                                @endif
                            </td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ number_format($produk->harga_dasar, 0, ',', '.') }}</td>
                            <td>{{ number_format($produk->harga_jual, 0, ',', '.') }}</td>
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->kategori->nama_kategori }}</td>
                            <td>{{ $produk->created_at }}</td>
                            <td>{{ $produk->updated_at }}</td>
                            <td>
<<<<<<< HEAD
                                <!-- Tombol Edit dengan Ikon -->
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                
                                <!-- Tombol Delete dengan Ikon -->
=======
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
