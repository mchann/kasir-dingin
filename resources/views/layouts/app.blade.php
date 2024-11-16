<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2 bg-light">
                <div class="sidebar-sticky">
                    <h4 class="my-4">KASIR DINGIN >.<</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
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
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')
</body>
</html>
