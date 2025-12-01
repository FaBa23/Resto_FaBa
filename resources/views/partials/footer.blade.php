<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

{{-- START: CSS KUSTOM UNTUK ANIMASI FOOTER --}}
<style>
/* Transisi untuk efek smooth pada semua link footer */
.footer-link a,
.social-icons a,
.product-links a {
    transition: color 0.3s ease, transform 0.3s ease;
}

/* 1. Animasi Hover Link Navigasi & Produk */
.list-unstyled a:hover {
    color: #ffc107 !important;
    /* Kuning Keemasan/Emas */
    transform: translateX(5px);
    /* Geser sedikit ke kanan */
}

/* 2. Animasi Hover Ikon Media Sosial (Zoom & Warna) */
.social-icons a:hover {
    color: #ffc107 !important;
    /* KONSISTEN: Kuning Keemasan/Emas */
    transform: scale(1.2);
}

/* Memperbaiki tampilan link produk */
.product-links a {
    text-decoration: none;
    /* Hilangkan garis bawah */
    color: white;
    /* Pastikan warna tetap putih */
}
</style>
{{-- END: CSS KUSTOM UNTUK ANIMASI FOOTER --}}

<footer style="background-color: #7f5a20;" class="text-white mt-5 py-5">
    <div class="container">

        <div class="row">

            <div class="col-md-3 mb-4">
                <img src="{{ asset('images/logo-surabi.png') }}" alt="Surabi Durian Logo" class="mb-2" width="150">
                <p class="mb-0">©2024 surabiduren.id. ALL RIGHTS RESERVED.</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Products</h5>
                <ul class="list-unstyled product-links">
                    {{-- DIUBAH: Setiap item sekarang adalah link ke kategori di halaman Menu --}}
                    <li class="mb-2"><a href="{{ route('menu') }}#top-picks" class="text-white">Resto's Top Picks</a>
                    </li>
                    <li class="mb-2"><a href="{{ route('menu') }}#surabi-duren" class="text-white">Surabi Duren</a></li>
                    <li class="mb-2"><a href="{{ route('menu') }}#pisang-bakar" class="text-white">Pisang Bakar</a></li>
                    <li class="mb-2"><a href="{{ route('menu') }}#roti-bakar" class="text-white">Roti Bakar Manis</a>
                    </li>
                    <li class="mb-2"><a href="{{ route('menu') }}#minuman" class="text-white">Aneka Minuman</a></li>
                    <li class="mb-2"><a href="{{ route('menu') }}#sate-taichan" class="text-white">Sate Taichan</a></li>
                    <li class="mb-2"><a href="{{ route('menu') }}#indomie" class="text-white">Indomie</a></li>
                    <li class="mb-2"><a href="{{ route('menu') }}#spesial-gorengan" class="text-white">Menu Spesial
                            Sosis /Kentang Goreng</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Informations</h5>
                <ul class="list-unstyled footer-link">
                    {{-- Link Navigasi --}}
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a>
                    </li>
                    <li class="mb-2"><a href="{{ route('menu') }}" class="text-white text-decoration-none">Menu</a></li>
                    <li class="mb-2"><a href="{{ route('gallery') }}"
                            class="text-white text-decoration-none">Gallery</a></li>
                </ul>

            </div>

            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Contact Us</h5>
                <p>customercare@pointcoffee.id</p>

                <div class="d-flex gap-3 fs-4 social-icons">
                    <a href="https://wa.me/628xxxxxxxxxx" target="_blank" class="text-white"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="https://instagram.com/username" target="_blank" class="text-white"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://facebook.com/username" target="_blank" class="text-white"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://tiktok.com/@username" target="_blank" class="text-white"><i
                            class="bi bi-tiktok"></i></a>
                    <a href="https://youtube.com/@username" target="_blank" class="text-white"><i
                            class="bi bi-youtube"></i></a>
                </div>

            </div>

        </div>

    </div>
</footer>