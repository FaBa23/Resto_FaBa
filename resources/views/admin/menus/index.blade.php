@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manajemen Menu</h2>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mb-3">Tambah Menu Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <td>
                    @if ($menu->gambar)
                    <img src="{{ asset($menu->gambar) }}" alt="{{ $menu->nama }}"
                        style="width: 50px; height: 50px; object-fit: cover;">
                    @else
                    -
                    @endif
                </td>
                <td>{{ $menu->nama }}</td>
                <td>{{ $menu->kategori }}</td>
                <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin menghapus {{ $menu->nama }}?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $menus->links() }}
</div>
@endsection