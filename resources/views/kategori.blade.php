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
                        <!-- Tabel Produk -->
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3">Tambah Data</a>
                                <a href="{{ route('produk.trashed') }}" class="btn btn-warning mb-3">Lihat Produk Dihapus</a>

                                <h5 class="card-title">Daftar Produk</h5>
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kategoris as $kategori)
                                            <tr>
                                                <td>{{ $kategori->nama_kategori }}</td> <td>
                                                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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