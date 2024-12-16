<x-app-layout>
    <div class="container mx-auto mt-10 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Tambah Diskon</h1>
        <form action="{{ route('diskon.store') }}" method="POST" class="space-y-6 bg-dark dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf

            <!-- Nama Diskon -->
            <div>
                <label for="nama_diskon" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Diskon</label>
                <input type="text" id="nama_diskon" name="nama_diskon" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       required>
            </div>

            <!-- Persentase -->
            <div>
                <label for="persentase" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Persentase</label>
                <input type="number" id="persentase" name="persentase" min="0" max="100" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       required>
            </div>

            <!-- Tanggal Mulai -->
            <div>
                <label for="tgl_mulai" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Mulai</label>
                <input type="date" id="tgl_mulai" name="tgl_mulai" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       required>
            </div>

            <!-- Tanggal Akhir -->
            <div>
                <label for="tgl_akhir" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Akhir</label>
                <input type="date" id="tgl_akhir" name="tgl_akhir" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       required>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="btn btn-primary px-3 py-1">Simpan</button>
                <a href="{{ route('diskon.index') }}" class="btn btn-danger px-3 py-1">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>
