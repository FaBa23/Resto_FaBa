@extends('layouts.app')

@section('content')

{{-- 1. Hero Section & CTA --}}
<header class="hero-section text-center text-white d-flex align-items-center justify-content-center position-relative"
    style="min-height: 80vh; overflow: hidden;">

    {{-- A. CAROUSEL UNTUK BACKGROUND FOTO (Posisi Absolute) --}}
    <div id="heroCarousel" class="carousel slide position-absolute w-100 h-100" data-bs-ride="carousel"
        data-bs-interval="5000">
        <div class="carousel-inner h-100">

            {{-- SLIDE BACKGROUND 1 --}}
            <div class="carousel-item active"
                style="background: url('{{ asset('images/home/hero-surabi-durian.jpg') }}') no-repeat center center; background-size: cover; height: 100%;">
            </div>

            {{-- SLIDE BACKGROUND 2 (Ganti path foto Anda) --}}
            <div class="carousel-item"
                style="background: url('{{ asset('images/home/hero-surabi-durian (2).jpg') }}') no-repeat center center; background-size: cover; height: 100%;">
            </div>

            {{-- Tambahkan SLIDE BACKGROUND 3 jika diperlukan --}}

        </div>
    </div>

    {{-- B. KONTEN TEKS DAN CTA (Posisi Relative/Static di atas Carousel) --}}
    {{-- Gunakan z-index tinggi agar teks berada di atas gambar --}}
    <div class="container bg-dark bg-opacity-75 p-5 rounded position-relative" style="z-index: 10;">
        <h1 class="display-3 fw-bold mb-3">Sensasi Durian Asli dalam Kehangatan Surabi Tradisional</h1>
        <p class="lead mb-4">Dibuat dari durian pilihan tanpa pemanis buatan, dijamin lumer dan bikin nagih!</p>
        <a href="{{ route('menu') }}" class="btn btn-warning btn-lg me-3 shadow-sm">
            🥞 LIHAT MENU LENGKAP
        </a>
        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20pesan%20surabi%20durian." target="_blank"
            class="btn btn-outline-light btn-lg shadow-sm">
            🛵 PESAN SEKARANG (via WA)
        </a>
    </div>
</header>

{{-- 2. Kenali Keunikan Kami (Value Proposition) --}}
<section id="keunggulan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Kenali Keunikan Surabi Durian Kami</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="fas fa-seedling fa-3x text-warning mb-3"></i>
                <h3>Durian Asli Pilihan</h3>
                <p>Kami hanya menggunakan durian lokal/montong terbaik yang matang sempurna, tanpa esens atau perasa
                    buatan.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="fas fa-fire fa-3x text-warning mb-3"></i>
                <h3>Dipanggang Segar</h3>
                <p>Adonan surabi dibuat dan dipanggang segar setiap hari di atas tungku, menghasilkan tekstur lembut dan
                    aroma khas.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="fas fa-heart fa-3x text-warning mb-3"></i>
                <h3>Resep Legendaris</h3>
                <p>Mengombinasikan resep surabi tradisional dengan kelezatan durian murni. Jaminan rasa autentik yang
                    bikin ketagihan!</p>
            </div>
        </div>
    </div>
</section>

{{-- 3. Menu Unggulan (Bestsellers) --}}
<section id="bestseller" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Menu Unggulan (Wajib Coba!)</h2>
        <div class="row">
            {{-- Card 1: Surabi Durian Original --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/surabi-original.jpg') }}" class="card-img-top"
                        alt="Surabi Durian Original">
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">Surabi Durian Original</h4>
                        <p class="card-text">Kehangatan surabi berpadu dengan lumeran saus durian murni yang legit.
                            Klasik dan tak tertandingi.</p>
                        <a href="{{ route('menu') }}" class="btn btn-outline-warning btn-sm">Lihat Detail & Pesan</a>
                    </div>
                </div>
            </div>

            {{-- Card 2: Surabi Durian Keju --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/surabi-keju.jpg') }}" class="card-img-top" alt="Surabi Durian Keju">
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">Surabi Durian Keju</h4>
                        <p class="card-text">Kombinasi sempurna rasa manis durian dengan gurihnya parutan keju premium
                            yang melimpah.</p>
                        <a href="{{ route('menu') }}" class="btn btn-outline-warning btn-sm">Lihat Detail & Pesan</a>
                    </div>
                </div>
            </div>

            {{-- Card 3: Surabi Durian Cokelat --}}
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/surabi-cokelat.jpg') }}" class="card-img-top"
                        alt="Surabi Durian Cokelat">
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning">Surabi Durian Cokelat</h4>
                        <p class="card-text">Pilihan bagi pecinta cokelat! Saus durian dengan *topping* cokelat premium
                            yang manis dan lumer.</p>
                        <a href="{{ route('menu') }}" class="btn btn-outline-warning btn-sm">Lihat Detail & Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('menu') }}" class="btn btn-dark btn-lg">Lihat Semua Varian Surabi Kami</a>
        </div>
    </div>
</section>

{{-- 4. Testimoni & Peta Singkat --}}
<section id="lokasi-testi" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            {{-- Testimoni --}}
            <div class="col-md-6 mb-4">
                <h3 class="mb-4">Apa Kata Pelanggan Kami?</h3>
                <blockquote class="blockquote bg-white p-3 border-start border-warning border-5 shadow-sm">
                    <p class="mb-0 fst-italic">"Keren banget rasa duriannya merasa banget sampe pesen lagi buat
                        keluarga"</p>
                    <footer class="blockquote-footer mt-2">Agung <cite title="Source Title"></cite>
                    </footer>
                </blockquote>
                <div class="mt-3">
                    <i class="fas fa-star text-warning"></i> 4.5/5.0 Bintang di Gofood
                </div>
                <blockquote class="blockquote bg-white p-3 border-start border-warning border-5 shadow-sm mt-3">
                    <p class="mb-0 fst-italic">"ah enakkk bgt rasa masakannya,, suka.. tp pedes, ak ga terlalu doyan
                        pedes 😁"</p>
                    <footer class="blockquote-footer mt-2">D****** <cite title="Source Title"></cite>
                    </footer>
                </blockquote>
                <div class="mt-3">
                    <i class="fas fa-star text-warning"></i> 5.0/5.0 Bintang di Gofood
                </div>
            </div>

            {{-- Lokasi Singkat --}}
            <div class="col-md-6 mb-4">
                <h3 class="mb-4">Kunjungi Gerai Kami</h3>
                <p><i class="fas fa-map-marker-alt text-danger me-2"></i> Jalan Raya Puncak, Jl. Raya Seseupan No.53,
                    Bendungan, Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720</p>
                <p><i class="fas fa-clock text-primary me-2"></i> Jam Buka: 14.00 - 00.00 WIB (Setiap Hari)</p>
                <div class="embed-responsive embed-responsive-4by3">
                    {{-- Ganti dengan embed map Anda --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.871051785481!2d106.8560947!3d-6.6628983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8fc88167621%3A0xc39bcb8ec0b1ebd1!2sKedai%20Surabi%20Durian!5e0!3m2!1sen!2sid!4v1764079170085!5m2!1sen!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <a href="https://maps.app.goo.gl/link-ke-peta-anda" class="btn btn-info mt-3 w-100"><i
                        class="fas fa-route"></i> CEK RUTE LENGKAP</a>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Asumsi Anda perlu menambahkan beberapa CSS di luar Blade untuk Hero Section yang lebih bagus --}}
{{-- Jangan lupa tambahkan Font Awesome (fas fa-...) di layout utama Anda untuk ikon! --}}