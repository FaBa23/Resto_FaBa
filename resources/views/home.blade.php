@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4">Selamat Datang di FaBa Ramen</h1>
            <p class="lead">Nikmati hidangan lezat dan pelayanan terbaik di restoran kami.</p>
            <p class="lead">🎐🍜🍛🥢🍣</p>
            <a href="{{ route('orders.create') }}" class="btn btn-primary btn-lg">Buat Pesanan</a>
            <a href="{{ route('menus.index') }}" class="btn btn-secondary btn-lg">Lihat Menu</a>
        </div>
    </div>

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Makanan 🍜</h5>
                    <p class="card-text">Berbagai pilihan makanan lezat dari berbagai kategori.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Minuman 🥂</h5>
                    <p class="card-text">Berbagai pilihan koleksi minuman segar dan menyegarkan.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection