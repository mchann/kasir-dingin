<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="register-container mt-5">
        <h2 class="text-center">Daftar</h2>
        <form>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi kata sandi" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
        <div class="text-center mt-3">
            <a href="#">Sudah punya akun? Masuk</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
