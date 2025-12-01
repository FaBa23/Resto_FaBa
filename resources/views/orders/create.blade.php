@extends('layouts.app')
@section('content')
<h3>Buat Pesanan</h3>

<form method="post" action="{{ route('orders.store') }}" id="order-form">@csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nama Pelanggan</label>
            <input name="customer_name" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Nomor Meja</label>
            <input name="table_number" type="number" min="1" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Lokasi (opsional)</label>
            <input name="location" class="form-control" placeholder="e.g. Alamat atau Koordinat">
        </div>
    </div>

    <hr>
    <h5>Pilih Menu</h5>
    <div class="row mb-4" id="menu-grid">
        @php
        $groupedMenus = $menus->groupBy('category');
        @endphp
        @foreach($groupedMenus as $category => $menusInCategory)
        <div class="col-12 mb-3">
            <h6>{{ ucfirst($category) }}</h6>
            <div class="row">
                @foreach($menusInCategory as $menu)
                <div class="col-md-3 mb-3">
                    <div class="card h-100 menu-card" data-id="{{ $menu->id }}" data-price="{{ $menu->price }}"
                        data-name="{{ $menu->name }}" data-description="{{ $menu->description }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $menu->name }}</h6>
                            <p class="card-text">{{ $menu->description ?: 'Tidak ada deskripsi' }}</p>
                            <p class="card-text"><strong>Rp {{ number_format($menu->price,0,',','.') }}</strong></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    <hr>
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5>Item Pesanan</h5>
        <button type="button" class="btn btn-sm btn-outline-primary" id="add-row">+ Tambah Item</button>
    </div>

    <div class="table-responsive">
        <table class="table" id="items-table">
            <thead>
                <tr>
                    <th style="width:45%">Menu</th>
                    <th style="width:15%">Harga</th>
                    <th style="width:15%">Qty</th>
                    <th style="width:15%">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-end">Total</th>
                    <th id="grand-total">Rp 0</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <button class="btn btn-success">Simpan Pesanan</button>
</form>

@php
// kirim data menu ke JS
$menusJson = $menus->map(fn($m)=>[
'id'=>$m->id,'name'=>$m->name,'price'=>$m->price,
'text'=>$m->name.' ('.ucfirst($m->category).')'
])->values();
@endphp
@endsection

@push('scripts')
<script>
const MENUS = @json($menusJson);
const tbody = document.querySelector('#items-table tbody');
const fmt = n => new Intl.NumberFormat('id-ID').format(n);

function menuSelectHTML(idx) {
    let opt = MENUS.map(m => {
        let desc = m.description ? ` - ${m.description}` : '';
        return `<option value="${m.id}" data-price="${m.price}" title="${m.description || ''}">${m.text}${desc}</option>`;
    }).join('');
    return `<select name="items[${idx}][menu_id]" class="form-select menu-select" required>${opt}</select>`;
}

function rowHTML(idx, menuId, menuName, price) {
    return `<tr data-menu-id="${menuId}" data-price="${price}">
    <td>${menuName}</td>
    <td class="price">Rp ${fmt(price)}</td>
    <td><input name="items[${idx}][quantity]" type="number" min="1" value="1" class="form-control qty"></td>
    <td class="subtotal">Rp ${fmt(price)}</td>
    <td><button type="button" class="btn btn-sm btn-outline-danger del">Hapus</button></td>
    <input type="hidden" name="items[${idx}][menu_id]" value="${menuId}">
  </tr>`;
}

function recalc() {
    let total = 0;
    tbody.querySelectorAll('tr').forEach(tr => {
        const price = Number(tr.dataset.price || 0);
        const qty = Number(tr.querySelector('.qty').value || 0);
        const sub = price * qty;
        tr.querySelector('.subtotal').innerText = 'Rp ' + fmt(sub);
        total += sub;
    });
    document.querySelector('#grand-total').innerText = 'Rp ' + fmt(total);
}

function bind(tr) {
    tr.querySelector('.qty').addEventListener('input', recalc);
    tr.querySelector('.del').addEventListener('click', () => {
        tr.remove();
        recalc();
    });
    recalc();
}

// Handle menu card clicks
document.querySelectorAll('.menu-card').forEach(card => {
    card.addEventListener('click', () => {
        const menuId = card.dataset.id;
        const menuName = card.dataset.name;
        const price = Number(card.dataset.price);

        // Check if item already exists
        const existingRow = tbody.querySelector(`tr[data-menu-id="${menuId}"]`);
        if (existingRow) {
            const qtyInput = existingRow.querySelector('.qty');
            qtyInput.value = Number(qtyInput.value) + 1;
            recalc();
            return;
        }

        // Add new row
        const idx = tbody.querySelectorAll('tr').length;
        tbody.insertAdjacentHTML('beforeend', rowHTML(idx, menuId, menuName, price));
        bind(tbody.lastElementChild);
    });
});

document.getElementById('add-row').addEventListener('click', () => {
    const idx = tbody.querySelectorAll('tr').length;
    tbody.insertAdjacentHTML('beforeend', rowHTML(idx, '', 'Pilih Menu', 0));
    bind(tbody.lastElementChild);
});
</script>
@endpush