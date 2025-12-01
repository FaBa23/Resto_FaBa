@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Menu Baru</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $cat)
                <option value="{{ $cat }}" {{ old('kategori') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga (IDR)</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (Opsional)</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Simpan Menu</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection