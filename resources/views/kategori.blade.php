<x-app-layout>
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-semibold text-white mb-6">Daftar Kategori</h1>

        <div class="d-flex justify-content-between mb-4">
            <!-- Tombol Tambah Data dan Lihat Kategori Dihapus -->
            <div class="col-md-6 d-flex gap-2">
                <a href="{{ route('kategori.create') }}" class="btn btn-info">
                    Tambah Data
                </a>
                <a href="{{ route('kategori.trashed') }}" class="btn btn-warning" disabled>
                    Lihat Kategori Dihapus
                </a>
            </div>

            <!-- Formulir Pencarian -->
            <form action="{{ route('kategori') }}" method="GET" class="d-flex align-items-center">
                <input 
                    type="text" 
                    name="search" 
                    class="form-control me-2" 
                    placeholder="Cari Kategori..."
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        <!-- Tabel Kategori -->
        <div class="table-responsive">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th class="text-end">Action</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoris as $kategori)
                        <tr>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td class="text-end"> 
                                <!-- Tombol Edit dengan Ikon -->
                                <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                
                                <!-- Tombol Delete dengan Ikon -->
                                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
