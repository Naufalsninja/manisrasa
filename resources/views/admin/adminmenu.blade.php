@extends('layouts.admin')

@section('content')

<h2>CRUD MENU ADMIN</h2>

<!-- BUTTON TAMBAH -->
<button onclick="openAddModal()" style="padding:10px;background:#e91e63;color:white;border:none;border-radius:8px;">
    + Tambah Menu
</button>

<br><br>

<!-- TABLE MENU -->
<table border="1" width="100%" cellpadding="10" style="background:white;">
    <tr>
        <th>Gambar</th>
        <th>Nama Menu</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach($menus as $menu)
    <tr>

        <!-- GAMBAR -->
        <td>
            @if($menu->gambar)
                <img src="{{ asset('images/'.$menu->gambar) }}" width="60">
            @else
                -
            @endif
        </td>

        <td>{{ $menu->nama_menu }}</td>
        <td>{{ $menu->deskripsi }}</td>
        <td>Rp {{ number_format($menu->harga) }}</td>

        <td>

            <button onclick='openEditModal(@json($menu))'>Edit</button>

            <a href="/admin/menu/delete/{{ $menu->id }}"
               onclick="return confirm('Yakin hapus menu ini?')">
               Hapus
            </a>

        </td>
    </tr>
    @endforeach

</table>

<!-- ================= ADD MODAL ================= -->
<div id="addModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;
background:rgba(0,0,0,0.5);justify-content:center;align-items:center;">

    <div style="background:white;padding:20px;border-radius:10px;width:400px;">

        <h3>Tambah Menu</h3>

        <form action="/admin/menu/store" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="nama_menu" placeholder="Nama Menu" required><br><br>

            <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

            <input type="number" name="harga" placeholder="Harga" required><br><br>

            <input type="file" name="gambar"><br><br>

            <button type="submit">Simpan</button>
            <button type="button" onclick="closeAddModal()">Tutup</button>
        </form>

    </div>
</div>

<!-- ================= EDIT MODAL ================= -->
<div id="editModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;
background:rgba(0,0,0,0.5);justify-content:center;align-items:center;">

    <div style="background:white;padding:20px;border-radius:10px;width:400px;">

        <h3>Edit Menu</h3>

        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="nama_menu" id="editNama" required><br><br>

            <textarea name="deskripsi" id="editDeskripsi"></textarea><br><br>

            <input type="number" name="harga" id="editHarga" required><br><br>

            <!-- OPTIONAL: update gambar -->
            <input type="file" name="gambar"><br><br>

            <button type="submit">Update</button>
            <button type="button" onclick="closeEditModal()">Tutup</button>

        </form>

    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>

function openAddModal() {
    document.getElementById('addModal').style.display = 'flex';
}

function closeAddModal() {
    document.getElementById('addModal').style.display = 'none';
}

function openEditModal(menu) {
    document.getElementById('editModal').style.display = 'flex';

    document.getElementById('editNama').value = menu.nama_menu;
    document.getElementById('editDeskripsi').value = menu.deskripsi;
    document.getElementById('editHarga').value = menu.harga;

    document.getElementById('editForm').action = '/admin/menu/update/' + menu.id;
}

function closeEditModal() {
    document.getElementById('editModal').style.display = 'none';
}

</script>

@endsection