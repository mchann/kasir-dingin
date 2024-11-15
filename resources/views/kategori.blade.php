<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoris as $kategori)
                <tr>
                    <td>{{ $kategori->nama_kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
