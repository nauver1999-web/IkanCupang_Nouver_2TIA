@extends('layouts.guest.app')
@section('title', 'Kontak')
@section('content')
@php
    $kontak = [
        ['fa-location-dot', 'Alamat', 'Pekanbaru, Riau'],
        ['fa-phone', 'Telepon', '0812-3456-7890'],
        ['fa-envelope', 'Email', 'admin@cvku.test'],
        ['fa-clock', 'Jam layanan', 'Senin-Jumat, 08.00-16.00'],
    ];
@endphp
<div class="container py-5">
    <h2 class="section-title mb-4"><i class="fa-solid fa-phone text-bd me-2"></i>Hubungi kami</h2>
    <div class="row g-3">
        @foreach ($kontak as [$ikon, $label, $isi])
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100"><div class="card-body text-center">
                    <div class="fs-2 text-bd mb-2"><i class="fa-solid {{ $ikon }}"></i></div>
                    <h6>{{ $label }}</h6>
                    <p class="text-muted mb-0">{{ $isi }}</p>
                </div></div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="https://wa.me/{{ config('cv.wa_number') }}" target="_blank" rel="noopener" class="btn btn-success btn-lg"><i class="fa-brands fa-whatsapp me-1"></i>Chat via WhatsApp</a>
    </div>
</div>
@endsection
