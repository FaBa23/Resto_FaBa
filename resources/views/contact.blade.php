@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4 text-success fw-bold">Hubungi Kami & Kunjungi Outlet Kami 🗺️</h1>
    <p class="text-center lead mb-5 text-muted">Kami siap melayani pesanan Anda dan menunggu kedatangan Anda di lokasi
        Surabi Durian.</p>

    <div class="row">

        {{-- Kolom Kiri: Informasi Kontak --}}
        <div class="col-md-5 mb-4">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Detail Kontak</h4>
                </div>
                <div class="card-body">

                    <h5 class="text-primary mt-0 mb-3">Jam Operasional ⏰</h5>
                    <ul class="list-unstyled mb-4">
                        <li>Senin - Kamis: **15.00 - 22.00** WIB</li>
                        <li>Jumat - Sabtu: **15.00 - 23.00** WIB</li>
                        <li>Minggu: **15.00 - 22.00** WIB</li>
                    </ul>

                    <h5 class="text-primary mt-4 mb-3">Informasi Lainnya ℹ️</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt me-2 text-success"></i>
                            **Alamat Utama:** Jl. Raya Durian No. 123, Kota Nikmat, Jawa Barat
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone me-2 text-success"></i>
                            **Telepon:** (021) 876-5432
                        </li>
                        <li class="mb-2">
                            <i class="fab fa-whatsapp me-2 text-success"></i>
                            **WhatsApp (Pesan):** <a href="https://wa.me/6281234567890" target="_blank"
                                class="text-decoration-none fw-bold text-success">0812-3456-7890</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2 text-success"></i>
                            **Email:** surabidurian@lezat.com
                        </li>
                    </ul>

                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success mt-3 w-100 fw-bold">
                        <i class="fab fa-whatsapp me-2"></i> Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>

        {{-- Kolom Kanan: Peta Google Maps (Embed) --}}
        <div class="col-md-7 mb-4">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Lokasi Kami</h4>
                </div>
                <div class="card-body p-0">
                    {{-- GANTI DENGAN KODE EMBED GOOGLE MAPS LOKASI ANDA --}}
                    <div style="width: 100%; height: 500px;">
                        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.871051785481!2d106.8560947!3d-6.6628983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8fc88167621%3A0xc39bcb8ec0b1ebd1!2sKedai%20Surabi%20Durian!5e0!3m2!1sen!2sid!4v1764079170085!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            style="border-radius: 0 0 0.5rem 0.5rem;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection