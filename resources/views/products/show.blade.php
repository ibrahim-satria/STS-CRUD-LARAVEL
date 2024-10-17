<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengatur tampilan body */
body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

/* Menambahkan margin pada tombol */
.btn {
    margin-right: 5px;
}

/* Style khusus untuk alert */
.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

/* Mengatur tampilan table */
.table th, .table td {
    vertical-align: middle;
}

/* Mengubah tampilan navbar */
.navbar {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar-brand {
    font-weight: bold;
    color: #007bff !important;
}

.nav-link {
    color: #343a40 !important;
}

.nav-link:hover {
    color: #007bff !important;
}

/* Style tambahan untuk form */
.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
}
</style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kasir App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto"> <!-- Ganti ms-auto ke me-auto -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <h1 class="mb-4">Detail Produk</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Produk: {{ $product->name }}</h5>
                <p class="card-text">Harga: Rp{{ number_format($product->price, 2, ',', '.') }}</p>
                <p class="card-text">Jumlah: {{ $product->quantity }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
