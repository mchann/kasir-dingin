<x-app-layout>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Transaksi</h1>

        <table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->produk->nama_produk ?? '-' }}</td>
            <td>Rp{{ number_format($item->produk->harga ?? 0, 0, ',', '.') }}</td>
            <td>{{ $item->produk->kategori->nama_kategori ?? '-' }}</td>
            <td>{{ $item->total }}</td>
            <td>Rp{{ number_format(($item->produk->harga ?? 0) * $item->total, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('transaksi.edit', $item->id_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('transaksi.destroy', $item->id_transaksi) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</x-app-layout>