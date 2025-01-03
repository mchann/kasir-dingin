<x-app-layout>
    <div class="container mx-auto mt-10 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-100 mb-6">Tambah Kategori</h1>
        <form action="{{ route('kategori.store') }}" method="POST" class="space-y-6 bg-dark dark:bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf

            <!-- Nama Kategori -->
            <div>
                <label for="nama_kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Kategori</label>
                <input type="text" id="nama_kategori" name="nama_kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    required>
            </div>

            <!-- Buttons -->
            <div>
                <button 
                    type="submit" 
                    class="btn btn-primary px-3 py-1">
                    Simpan
                </button>

                <button>
                    <a href="{{ route('kategori') }}" class="px-3 py-1 btn btn-danger">
                        Batal
                    </a>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
