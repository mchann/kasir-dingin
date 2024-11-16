<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <li class="nav-item"><a href="dashboard" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="produk" class="nav-link">Produk</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Kategori</a></li>
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
                    <!-- Card 1: Produk -->
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Produk</h5>
                                <p class="card-text">Jumlah: 150</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Kategori -->
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Kategori</h5>
                                <p class="card-text">Jumlah: 25</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Transaksi -->
                    <div class="col-md-3">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Transaksi</h5>
                                <p class="card-text">Jumlah: 1195</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Diskon -->
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Diskon</h5>
                                <p class="card-text">Jumlah: 50</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card 5: Pelanggan -->
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Pelanggan</h5>
                                <p class="card-text">Jumlah: 300</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grafik Dummy -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sessions In Last 30 Days</h5>
                                <canvas id="myChart" width="400" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Sessions',
                    data: [12, 19, 3, 5, 2, 3, 9, 7, 11, 15, 18, 22],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>