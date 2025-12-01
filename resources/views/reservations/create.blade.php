@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Buat Reservasi</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="reservation_date" class="form-label">Tanggal Reservasi</label>
            <input type="date" id="reservation_date" name="reservation_date" value="{{ old('reservation_date') }}"
                class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="reservation_time" class="form-label">Waktu Reservasi</label>
            <input type="time" id="reservation_time" name="reservation_time" value="{{ old('reservation_time') }}"
                class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="guest_count" class="form-label">Jumlah Tamu</label>
            <input type="number" id="guest_count" name="guest_count" value="{{ old('guest_count') }}"
                class="form-control" min="1" required>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Catatan</label>
            <textarea id="notes" name="notes" class="form-control" rows="3">{{ old('notes') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Reservasi</button>
    </form>
</div>
@endsection