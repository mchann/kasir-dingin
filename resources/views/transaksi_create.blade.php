<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Transaksi</h1>

        <form action="{{ route('transaksi.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="number" step="0.01" class="form-control" id="total" name="total" required>
    </div>
    <div class="mb-3">
        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
        <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="Cash">Cash</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Bank Transfer">Bank Transfer</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="id_produk" class="form-label">Pilih Produk</label>
        <select class="form-control" id="id_produk" name="id_produk" required>
            @foreach($produk as $item)
                <option value="{{ $item->id }}">{{ $item->nama_produk }} - Rp{{ number_format($item->harga, 0, ',', '.') }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
        <input type="number" class="form-control" id="id_pelanggan" name="id_pelanggan" required>
    </div>
    <div class="mb-3">
        <label for="id_pengguna" class="form-label">ID Pengguna</label>
        <input type="number" class="form-control" id="id_pengguna" name="id_pengguna" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
