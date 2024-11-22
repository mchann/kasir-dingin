<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
<h1>Edit Kategori</h1>
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Kategori Produk</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
        </div>
     
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('kategori') }}" class="btn btn-danger">Batal</a>
</form>
</div>

</body>
</html>

