<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav"> <!-- Hapus ms-auto di sini -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard</h1>
        
        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Sales</h5>
                        <p class="card-text">Rp{{ number_format($totalSales, 2, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text">{{ $totalProducts }} Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Low Stock Products</h5>
                        <ul>
                            @foreach($lowStockProducts as $product)
                                <li>{{ $product->name }} ({{ $product->quantity }} left)</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top 5 Products Sold -->
        <h3>Top 5 Products Sold</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Total Sold</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topProducts as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->total_sold }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
