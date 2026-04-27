@extends('layouts.app')

@section('content')

<div style="text-align:center; padding:50px;">

    <!-- TITLE -->
    <h1 style="font-size:40px; color:#ff69b4; margin-bottom:10px;">
        🍰 Manis Rasa
    </h1>

    <p style="font-size:18px; color:gray;">
        Toko kue homemade dengan rasa manis yang bikin nagih 💕
    </p>

</div>

<!-- HERO IMAGE -->
<div style="text-align:center; margin-bottom:40px;">
    <img 
        src="https://images.unsplash.com/photo-1559622214-0b5a2e0c1c87"
        style="width:80%; max-width:600px; border-radius:20px;"
    >
</div>

<!-- DESKRIPSI -->
<div style="max-width:800px; margin:auto; text-align:center; padding:20px;">
    <h2 style="color:#ff69b4;">Tentang Manis Rasa</h2>

    <p style="color:#555; line-height:1.6;">
        Manis Rasa adalah toko kue yang menghadirkan berbagai pilihan dessert lezat 
        seperti banana puding, lapis legit, dan cake kukus dengan bahan berkualitas 
        dan rasa premium. Kami berkomitmen memberikan pengalaman manis di setiap gigitan.
    </p>
</div>

<!-- MENU PREVIEW -->
<div style="padding:40px;">
    <h2 style="text-align:center; color:#ff69b4;">Menu Favorit</h2>

    <div style="display:flex; justify-content:center; gap:30px; flex-wrap:wrap; margin-top:30px;">

        <!-- CARD 1 -->
        <div style="background:white; padding:20px; border-radius:15px; width:200px; box-shadow:0 5px 15px rgba(0,0,0,0.1);">
            <img src="https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b" style="width:100%; border-radius:10px;">
            <h3>Banana Puding</h3>
            <p>Rp 50.000</p>
        </div>

        <!-- CARD 2 -->
        <div style="background:white; padding:20px; border-radius:15px; width:200px; box-shadow:0 5px 15px rgba(0,0,0,0.1);">
            <img src="https://images.unsplash.com/photo-1603532648955-039310d9ed75" style="width:100%; border-radius:10px;">
            <h3>Lapis Legit</h3>
            <p>Rp 50.000</p>
        </div>

        <!-- CARD 3 -->
        <div style="background:white; padding:20px; border-radius:15px; width:200px; box-shadow:0 5px 15px rgba(0,0,0,0.1);">
            <img src="https://images.unsplash.com/photo-1601972599720-36938d4ecd31" style="width:100%; border-radius:10px;">
            <h3>Cake Kukus</h3>
            <p>Rp 50.000</p>
        </div>

    </div>
</div>

<!-- BUTTON ORDER -->
<div style="text-align:center; margin-top:30px;">
    <a href="/order">
        <button style="background:#ff69b4; color:white; padding:15px 30px; border:none; border-radius:30px; font-size:16px;">
            Pesan Sekarang 🍰
        </button>
    </a>
</div>

@endsection