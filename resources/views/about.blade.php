@extends('layouts.app')

@section('content')

<style>
    .about-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 50px 20px;
        text-align: center;
    }

    .about-title {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .about-text {
        font-size: 18px;
        color: #555;
        line-height: 1.8;
        margin-bottom: 40px;
    }

    .about-card {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .card {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .card h3 {
        margin-bottom: 10px;
        color: #e91e63;
    }

    @media (max-width: 768px) {
        .about-card {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="about-container">

    <h1 class="about-title">Tentang Manis Rasa</h1>

    <p class="about-text">
        Manis Rasa adalah brand yang menyediakan berbagai menu minuman dan makanan 
        dengan cita rasa manis yang khas dan berkualitas. Kami berkomitmen memberikan 
        pengalaman terbaik untuk setiap pelanggan.
    </p>

    <div class="about-card">

        <div class="card">
            <h3>🍰 Kualitas</h3>
            <p>Kami selalu menggunakan bahan terbaik untuk setiap menu.</p>
        </div>

        <div class="card">
            <h3>❤️ Pelayanan</h3>
            <p>Kepuasan pelanggan adalah prioritas utama kami.</p>
        </div>

        <div class="card">
            <h3>🚀 Cepat</h3>
            <p>Pesanan diproses dengan cepat dan efisien.</p>
        </div>

    </div>

</div>

@endsection