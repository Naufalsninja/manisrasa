@extends('layouts.admin')

@section('content')

<div class="title">Dashboard Admin 🎉</div>

<div class="card">
    <p>Selamat datang, {{ session('admin_name') }}</p>
    <p>Gunakan sidebar untuk mengelola aplikasi.</p>
</div>

@endsection