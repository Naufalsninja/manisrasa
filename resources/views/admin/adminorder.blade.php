@extends('layouts.admin')

@section('content')

<h2>📦 Data Pesanan</h2>

<div style="overflow-x:auto;">

<table border="1" width="100%" cellpadding="10" style="background:white; border-collapse:collapse; font-size:14px;">

    <thead>
        <tr style="background:#f5f5f5;">
            <th>Nama</th>
            <th>WhatsApp</th>
            <th>Produk</th>
            <th>Varian</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Pengiriman</th>
            <th>Alamat</th>
            <th>Catatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    @foreach($orders as $order)
    <tr>

        <td>{{ $order->nama }}</td>
        <td>{{ $order->whatsapp }}</td>
        <td>{{ $order->produk }}</td>
        <td>{{ $order->varian ?? '-' }}</td>
        <td>{{ $order->jumlah }}</td>
        <td>{{ $order->tanggal }}</td>
        <td>{{ $order->jam }}</td>
        <td>{{ $order->pengiriman }}</td>
        <td>{{ $order->alamat ?? '-' }}</td>
        <td>{{ $order->catatan ?? '-' }}</td>

        <!-- STATUS -->
        <td>
            @if($order->status == 'diproses')
                <span style="color:#ff9800;font-weight:bold;">🟡 Diproses</span>

            @elseif($order->status == 'selesai')
                <span style="color:green;font-weight:bold;">🟢 Selesai</span>

            @elseif($order->status == 'diterima')
                <span style="color:blue;font-weight:bold;">🔵 Diterima</span>

            @else
                <span>{{ $order->status }}</span>
            @endif
        </td>

        <!-- AKSI -->
        <td>

            <form action="/admin/order/update-status/{{ $order->id }}" method="POST">
                @csrf

                <select name="status" style="padding:5px;">
                    <option value="diproses" {{ $order->status == 'diproses' ? 'selected' : '' }}>
                        Diproses
                    </option>

                    <option value="selesai" {{ $order->status == 'selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                    <option value="diterima" {{ $order->status == 'diterima' ? 'selected' : '' }}>
                        Diterima
                    </option>
                </select>

                <button type="submit" style="padding:5px 10px;background:#e91e63;color:white;border:none;border-radius:5px;">
                    Update
                </button>

            </form>

        </td>

    </tr>
    @endforeach

    </tbody>

</table>

</div>

@endsection