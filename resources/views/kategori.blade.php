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
            @include('components.navbar')

            <!-- Main Content -->
            <main class="col-md-10">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <!-- Tabel Produk -->
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3">Tambah Data</a>
                                <a href="{{ route('kategori.trashed') }}" class="btn btn-secondary mb-3" disabled>Lihat Produk Dihapus</a>

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
                                                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
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