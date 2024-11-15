<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
<h1>Tambah Produk</h1>
<form action="{{ route('produk.store') }}" method="POST">
    @csrf
    <div>
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-control" id="kategori_id" name="kategori_id" required>
               @foreach($kategori as $item)
            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
        @endforeach
            </select>
     
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('produk') }}" class="btn btn-danger">Batal</a>
</form>
</div>

</body>
</html>

