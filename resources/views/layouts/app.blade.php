<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Surabi Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link href="{{ asset('css/custom-traditional-theme.css') }}" rel="stylesheet" />

    {{-- START: CSS KUSTOM UNTUK BACKGROUND BERMOTIF --}}
    <style>
    /* 1. Mengatur background pada tag body dengan motif */
    body {
        /* Ganti dengan path gambar motif Anda. Pastikan gambar ini kecil dan bisa diulang (seamless). */
        background-image: url('{{ asset('images/patterns/bg-pattern.png') }}');

        /* Agar gambar berulang di seluruh layar */
        background-repeat: repeat;

        /* Warna cadangan (fallback) yang dekat dengan motif Anda */
        background-color: #f5f5dc;
        /* Warna krem/beige yang netral */
    }

    /* 2. Menambahkan background putih solid pada kontainer konten utama */
    /* Kita target elemen yang memiliki class container DAN berada di dalam tag <main> */
    /* Ini akan memisahkan header/footer dari background motif */
    main .container {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        /* Padding atas dan bawah sudah ada dari py-4 */
    }

    /* 3. Menjaga Navbar (Header) tetap solid (sudah diatur inline, tapi ini untuk kejelasan) */
    .navbar {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* 4. Memastikan Footer tidak terpengaruh (tergantung isi partials.footer) */
    /* Jika footer Anda memiliki background solid, ini harusnya aman. */
    /* Tambahan: Pastikan partials.footer berada di luar <main> */
    footer {
        /* Pastikan background solid di sini jika partials.footer adalah tag <footer> */
        /* Contoh: background-color: #343a40; */
    }
    </style>
    {{-- END: CSS KUSTOM UNTUK BACKGROUND BERMOTIF --}}

    @stack('styles')
</head>

<body>
    {{-- HEADER (NAVBAR) - Tetap Solid --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#7f5a20;">
        <div class="container">
            <img src="{{ asset('images/logo-surabi.png') }}" alt="Point Coffee Logo" class="mb-1" width="80">
            <a class="navbar-brand" href="{{ url('/images/logo-surabi.png') }}">Surabi Durian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    @auth
                    @if (Auth::user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menus.index') }}">Menus</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.index') }}">Messages</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-decoration-none"
                                style="cursor:pointer;">Logout</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA - Latar Belakang Putih di Dalamnya --}}
    <main class="py-4 container">
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

    {{-- FOOTER - Tetap Solid --}}
    @include('partials.footer')

</body>

</html>