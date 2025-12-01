@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4 text-warning fw-bold">Tentang Kami: Kehangatan Tradisional & Inovasi Durian 🌟</h1>
    <p class="text-center lead mb-5 text-muted">Lebih dari sekadar surabi, kami menyajikan pengalaman kuliner yang
        otentik dan memuaskan.</p>

    <div class="row g-4">

        <hr>

        {{-- Kolom Kiri ATAS: Kisah Kami (Our Story) & Awal Mula --}}
        <div class="col-md-12">
            <div class="card shadow-lg border-0 p-4 mb-4 bg-light">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('/images/surabi.png') }}" alt="Logo Surabi Durian Lezat"
                            class="img-fluid shadow-sm mb-3"
                            style="width: 300px; height: 300px; object-fit: cover; border-radius: 0;">
                    </div>
                    <div class="col-md-9">
                        <h3 class="text-warning">Filosofi Rasa Kami</h3>
                        <p class="mb-2">
                            **Surabi Durian Lezat** didirikan pada tahun 2018 dengan satu misi sederhana: melestarikan
                            surabi tradisional sambil berinovasi dengan rasa. Kami berkomitmen pada **kualitas
                            premium**; mulai dari adonan surabi yang dibuat *fresh* setiap hari, hingga penggunaan
                            **Durian Asli** pilihan yang lumer di mulut.
                        </p>

                        <hr class="text-warning">

                        <h4 class="text-dark">Awal Mula Kami (The Beginning)</h4>
                        <p class="small mb-0">
                            Semuanya dimulai dari kecintaan pendiri kami pada camilan Surabi yang sering ia santap saat
                            masa kecil. Ide *Surabi Durian* tercetus ketika beliau mencoba menggabungkan hangatnya
                            surabi dengan buah tropis favorit Indonesia, Durian. Setelah berbulan-bulan melakukan
                            eksperimen resep, Surabi Durian Lezat membuka *outlet* pertamanya di tahun **2018**,
                            menyajikan Surabi Durian pertama yang *viral* karena duriannya yang melimpah dan lumer.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom BAWAH: Nilai Inti & Kontak Langsung --}}
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Nilai Inti Kami 🎯</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-certificate text-primary me-2"></i>
                        **Kualitas Bahan Baku:** Hanya menggunakan durian dan *topping* terbaik.
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-hand-holding-heart text-primary me-2"></i>
                        **Pelayanan Ramah:** Kami melayani setiap pelanggan dengan senyum dan kehangatan.
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-lightbulb text-primary me-2"></i>
                        **Inovasi Menu:** Terus menciptakan varian rasa baru yang unik dan lezat.
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        **Kebersihan Terjamin:** Standar kebersihan dapur yang ketat demi kesehatan pelanggan.
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 border-0 bg-success-subtle">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Hubungi Kami Langsung 📞</h4>
                </div>
                <div class="card-body text-center">
                    <p class="card-text fw-bold text-dark fs-5">
                        Untuk pesanan besar atau informasi lokasi, hubungi tim kami.
                    </p>
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="btn btn-outline-success w-100 fw-bold my-3">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp (0812-3456-7890)
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-secondary w-100 fw-bold">
                        <i class="fas fa-map-marker-alt me-2"></i> Lihat Peta Lokasi Kami
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row g-4">
        {{-- BAGIAN DELIVERY ORDER DENGAN TAMPILAN MIRIP GAMBAR --}}
        <div class="col-md-12 text-center mb-5 mt-3">
            <h2 class="text-dark fw-bold mb-3">Yuk order delivery 🛵</h2>
            <p class="lead mb-4">Kamu bisa beli Surabi Durian Lezat melalui platform favoritmu:</p>

            <div class="row justify-content-center g-3">

                {{-- Kartu/Kotak GrabFood --}}
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" target="_blank" class="text-decoration-none d-block delivery-box-link">
                        <div class="card p-3 h-100 shadow-sm border-0 delivery-box">
                            <img src="{{ asset('images/delivery/grabfood-logo.png') }}" alt="GrabFood"
                                class="img-fluid mx-auto" style="max-height: 40px; width: auto;">
                        </div>
                    </a>
                </div>

                {{-- Kartu/Kotak GoFood --}}
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" target="_blank" class="text-decoration-none d-block delivery-box-link">
                        <div class="card p-3 h-100 shadow-sm border-0 delivery-box">
                            <img src="{{ asset('images/delivery/gofood-logo.png') }}" alt="GoFood"
                                class="img-fluid mx-auto" style="max-height: 40px; width: auto;">
                        </div>
                    </a>
                </div>

                {{-- Kartu/Kotak ShopeeFood --}}
                <div class="col-6 col-sm-3 col-md-2">
                    <a href="#" target="_blank" class="text-decoration-none d-block delivery-box-link">
                        <div class="card p-3 h-100 shadow-sm border-0 delivery-box">
                            <img src="{{ asset('images/delivery/shopeefood-logo.png') }}" alt="ShopeeFood"
                                class="img-fluid mx-auto" style="max-height: 40px; width: auto;">
                        </div>
                    </a>
                </div>

            </div>
            <p class="small text-muted mt-3">Jam Operasional Delivery: **15.00 - 21.00 WIB**</p>
        </div>
    </div>

</div>

@endsection

@push('styles')
<style>
/* CSS untuk kartu delivery agar ada efek hover */
.delivery-box-link {
    display: block;
    /* Penting agar seluruh kartu bisa di-klik */
}

.delivery-box {
    border: 1px solid #dee2e6;
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    cursor: pointer;
}

.delivery-box:hover {
    transform: translateY(-3px);
    /* Efek naik saat hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15) !important;
    border-color: #ffc107;
    /* Border kuning saat hover */
}
</style>
@endpush