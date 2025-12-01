{{-- File: resources/views/partials/menu_list.blade.php --}}

<div class="card shadow-lg border-0 mb-4">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">{{ $title }}</h4>
    </div>
    <ul class="list-group list-group-flush">
        {{-- LOOP MENGGUNAKAN DATA DARI DATABASE --}}
        @forelse ($menus as $menu)
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    {{-- Akses Objek Eloquent: $menu->gambar --}}
                    @if ($menu->gambar)
                    <img src="{{ asset($menu->gambar) }}" alt="{{ $menu->nama }}"
                        class="img-fluid rounded-circle shadow-sm"
                        style="width: 60px; height: 60px; object-fit: cover;">
                    @else
                    {{-- Placeholder jika tidak ada gambar --}}
                    <div style="width: 60px; height: 60px; background: #ddd; border-radius: 50%;"></div>
                    @endif
                </div>
                <div>
                    {{-- Akses Objek Eloquent: $menu->nama dan $menu->deskripsi --}}
                    <strong>{{ $menu->nama }}</strong>
                    <span class="text-muted small d-block">{{ $menu->deskripsi }}</span>
                </div>
            </div>

            {{-- Akses Objek Eloquent: $menu->harga --}}
            <span class="badge bg-success fs-6 fw-bold">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
        </li>
        @empty
        <li class="list-group-item text-center text-muted">Belum ada menu di kategori ini.</li>
        @endforelse
    </ul>
</div>