@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Daftar Reservasi</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3">Tambah Reservasi</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Jumlah Tamu</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->reservation_date->format('d-m-Y') }}</td>
                <td>{{ $reservation->reservation_time }}</td>
                <td>{{ $reservation->guest_count }}</td>
                <td>{{ $reservation->notes }}</td>
                <td>
                    <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('reservations.destroy', $reservation) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin menghapus reservasi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reservations->links() }}
</div>
@endsection