<!doctype html><html><head><meta charset="utf-8"><style>
body{font-family: DejaVu Sans, sans-serif;font-size:12px} table{width:100%;border-collapse:collapse}
th,td{border:1px solid #ddd;padding:6px} th{text-align:left}
</style></head><body>
<h3>Struk Pesanan #{{ $order->id }}</h3>
<p>Pelanggan: {{ $order->customer_name }} | Meja: {{ $order->table_number }}</p>
<table>
<thead><tr><th>Menu</th><th>Harga</th><th>Qty</th><th>Subtotal</th></tr></thead>
<tbody>
@foreach($order->items as $it)
<tr>
  <td>{{ $it->menu->name }}</td>
  <td>Rp {{ number_format($it->menu->price,0,',','.') }}</td>
  <td>{{ $it->quantity }}</td>
  <td>Rp {{ number_format($it->subtotal,0,',','.') }}</td>
</tr>
@endforeach
</tbody>
<tfoot><tr><th colspan="3">Total</th><th>Rp {{ number_format($order->total_price,0,',','.') }}</th></tr></tfoot>
</table>
</body></html>
