<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kasir Dingin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Kasir Dingin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Transaksi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengaturan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Produk Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Produk</h2>
        <div class="row">
            <!-- Produk 1 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Produk 1</h5>
                        <p class="card-text">Deskripsi singkat tentang produk 1.</p>
                        <p class="card-text"><strong>Rp 100.000</strong></p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">Deskripsi singkat tentang produk 2.</p>
                        <p class="card-text"><strong>Rp 200.000</strong></p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 3">
                    <div class="card-body">
                        <h5 class="card-title">Produk 3</h5>
                        <p class="card-text">Deskripsi singkat tentang produk 3.</p>
                        <p class="card-text"><strong>Rp 150.000</strong></p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
