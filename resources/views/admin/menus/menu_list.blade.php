@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4 text-warning fw-bold">Daftar Menu Lengkap Restoran Anda 🥞</h1>
    <p class="text-center lead mb-5 text-muted">Nikmati kehangatan surabi tradisional dan variasi menu gurih kami yang
        tak terlupakan.</p>

    {{-- Navigasi Tab Kategori --}}
    <ul class="nav nav-pills nav-fill mb-4 p-2 bg-light rounded shadow-sm" id="menuTab" role="tablist">
        {{-- Tab 1 --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-durian" data-bs-toggle="tab" data-bs-target="#content-durian"
                type="button" role="tab" aria-controls="content-durian" aria-selected="true">
                ✨ Surabi Durian
            </button>
        </li>
        {{-- Tab 2 --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-manis-gurih" data-bs-toggle="tab" data-bs-target="#content-manis-gurih"
                type="button" role="tab" aria-controls="content-manis-gurih" aria-selected="false">
                🧀 Surabi Manis & Gurih
            </button>
        </li>
        {{-- Tab 3 --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-lauk-berat" data-bs-toggle="tab" data-bs-target="#content-lauk-berat"
                type="button" role="tab" aria-controls="content-lauk-berat" aria-selected="false">
                🍚 Lauk & Makanan Berat
            </button>
        </li>
        {{-- Tab 4 --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-minuman" data-bs-toggle="tab" data-bs-target="#content-minuman"
                type="button" role="tab" aria-controls="content-minuman" aria-selected="false">
                🍹 Minuman Segar
            </button>
        </li>
    </ul>

    {{-- Isi Konten Tab --}}
    <div class="tab-content" id="menuTabContent">

        {{-- TAB 1: SURABI DURIAN --}}
        <div class="tab-pane fade show active" id="content-durian" role="tabpanel" aria-labelledby="tab-durian">
            @include('partials.menu_list', ['title' => 'Surabi Durian Lumer 👑', 'menus' => $surabiDurian])
        </div>

        {{-- TAB 2: SURABI MANIS & GURIH --}}
        <div class="tab-pane fade" id="content-manis-gurih" role="tabpanel" aria-labelledby="tab-manis-gurih">
            @include('partials.menu_list', ['title' => 'Surabi Manis', 'menus' => $surabiManis])
            @include('partials.menu_list', ['title' => 'Surabi Gurih', 'menus' => $surabiGurih])
            @include('partials.menu_list', ['title' => 'Pisang Bakar', 'menus' => $pisbak])
            @include('partials.menu_list', ['title' => 'Roti Bakar Manis', 'menus' => $rotbak])
        </div>

        {{-- TAB 3: LAUK & MAKANAN BERAT --}}
        <div class="tab-pane fade" id="content-lauk-berat" role="tabpanel" aria-labelledby="tab-lauk-berat">
            @include('partials.menu_list', ['title' => 'Sate Taichan', 'menus' => $taichan])
            @include('partials.menu_list', ['title' => 'Indomie Kreasi', 'menus' => $indomie])
            @include('partials.menu_list', ['title' => 'Sosis & Kentang', 'menus' => $sosisKentang])
            {{-- Tambahkan loop untuk kategori Lauk lainnya jika ada --}}
        </div>

        {{-- TAB 4: MINUMAN SEGAR --}}
        <div class="tab-pane fade" id="content-minuman" role="tabpanel" aria-labelledby="tab-minuman">
            @include('partials.menu_list', ['title' => 'Minuman Dingin', 'menus' => $minumanDingin])
            @include('partials.menu_list', ['title' => 'Minuman Panas', 'menus' => $minumanPanas])
            @include('partials.menu_list', ['title' => 'Juice Buah', 'menus' => $juice])
        </div>

    </div>

    {{-- Tombol Pesan Langsung --}}
    <div class="text-center mt-5">
        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20pesan%20menu%20yang%20ada%20di%20website."
            target="_blank" class="btn btn-warning btn-lg shadow-lg">
            🚀 PESAN VIA WHATSAPP SEKARANG
        </a>
    </div>

</div>

{{-- Tambahkan Style untuk Navigasi Tab --}}
@push('styles')
<style>
    /* Styling tombol nav yang aktif */
    #menuTab .nav-link.active {
        background-color: #7f5a20;
        color: white;
    }

    #menuTab .nav-link {
        color: #7f5a20;
    }
</style>
@endpush

@endsection