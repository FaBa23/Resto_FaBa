@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Menu: {{ $menu->nama }}</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('admin.menus.update', $menu) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $menu->nama) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $cat)
                <option value="{{ $cat }}" {{ old('kategori', $menu->kategori) == $cat ? 'selected' : '' }}>{{ $cat }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga (IDR)</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $menu->harga) }}"
                required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi"
                name="deskripsi">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Saat Ini</label>
            @if ($menu->gambar)
            <div class="mb-2">
                <img src="{{ asset($menu->gambar) }}" alt="Gambar Menu"
                    style="width: 100px; height: 100px; object-fit: cover;">
            </div>
            @else
            <p>Tidak ada gambar saat ini.</p>
            @endif
            <label for="gambar" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Perbarui Menu</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection