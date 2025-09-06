<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resto FaBa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #fdf6f0;
    }

    .navbar {
        background-color: #d32f2f;
    }

    .navbar-brand {
        color: white !important;
        font-weight: bold;
    }

    .card-header {
        background: #ff7043;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">🍜 FaBa Ramen</a>
            <div>
                <a href="/" class="btn btn-light">Home</a>
                <a href="{{ route('menus.index') }}" class="btn btn-light">Menu</a>
                <a href="{{ route('orders.create') }}" class="btn btn-warning">Pesan</a>
                <a href="{{ route('orders.index') }}" class="btn btn-light">Daftar Pesanan</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @if(session('ok')) <div class="alert alert-success">{{ session('ok') }}</div> @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
            </ul>
        </div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>