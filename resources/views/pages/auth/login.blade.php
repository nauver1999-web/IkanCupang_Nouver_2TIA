@extends('layouts.admin.auth')
@section('title', 'Masuk')
@section('content')
<div class="container min-vh-100 d-flex align-items-center py-4">
    <div class="row shadow-lg rounded-4 overflow-hidden w-100 bg-white mx-0">
        <div class="col-lg-6 d-none d-lg-flex flex-column justify-content-end text-white p-5"
             style="background:url('{{ asset('img/login.svg') }}') center/cover; min-height:520px">
            <h3 class="mb-2">CV rapi, siap kirim kapan saja.</h3>
            <p class="mb-0">Isi biodata, pendidikan, pengalaman, dan keahlian, lalu bagikan CV Anda lewat satu tautan.</p>
        </div>
        <div class="col-lg-6 p-4 p-md-5">
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo.svg') }}" height="64" alt="Logo CVku">
                <h4 class="mt-2 mb-1">CVku</h4>
                <p class="text-muted small mb-0">Aplikasi pembuat CV online. Masuk untuk membuat dan mengelola CV.</p>
            </div>
            <form method="POST" action="{{ route('login.process') }}">
                @csrf
                <div class="input-group mb-1">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autofocus>
                </div>
                @error('email')<div class="text-danger small mb-2">{{ $message }}</div>@enderror
                <div class="input-group mb-3 mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <button class="btn btn-primary w-100"><i class="fa-solid fa-right-to-bracket me-1"></i>Masuk</button>
            </form>
            <div class="d-flex justify-content-between small mt-3">
                <a href="{{ route('register') }}" class="text-bd"><i class="fa-solid fa-user-plus me-1"></i>Buat akun</a>
                <a href="{{ route('home') }}" class="text-bd"><i class="fa-solid fa-house me-1"></i>Ke beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection
