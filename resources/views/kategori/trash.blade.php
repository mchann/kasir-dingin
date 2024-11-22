<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Dihapus</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2 bg-light">
                <div class="sidebar-sticky">
                    <h4 class="my-4">Dashboard</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{ route('produk') }}" class="nav-link">Produk</a></li>
                        <li class="nav-item"><a href="{{ route('kategori') }}" class="nav-link">Kategori</a></li>
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
                        <a href="{{ route('kategori') }}" class="btn btn-success">Kembali</a>
                        <h5 class="card-title">Produk Dihapus</h5>

                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($daftarkategoridihapus as $kategori)
                                    <tr>
                                        <td>{{ $kategori->nama_kategori }}</td>
                                        <t>{{ $kategori->deleted_at }}</td>
                                        <td>
                                            <form action="{{ route('kategori.restore', $kategori->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH') 
                                                <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Yakin ingin mengembalikan produk ini?')">Restore</button>
                                            </form>
                                            <form action="{{ route('kategori.forceDelete', $kategori->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini secara permanen?')">Delete Permanen</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>