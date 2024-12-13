<x-app-layout>
    <div class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-semibold text-white mb-6">Manajemen Stok</h1>

        <div class="d-flex justify-content-between mb-4">
            

            <!-- Formulir Pencarian -->
            <form action="{{ route('manajemen.stok') }}" method="GET" class="d-flex align-items-center">
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
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr class="text-gray-700 dark:text-gray-300">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $item->nama_produk }}</td>
                            <td class="border px-4 py-2">{{ $item->stok }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('manajemen.stok.edit', $item->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Edit Stok
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
