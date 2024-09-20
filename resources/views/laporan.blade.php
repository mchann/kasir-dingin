<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Laporan Keuangan</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total Pendapatan</td>
                <td>Rp {{ number_format($dataLaporan['totalPendapatan'], 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Total Pengeluaran</td>
                <td>Rp {{ number_format($dataLaporan['totalPengeluaran'], 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td><strong>Laba Bersih</strong></td>
                <td><strong>Rp {{ number_format($dataLaporan['labaBersih'], 2, ',', '.') }}</strong></td>
            </tr>
        </tbody>
    </table>

    <h3 class="mt-4">Detail Transaksi</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataLaporan['transaksis'] as $transaksi)
            <tr>
                <td>{{ $transaksi['tanggal'] }}</td>
                <td>{{ ucfirst($transaksi['jenis']) }}</td>
                <td>Rp {{ number_format($transaksi['jumlah'], 2, ',', '.') }}</td>
                <td>{{ $transaksi['keterangan'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
