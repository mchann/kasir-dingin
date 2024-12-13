<x-app-layout>
    <div class="container mx-auto mt-10 max-w-4xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Manajemen Stok</h1>
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
                            <a href="{{ route('manajemen.stok.edit', $item->id) }}" class="text-blue-500 hover:underline">
                                Edit Stok
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
