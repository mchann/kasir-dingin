<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir Pintar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">Kasir Dingin !</div>
        <div class="user-info">Selamat Datang, Admin</div>
    </header>

    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Manajemen Produk</a></li>
                <li><a href="#">Transaksi</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Pengaturan</a></li>
                {{-- <li><a href="#">Notifikasi</a></li> --}}
                <li><a href="#">Bantuan</a></li>
            </ul>
        </nav>
        
       
            <main class="main-content">
                <h1>Dashboard Kasir Dingin</h1>
                <section class="statistics">
                    <h2>Statistik Penjualan</h2>
                    <canvas id="salesChart" width="400" height="200" style="max-width: 100%;"></canvas>
                </section>
            
                <section class="recent-transactions">
                    <h2>Transaksi Terbaru</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>Produk A</td>
                                <td>3</td>
                                <td>2024-09-18</td>
                            </tr>
                            <tr>
                                <td>#002</td>
                                <td>Produk B</td>
                                <td>1</td>
                                <td>2024-09-19</td>
                            </tr>
                            <tr>
                                <td>#003</td>
                                <td>Produk C</td>
                                <td>5</td>
                                <td>2024-09-19</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
            
            <style>
            .container {
                display: flex;
                height: calc(100vh - 50px); /* Mengurangi tinggi header */
            }
            
            .sidebar {
                width: 180px; /* Mengurangi lebar sidebar */
                background-color: #2c3e50;
                color: white;
                padding: 15px;
                height: 100%; /* Sidebar menjadi tinggi penuh */
            }
            
            .main-content {
                flex-grow: 1;
                padding: 20px;
                overflow-y: auto; /* Agar konten bisa di-scroll jika terlalu panjang */
            }
            
            .statistics {
                margin-bottom: 20px;
            }
            </style>
            
        </main>
    </div>
{{-- 
    <footer>
        <p>Hak Cipta © 2024 Toko XYZ</p>
    </footer> --}}
</body>
</html>

<style>
b* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    height: 100vh; /* Memastikan body memiliki tinggi penuh */
}

header {
    background-color: #35424a;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.container {
    display: flex;
    height: calc(100vh - 50px); /* Mengurangi tinggi header */
}

.sidebar {
    width: 200px;
    background-color: #2c3e50;
    color: white;
    padding: 15px;
    height: 100%; /* Sidebar menjadi tinggi penuh */
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar li {
    margin: 15px 0;
}

.sidebar a {
    color: white;
    text-decoration: none;
}

.sidebar a:hover {
    text-decoration: underline;
}

.main-content {
    flex-grow: 1;
    padding: 20px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #35424a;
    color: white;
}


</style>