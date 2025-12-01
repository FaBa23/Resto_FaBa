@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4 text-primary fw-bold">📸 Galeri Foto Produk Terbaik Kami</h1>
    <p class="text-center lead mb-5 text-muted">Lihat lebih dekat produk-produk andalan Surabi Durian.</p>

    @php
    // Daftar gambar untuk Galeri
    $galleryImages = [
    ['path' => '/images/gallery/surabi-durian-spesial.jpg', 'caption' => 'Surabi Durian Coklat Keju Special', 'category'
    => 'Surabi Durian'],
    ['path' => '/images/gallery/sop-duren-roti.jpg', 'caption' => 'Sop Duren Segar dengan Roti', 'category' => 'Sop
    Duren'],
    ['path' => '/images/gallery/sate-taichan-platting.jpg', 'caption' => 'Sate Taichan dengan Sambal Pedas', 'category'
    => 'Lauk Berat'],
    ['path' => '/images/gallery/indomie-telur-keju.jpg', 'caption' => 'Indomie Goreng dengan Telur dan Keju', 'category'
    => 'Lauk Berat'],
    ['path' => '/images/gallery/surabi-kinca.jpg', 'caption' => 'Surabi Kinca Gula Merah', 'category' =>
    'Surabi Manis/Gurih'],
    ['path' => '/images/gallery/pisbak-coklat-keju-grid.jpg', 'caption' => 'Pisang Bakar Coklat Keju yang Lumer',
    'category' => 'Camilan'],
    ['path' => '/images/gallery/latte-cream.jpg', 'caption' => 'Hot Latte Cream', 'category' =>
    'Minuman'],
    ['path' => '/images/gallery/kentang-keju.jpg', 'caption' => 'Kentang Keju', 'category' =>
    'Camilan'],
    ['path' => '/images/gallery/telur-mayo.jpg', 'caption' => 'Telur Mayo', 'category' => 'Cemilan'],
    ['path' => '/images/gallery/surabi_telur_keju_spc.jpg', 'caption' => 'Surabi Telur Keju Spesial Gurih', 'category'
    => 'Surabi Manis/Gurih'],
    ];
    @endphp

    {{-- GALERI FOTO DALAM BENTUK GRID (Responsive Grid Card) --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($galleryImages as $image)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 gallery-item" data-category="{{ $image['category'] }}">
                <img src="{{ asset($image['path']) }}" class="card-img-top" alt="{{ $image['caption'] }}"
                    style="height: 250px; object-fit: cover;">
                <div class="card-body p-3">
                    <h5 class="card-title mb-1 small">{{ $image['caption'] }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $image['category'] }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('menu') }}" class="btn btn-outline-secondary btn-lg fw-bold">
            <i class="fas fa-list me-2"></i> Kembali ke Daftar Menu
        </a>
    </div>
</div>

@endsection

{{-- CATATAN: Pastikan Anda telah menginstal Font Awesome (`fas fa-list`) jika Anda menggunakan ikon tersebut. --}}