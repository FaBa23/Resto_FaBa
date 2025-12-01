@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4 text-warning fw-bold">Daftar Menu Lengkap Surabi Durian 🥞</h1>
    <p class="text-center lead mb-5 text-muted">Nikmati kehangatan surabi tradisional dan variasi menu gurih kami yang
        tak terlupakan.</p>

    {{-- Navigasi Tab Kategori --}}
    <ul class="nav nav-pills nav-fill mb-4 p-2 bg-light rounded shadow-sm" id="menuTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-durian" data-bs-toggle="tab" data-bs-target="#content-durian"
                type="button" role="tab" aria-controls="content-durian" aria-selected="true">
                ✨ Surabi Durian (Spesial)
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-manis-gurih-btn" data-bs-toggle="tab" data-bs-target="#content-manis-gurih"
                type="button" role="tab" aria-controls="content-manis-gurih" aria-selected="false">
                🧀 Surabi Manis & Gurih
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-lauk-btn" data-bs-toggle="tab" data-bs-target="#content-lauk" type="button"
                role="tab" aria-controls="content-lauk" aria-selected="false">
                🍢 Lauk Berat & Camilan
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-minuman-btn" data-bs-toggle="tab" data-bs-target="#content-minuman"
                type="button" role="tab" aria-controls="content-minuman" aria-selected="false">
                🍹 Aneka Minuman
            </button>
        </li>
    </ul>

    {{-- Konten Tab --}}
    <div class="tab-content" id="menuTabContent">

        {{-- TAB 1: SURABI DURIAN (SPECIAL) --}}
        {{-- Penambahan ID Sesuai Footer: #surabi-duren --}}
        <div class="tab-pane fade show active" id="content-durian" role="tabpanel" aria-labelledby="tab-durian">
            <div id="surabi-duren">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Surabi Durian Lumer 👑</h4>
                        <p class="mb-0 small">Dibuat dari durian asli pilihan. Wajib coba!</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        @php
                        $surabiDurian = [
                        // ... data surabi durian ...
                        ['nama' => 'Duren Polos/Biasa', 'detail' => 'Durian Murni', 'harga' => '11.000', 'gambar' =>
                        'images/menu/url_gambar_duren_polos.jpg'],
                        ['nama' => 'Duren Keju', 'detail' => 'Durian + Keju', 'harga' => '13.000', 'gambar' =>
                        'url_gambar_duren_keju.jpg'],
                        ['nama' => 'Duren Coklat', 'detail' => '+Coklat Didalamnya', 'harga' => '13.000', 'gambar' =>
                        'url_gambar_duren_coklat.jpg'],
                        ['nama' => 'Duren Strowberry', 'detail' => 'Strowbeerry Didalam Toping Durian', 'harga' =>
                        '13.000', 'gambar' => 'url_gambar_duren_strawberry.jpg'],
                        ['nama' => 'Duren Pisang', 'detail' => 'Pisang Di Dalam Toping Durian', 'harga' => '13.000',
                        'gambar' => 'url_gambar_duren_pisang.jpg'],
                        ['nama' => 'Duren Coklat Keju', 'detail' => '+ Coklat', 'harga' => '15.000', 'gambar' =>
                        'url_gambar_duren_ck_keju.jpg'],
                        ['nama' => 'Duren Strowberry Keju', 'detail' => '+ Strowberry Dan Keju', 'harga' => '15.000',
                        'gambar' => 'url_gambar_duren_stb_keju.jpg'],
                        ['nama' => 'Duren Pisang Keju', 'detail' => '+Pisang Dan Keju', 'harga' => '15.000', 'gambar' =>
                        'url_gambar_duren_pis_keju.jpg'],
                        ['nama' => 'Duren Nangka', 'detail' => '+ Nangka', 'harga' => '13.000', 'gambar' =>
                        'url_gambar_duren_nangka.jpg'],
                        ['nama' => 'Duren Nangka + Keju', 'detail' => '+ Nangka Keju', 'harga' => '15.000', 'gambar' =>
                        'url_gambar_duren_nangka_keju.jpg'],
                        ];
                        @endphp
                        @foreach ($surabiDurian as $menu)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                    class="img-fluid rounded-circle shadow-sm"
                                    style="width: 60px; height: 60px; object-fit: cover;">
                            </div>
                            <div>
                                <strong>{{ $menu['nama'] }}</strong>
                                <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                            </div>
                            <span class="badge bg-success fs-6">Rp {{ $menu['harga'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-4">
                <h4 class="text-warning">Sop Duren Segar</h4>
                <div class="row">
                    @php
                    $sopDuren = [
                    // ... data sop duren ...
                    ['nama' => 'Sop Duren Keju', 'detail' => 'Parutan Keju', 'harga' => '16.000', 'gambar' =>
                    'url_gambar_sop_duren_keju.jpg'],
                    ['nama' => 'Sop Duren Roti', 'detail' => 'Roti Saja', 'harga' => '16.000', 'gambar' =>
                    'url_gambar_sop_duren_roti.jpg'],
                    ['nama' => 'Sop Duren Roti Keju', 'detail' => 'Roti + Keju', 'harga' => '18.000', 'gambar' =>
                    'url_gambar_sop_duren_roti_keju.jpg'],
                    ];
                    @endphp
                    @foreach ($sopDuren as $sop)
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($sop['gambar']) }}" alt="{{ $sop['nama'] }}"
                                    class="img-fluid rounded me-3"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <strong>{{ $sop['nama'] }}</strong> <br>
                                    <span class="small text-muted">{{ $sop['detail'] }}</span>
                                    <span class="float-end fw-bold text-success">Rp {{ $sop['harga'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- TAB 2: SURABI MANIS & GURIH --}}
        {{-- Penambahan ID Sesuai Footer: #roti-bakar (di dalam Surabi Manis) --}}
        <div class="tab-pane fade" id="content-manis-gurih" role="tabpanel" aria-labelledby="tab-manis-gurih-btn">
            <div class="row">
                {{-- Surabi Manis (Digunakan untuk link #roti-bakar dari footer) --}}
                <div class="col-md-6 mb-4" id="roti-bakar">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-info text-white">Surabi Manis Klasik</div>
                        <ul class="list-group list-group-flush">
                            @php
                            $surabiManis = [
                            // ... data surabi manis ...
                            ['nama' => 'Surabi Kinca Gula Merah', 'detail' => '', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_surabi_kinca.jpg'],
                            ['nama' => 'Surabi Keju Susu', 'detail' => '+Keju Susu', 'harga' => '11.000', 'gambar' =>
                            'url_gambar_surabi_keju_susu.jpg'],
                            ['nama' => 'Surabi Keju Vanilla', 'detail' => 'Keju Dan Vanila', 'harga' => '13.000',
                            'gambar' => 'url_gambar_surabi_keju_vanilla.jpg'],
                            ['nama' => 'Surabi Coklat Susu', 'detail' => '+ Coklat Susu', 'harga' => '8.000', 'gambar'
                            => 'url_gambar_surabi_coklat_susu.jpg'],
                            ['nama' => 'Surabi Coklat Vanilla', 'detail' => '+ Coklat Vanilla', 'harga' => '11.000',
                            'gambar' => 'url_gambar_surabi_coklat_vanilla.jpg'],
                            ['nama' => 'Surabi Coklat Keju', 'detail' => '+ Coklat Keju', 'harga' => '11.000', 'gambar'
                            => 'url_gambar_surabi_coklat_keju.jpg'],
                            ['nama' => 'Coklat Keju Special', 'detail' => '+ Coklat, Vanilla Dan Keju', 'harga' =>
                            '13.000', 'gambar' => 'url_gambar_surabi_ck_keju_spc.jpg'],
                            ];
                            @endphp
                            @foreach ($surabiManis as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div>
                                    <strong>{{ $menu['nama'] }}</strong>
                                    <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                                </div>
                                <span class="fw-bold text-info">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Surabi Gurih (Telur, Ayam, Sosis) --}}
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-dark text-white">Surabi Gurih Pilihan</div>
                        <ul class="list-group list-group-flush">
                            @php
                            $surabiGurih = [
                            // ... data surabi gurih ...
                            ['nama' => 'Telur Biasa', 'detail' => 'Surabi Telur Dan Saus', 'harga' => '9.000', 'gambar'
                            => 'url_gambar_surabi_telur_biasa.jpg'],
                            ['nama' => 'Telur Mayo', 'detail' => 'Telur + Toping Mayonaise', 'harga' => '11.000',
                            'gambar' => 'url_gambar_surabi_telur_mayo.jpg'],
                            ['nama' => 'Telur Keju Spesial', 'detail' => 'Telur + Keju Mayonaise', 'harga' => '13.000',
                            'gambar' => 'url_gambar_surabi_telur_keju_spc.jpg'],
                            ['nama' => 'Telur Sosis Spesial', 'detail' => 'Telur + Sosis Toping Mayonaise', 'harga' =>
                            '13.000', 'gambar' => 'url_gambar_surabi_telur_sosis_spc.jpg'],
                            ['nama' => 'Telur Sosis Keju Spc.', 'detail' => 'Telur Pakai Sosis Dan Mayonaise', 'harga'
                            => '15.000', 'gambar' => 'url_gambar_surabi_telur_sosis_keju_spc.jpg'],
                            ['nama' => 'Ayam Biasa', 'detail' => '', 'harga' => '9.000', 'gambar' =>
                            'url_gambar_surabi_ayam_biasa.jpg'],
                            ['nama' => 'Ayam Mayo', 'detail' => '', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_surabi_ayam_mayo.jpg'],
                            ['nama' => 'Ayam Sosis Spesial', 'detail' => '', 'harga' => '11.000', 'gambar' =>
                            'url_gambar_surabi_ayam_sosis_spc.jpg'],
                            ['nama' => 'Ayam Keju Spesial', 'detail' => '', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_surabi_ayam_keju_spc.jpg'],
                            ['nama' => 'Sosis Biasa', 'detail' => '', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_surabi_sosis_biasa.jpg'],
                            ['nama' => 'Sosis Mayo', 'detail' => '', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_surabi_sosis_mayo.jpg'],
                            ['nama' => 'Sosis Keju Spesial', 'detail' => '', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_surabi_sosis_keju_spc.jpg'],
                            ['nama' => 'Sosis Telur Keju Spc.', 'detail' => '', 'harga' => '15.000', 'gambar' =>
                            'url_gambar_surabi_sosis_telur_keju_spc.jpg'],
                            ];
                            @endphp
                            @foreach ($surabiGurih as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div>
                                    <strong>{{ $menu['nama'] }}</strong>
                                    <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                                </div>
                                <span class="fw-bold text-dark">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB 3: LAUK BERAT & CAMILAN --}}
        {{-- Penambahan ID Sesuai Footer: #sate-taichan, #indomie, #pisang-bakar, #spesial-gorengan --}}
        <div class="tab-pane fade" id="content-lauk" role="tabpanel" aria-labelledby="tab-lauk-btn">
            <div class="row">

                {{-- Sate Taichan --}}
                <div class="col-md-6 mb-4" id="sate-taichan">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-danger text-white">Sate Taichan 🔥 (10 Tusuk)</div>
                        <ul class="list-group list-group-flush">
                            @php
                            $taichan = [
                            // ... data sate taichan ...
                            ['nama' => 'Sate Taichan Bakar Kulit', 'harga' => '23.000', 'gambar' =>
                            'url_gambar_taichan_kulit.jpg'],
                            ['nama' => 'Sate Taichan Bakar Dada', 'harga' => '24.000', 'gambar' =>
                            'url_gambar_taichan_dada.jpg'],
                            ['nama' => 'Sate Taichan Bakar Paha', 'harga' => '24.000', 'gambar' =>
                            'url_gambar_taichan_paha.jpg'],
                            ['nama' => 'Sate Taichan Goreng Dada', 'harga' => '24.000', 'gambar' =>
                            'url_gambar_taichan_goreng_dada.jpg'],
                            ['nama' => 'Sate Taichan Goreng Kulit', 'harga' => '24.000', 'gambar' =>
                            'url_gambar_taichan_goreng_kulit.jpg'],
                            ['nama' => 'Sate Taichan Goreng Paha', 'harga' => '24.000', 'gambar' =>
                            'url_gambar_taichan_goreng_paha.jpg'],
                            ];
                            @endphp
                            @foreach ($taichan as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <strong>{{ $menu['nama'] }}</strong>
                                <span class="badge bg-danger fs-6">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                            <li class="list-group-item small text-muted text-center">
                                Semua disajikan dengan Sambal dan Jeruk Nipis.
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Indomie --}}
                <div class="col-md-6 mb-4" id="indomie">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">Indomie Spesial 🍜</div>
                        <ul class="list-group list-group-flush">
                            @php
                            $indomie = [
                            // ... data indomie ...
                            ['nama' => 'Goreng/Rebus Biasa', 'detail' => 'Tanpa Telur', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_indomie_biasa.jpg'],
                            ['nama' => 'Goreng/Rebus Telur', 'detail' => '+Telur', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_indomie_telur.jpg'],
                            ['nama' => 'Goreng/Rebus Kornet', 'detail' => '+Kornet', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_indomie_kornet.jpg'],
                            ['nama' => 'Goreng/Rebus Keju', 'detail' => '+Keju', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_indomie_keju.jpg'],
                            ['nama' => 'Goreng/Rebus Telur Kornet', 'detail' => '+Telur dan Kornet', 'harga' =>
                            '18.000', 'gambar' => 'url_gambar_indomie_telur_kornet.jpg'],
                            ['nama' => 'Goreng/Rebus Telur Keju', 'detail' => '+Telur dan Keju', 'harga' => '18.000',
                            'gambar' => 'url_gambar_indomie_telur_keju.jpg'],
                            ];
                            @endphp
                            @foreach ($indomie as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div>
                                    <strong>Indomie {{ $menu['nama'] }}</strong>
                                    <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                                </div>
                                <span class="fw-bold text-primary">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Pisang, Roti, Sosis/Kentang --}}
                <div class="col-md-6 mb-4" id="pisang-bakar">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-secondary text-white">Pisang & Roti Bakar 🍞</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light fw-bold">Pisang Bakar</li>
                            @php
                            $pisbak = [
                            // ... data pisang bakar ...
                            ['nama' => 'Pisbak Coklat', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_pisbak_coklat.jpg'],
                            ['nama' => 'Pisbak Coklat Spesial', 'harga' => '11.000', 'gambar' =>
                            'url_gambar_pisbak_coklat_spc.jpg'],
                            ['nama' => 'Pisbak Keju', 'harga' => '13.000', 'gambar' => 'url_gambar_pisbak_keju.jpg'],
                            ['nama' => 'Pisbak Coklat Keju', 'harga' => '15.000', 'gambar' =>
                            'url_gambar_pisbak_coklat_keju.jpg'],
                            ['nama' => 'Pisbak Coklat Keju Spesial', 'harga' => '15.000', 'gambar' =>
                            'url_gambar_pisbak_ck_keju_spc.jpg'],
                            ];
                            @endphp
                            @foreach ($pisbak as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $menu['nama'] }} <span class="fw-bold text-secondary">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                            <li class="list-group-item bg-light fw-bold">Roti Bakar Manis</li>
                            @php
                            $rotbak = [
                            // ... data roti bakar ...
                            ['nama' => 'Roti Bakar Coklat', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_rotbak_coklat.jpg'],
                            ['nama' => 'Roti Bakar Keju', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_rotbak_keju.jpg'],
                            ['nama' => 'Roti Bakar Coklat Keju', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_rotbak_coklat_keju.jpg'],
                            ['nama' => 'Roti Bakar Pisang Keju', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_rotbak_pisang_keju.jpg'],
                            ['nama' => 'Roti Bakar Pisang Coklat Keju', 'harga' => '16.000', 'gambar' =>
                            'url_gambar_rotbak_pisang_ck_keju.jpg'],
                            ];
                            @endphp
                            @foreach ($rotbak as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $menu['nama'] }} <span class="fw-bold text-secondary">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Sosis dan Kentang --}}
                <div class="col-md-6 mb-4" id="spesial-gorengan">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-success text-white">Menu Spesial Sosis & Kentang 🍟</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light fw-bold">Sosis</li>
                            @php
                            $sosisKentang = [
                            // ... data sosis ...
                            ['nama' => 'Sosis Biasa', 'detail' => 'Sosis + Saus', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_sosis_biasa.jpg'],
                            ['nama' => 'Sosis Mayo', 'detail' => 'Sosis + Mayonaise', 'harga' => '15.000', 'gambar' =>
                            'url_gambar_sosis_mayo.jpg'],
                            ['nama' => 'Sosis Keju Spc', 'detail' => 'Irisan Keju Mayonaise', 'harga' => '18.000',
                            'gambar' => 'url_gambar_sosis_keju_spc.jpg'],
                            ];
                            @endphp
                            @foreach ($sosisKentang as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div>
                                    <strong>{{ $menu['nama'] }}</strong>
                                    <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                                </div>
                                <span class="fw-bold text-success">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                            <li class="list-group-item bg-light fw-bold">Kentang Goreng</li>
                            @php
                            $kentang = [
                            // ... data kentang ...
                            ['nama' => 'Kentang Biasa', 'detail' => 'Kentang Dan Saus', 'harga' => '13.000', 'gambar' =>
                            'url_gambar_kentang_biasa.jpg'],
                            ['nama' => 'Kentang Mayo', 'detail' => 'Kentang Mayonaise', 'harga' => '15.000', 'gambar' =>
                            'url_gambar_kentang_mayo.jpg'],
                            ['nama' => 'Kentang Keju Spc', 'detail' => 'Keju + Mayonaise', 'harga' => '18.000', 'gambar'
                            => 'url_gambar_kentang_keju_spc.jpg'],
                            ];
                            @endphp
                            @foreach ($kentang as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                <div>
                                    <strong>{{ $menu['nama'] }}</strong>
                                    <span class="text-muted small d-block">{{ $menu['detail'] }}</span>
                                </div>
                                <span class="fw-bold text-success">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB 4: ANEKA MINUMAN --}}
        {{-- Penambahan ID Sesuai Footer: #minuman (di dalam Minuman Panas/Dingin) --}}
        <div class="tab-pane fade" id="content-minuman" role="tabpanel" aria-labelledby="tab-minuman-btn">
            <div class="row">
                {{-- Kopi, Teh, Coklat --}}
                <div class="col-md-6 mb-4" id="minuman">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white">Kopi, Teh, dan Minuman Hangat ☕</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-light fw-bold text-primary">Minuman Panas</li>
                            @php
                            $minumanPanas = [
                            // ... data minuman panas ...
                            ['nama' => 'Coffe Mix', 'harga' => '8.000', 'gambar' => 'url_gambar_coffe_mix.jpg'],
                            ['nama' => 'Teh Tarik', 'harga' => '9.000', 'gambar' => 'url_gambar_teh_tarik_hot.jpg'],
                            ['nama' => 'Bandrek Susu', 'harga' => '9.000', 'gambar' => 'url_gambar_bandrek_susu.jpg'],
                            ['nama' => 'Coklat Panas', 'harga' => '9.000', 'gambar' => 'url_gambar_coklat_panas.jpg'],
                            ['nama' => 'Kopi Item', 'harga' => '8.000', 'gambar' => 'url_gambar_kopi_item.jpg'],
                            ['nama' => 'Latte Cream Hot', 'harga' => '10.000', 'gambar' =>
                            'url_gambar_latte_cream_hot.jpg'],
                            ['nama' => 'Teh Manis', 'harga' => '8.000', 'gambar' => 'url_gambar_teh_manis_hot.jpg'],
                            ];
                            @endphp
                            @foreach ($minumanPanas as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $menu['nama'] }} <span class="fw-bold text-primary">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                            <li class="list-group-item bg-light fw-bold text-primary">Minuman Dingin</li>
                            @php
                            $minumanDingin = [
                            // ... data minuman dingin ...
                            ['nama' => 'Es Teh Tarik', 'harga' => '11.000', 'gambar' => 'url_gambar_es_teh_tarik.jpg'],
                            ['nama' => 'Es Teh Manis', 'harga' => '8.000', 'gambar' => 'url_gambar_es_teh_manis.jpg'],
                            ['nama' => 'Es Jeruk', 'harga' => '10.000', 'gambar' => 'url_gambar_es_jeruk.jpg'],
                            ['nama' => 'Es Cappucino', 'harga' => '11.000', 'gambar' => 'url_gambar_es_cappucino.jpg'],
                            ['nama' => 'Es Milo/Ovaltine', 'harga' => '11.000', 'gambar' => 'url_gambar_es_milo.jpg'],
                            ];
                            @endphp
                            @foreach ($minumanDingin as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $menu['nama'] }} <span class="fw-bold text-primary">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Juice --}}
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-success text-white">Aneka Juice Segar 🥝 (Semua Rp 13.000)</div>
                        <ul class="list-group list-group-flush">
                            @php
                            $juice = [
                            // ... data juice ...
                            'Juice Orange' => 'url_gambar_juice_orange.jpg',
                            'Juice Melon' => 'url_gambar_juice_melon.jpg',
                            'Juice Jambu' => 'url_gambar_juice_jambu.jpg',
                            'Juice Strowberry' => 'url_gambar_juice_strawberry.jpg',
                            'Juice Mangga' => 'url_gambar_juice_mangga.jpg',
                            'Juice Alpukat' => 'url_gambar_juice_alpukat.jpg',
                            'Juice Naga Merah' => 'url_gambar_juice_naga_merah.jpg'
                            ];
                            @endphp
                            @foreach ($juice as $nama => $gambar)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($gambar) }}" alt="{{ $nama }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $nama }} <span class="fw-bold text-success">Rp 13.000</span>
                            </li>
                            @endforeach
                            <li class="list-group-item bg-light fw-bold text-success">Minuman Instan & Lainnya</li>
                            @php
                            $minumanLain = [
                            // ... data minuman lain ...
                            ['nama' => 'Lemon Tea (Hot)', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_lemon_tea_hot.jpg'],
                            ['nama' => 'Nutrisari (Hot)', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_nutrisari_hot.jpg'],
                            ['nama' => 'Teh Botol / Fruite Tea / Tebs', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_minuman_botol.jpg'],
                            ['nama' => 'Air Mineral 600ml', 'harga' => '8.000', 'gambar' =>
                            'url_gambar_air_mineral.jpg'],
                            ];
                            @endphp
                            @foreach ($minumanLain as $menu)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset($menu['gambar']) }}" alt="{{ $menu['nama'] }}"
                                        class="img-fluid rounded-circle shadow-sm"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </div>
                                {{ $menu['nama'] }} <span class="fw-bold text-success">Rp {{ $menu['harga'] }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Tombol Pesan Langsung --}}
    <div class="text-center mt-5">
        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20mau%20pesan%20menu%20surabi%20durian%20yang%20ada%20di%20website."
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
    /* Warna cokelat yang cocok dengan tema Anda */
    color: #ffffff;
    border: 1px solid #7f5a20;
}

#menuTab .nav-link:hover:not(.active) {
    color: #7f5a20;
}
</style>
@endpush

{{-- Tambahkan Skrip untuk Mengaktifkan Tab Berdasarkan URL Hash --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ambil hash dari URL (misal: #surabi-duren)
    const hash = window.location.hash;

    if (hash) {
        // Mapping ID footer ke ID Tab Pane
        let targetTabId = null;

        // Logika Mapping: Tentukan Tab Pane mana yang harus aktif berdasarkan hash
        if (hash === '#surabi-duren') {
            targetTabId = '#content-durian';
        } else if (hash === '#roti-bakar') {
            targetTabId = '#content-manis-gurih';
        } else if (hash === '#sate-taichan' || hash === '#indomie' || hash === '#pisang-bakar' || hash ===
            '#spesial-gorengan') {
            targetTabId = '#content-lauk';
        } else if (hash === '#minuman') {
            targetTabId = '#content-minuman';
        }

        if (targetTabId) {
            // 1. Temukan elemen tombol tab yang sesuai
            const tabButton = document.querySelector(`[data-bs-target="${targetTabId}"]`);

            if (tabButton) {
                // 2. Gunakan metode Bootstrap untuk mengaktifkan tab
                const bsTab = new bootstrap.Tab(tabButton);
                bsTab.show();

                // 3. Gulir ke bagian menu yang spesifik (setelah tab aktif)
                // Cari elemen dengan ID yang sama dengan hash (misal #surabi-duren)
                const targetElement = document.querySelector(hash);
                if (targetElement) {
                    setTimeout(() => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100); // Penundaan kecil agar tab sempat berganti
                }
            }
        }
    }
});
</script>
@endpush

@endsection