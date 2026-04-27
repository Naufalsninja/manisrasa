@extends('layouts.app')

@section('content')

<style>
    .order-container {
        max-width: 700px;
        margin: 0 auto;
        padding: 50px 20px;
    }

    .order-title {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .order-form {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .order-form input,
    .order-form select,
    .order-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .btn-order {
        width: 100%;
        padding: 12px;
        background: #e91e63;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-order:hover {
        background: #d81b60;
    }

    /* MODAL */
    .modal {
        position: fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background: rgba(0,0,0,0.5);
        display: none;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        width: 350px;
    }

    .modal-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 20px;
    }

    .modal-buttons button {
        padding: 10px 15px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .wa-btn {
        background: green;
        color: white;
    }
</style>

<div class="order-container">

    <h1 class="order-title">Form Pemesanan</h1>

    <div class="order-form">

        <!-- FORM -->
        <form id="orderForm" action="/order/store" method="POST">
            @csrf

            <input type="text" name="nama" placeholder="Nama Lengkap" required>

            <input type="text" name="whatsapp" placeholder="No WhatsApp" required>

            <input type="text" name="produk" placeholder="Produk" required>

            <input type="text" name="varian" placeholder="Varian">

            <input type="number" name="jumlah" placeholder="Jumlah" required>

            <input type="date" name="tanggal" required>

            <input type="time" name="jam" required>

            <select name="pengiriman" required>
                <option value="">-- Pilih Pengiriman --</option>
                <option value="jemput_toko">Jemput Toko</option>
                <option value="delivery">Delivery</option>
            </select>

            <textarea name="alamat" placeholder="Alamat"></textarea>

            <textarea name="catatan" placeholder="Catatan"></textarea>

            <!-- BUTTON TRIGGER MODAL -->
            <button type="button" class="btn-order" onclick="openModal()">
                Pesan Sekarang
            </button>

        </form>

    </div>
</div>

<!-- MODAL -->
<div id="orderModal" class="modal">
    <div class="modal-content">

        <h2>🎉 Pesanan Siap Dikirim</h2>
        <p>Ingin Melanjutkan ke WhatsApp?</p>

        <div class="modal-buttons">

            <!-- OKE = hanya submit ke database -->
            <button type="button" onclick="goHome()">Tidak</button>

            <!-- WA = submit + redirect WA -->
            <button class="wa-btn" onclick="submitWA()">WhatsApp</button>

        </div>

    </div>
</div>

<script>
function openModal() {
    document.getElementById('orderModal').style.display = 'flex';
}

function submitOrder() {
    document.getElementById('orderForm').submit();
}

function submitWA() {
    let form = document.getElementById('orderForm');

    form.submit();

    setTimeout(() => {
        let nama = form.nama.value;
        let produk = form.produk.value;
        let jumlah = form.jumlah.value;
        let whatsapp = form.whatsapp.value;

        let no = whatsapp.replace(/[^0-9]/g, '');
        if (no.startsWith('0')) {
            no = '62' + no.substring(1);
        }

        let pesan =
            "Halo Manis Rasa 🍰%0A%0A" +
            "Nama: " + nama + "%0A" +
            "Produk: " + produk + "%0A" +
            "Jumlah: " + jumlah;

        window.location.href = "https://wa.me/6281283381375?text=" + pesan;

    }, 500);
}

// 👉 INI YANG BARU KAMU TAMBAH
function goHome() {
    window.location.href = "/";
}
</script>

@endsection