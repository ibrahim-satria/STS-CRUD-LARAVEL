    <!DOCTYPE html>
    <html>
    <head>
        <title>Kasir App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Kasir App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
