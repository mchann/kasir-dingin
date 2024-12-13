<x-app-layout>
    
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Dashboard Kasir Dingin</h1>

        <div class="row mt-4">
            <!-- Card Produk -->
            <div class="col-md-4">
                <div class="card text-white bg-info dark:bg-blue-800 mb-3 shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-cube fa-2x mr-2"></i>
                            <div>
                                <h5 class="card-title text-black">Produk</h5>
                                <p class="card-text text-black" >Jumlah Produk: {{ $jumlahProduk }}</p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>

            <!-- Card Kategori -->
            <div class="col-md-4">
                <div class="card text-white bg-info dark:bg-green-700 mb-3 shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-tags fa-2x mr-2"></i>
                            <div>
                                <h5 class="card-title text-black">Kategori</h5>
                                <p class="card-text text-black">Jumlah Kategori: {{ $jumlahKategori }}</p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>

            <!-- Card Penjualan (Tambahan) -->
            <div class="col-md-4">
                <div class="card text-white bg-success dark:bg-yellow-700 mb-3 shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chart-line fa-2x mr-2"></i>
                            <div>
                                <h5 class="card-title"> Penjualan Hari Ini</h5>
                                <p class="card-text">Rp. </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
