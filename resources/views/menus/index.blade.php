@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Menu</h3>
    <a href="{{ route('menus.create') }}" class="btn btn-primary">Tambah Menu</a>
</div>
<div class="row">
    @foreach($menus as $m)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $m->name }}</h5>
                <p class="card-text">{{ $m->description ?: 'Tidak ada deskripsi' }}</p>
                <p class="card-text"><small class="text-muted text-capitalize">{{ $m->category }}</small></p>
                <p class="card-text"><strong>Rp {{ number_format($m->price,0,',','.') }}</strong></p>
            </div>
            <div class="card-footer">
                <a href="{{ route('menus.edit',$m) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('menus.destroy',$m) }}" method="post" class="d-inline"
                    onsubmit="return confirm('Hapus menu?')">@csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $menus->links() }}
@endsection