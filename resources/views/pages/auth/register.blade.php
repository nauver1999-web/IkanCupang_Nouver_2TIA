@extends('layouts.admin.auth')
@section('title', 'Daftar')
@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center py-4">
    <div class="card shadow-lg border-0 rounded-4" style="max-width:460px;width:100%">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo.svg') }}" height="56" alt="Logo CVku">
                <h4 class="mt-2 mb-0">Buat akun</h4>
            </div>
            <form method="POST" action="{{ route('register.process') }}">
                @csrf
                <x-form-field name="name" label="Nama" />
                <x-form-field name="email" label="Email" type="email" />
                <x-form-field name="password" label="Password" type="password" />
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label fw-semibold">Ulangi password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100"><i class="fa-solid fa-user-plus me-1"></i>Daftar</button>
            </form>
            <p class="text-center small mt-3 mb-0"><a href="{{ route('login') }}" class="text-bd"><i class="fa-solid fa-arrow-left me-1"></i>Kembali ke login</a></p>
        </div>
    </div>
</div>
@endsection
