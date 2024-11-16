<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2 bg-light">
                <div class="sidebar-sticky">
                    <h4 class="my-4">KASIR DINGIN >.<</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="dashboard" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="profile" class="nav-link">Profile</a></li>
                        <li class="nav-item"><a href="produk" class="nav-link">Produk</a></li>
                        <li class="nav-item"><a href="kategori" class="nav-link">Kategori</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Transaksi</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Detail Transaksi</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Laporan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Pelanggan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Pengguna</a></li>

                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <!-- Profile  -->
                        <h4 class="my-4"> Pengaturan Profil</h4>

                        <div class="card">
                            <div class="card-body text-center">
                                <img src="https://i.ibb.co/303wZ7V/upload-icon.png" alt="Upload Icon" class="img-fluid mb-3">
                                <p class="card-text">Format: JPG, JPEG, PNG, WEBP <br> Ukuran Max 3 MB</p>
                                <p class="card-text">Status Akun: <span class="text-success">Sudah Terverifikasi</span></p>
                                <p class="card-text">Status Email: <span class="text-success">Sudah Terverifikasi</span></p>
                                <p class="card-text">Status HP: <span class="text-success">Sudah Terverifikasi</span></p>
                                <p class="card-text">Verifikasi Identitas: <span class="text-danger">Belum Terverifikasi</span></p>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan nama pengguna Anda">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi Anda">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="confirm-password">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi kata sandi Anda">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>