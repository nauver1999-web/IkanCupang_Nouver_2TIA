@extends('layouts.guest.app')
@section('title', 'Home')
@section('content')
@php
    $langkah = [
        ['fa-id-card', 'Isi biodata', 'Tulis data diri dan unggah foto profil. Foto bisa diganti kapan saja.'],
        ['fa-list-check', 'Lengkapi isi CV', 'Tambahkan pendidikan, pengalaman, dan keahlian.'],
        ['fa-share-nodes', 'Bagikan atau cetak', 'Kirim tautan CV atau cetak langsung dari halaman CV.'],
    ];
@endphp
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="mb-3">Buat CV yang rapi, tanpa ribet.</h1>
                <p class="lead mb-4">Isi data sekali, tampilkan sebagai halaman CV yang siap dibagikan atau dicetak.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2"><i class="fa-solid fa-pen-to-square me-1"></i>Buat CV</a>
                <a href="{{ route('cv') }}" class="btn btn-outline-primary btn-lg"><i class="fa-solid fa-eye me-1"></i>Lihat contoh</a>
            </div>
            <div class="col-lg-6"><img src="{{ asset('img/hero.svg') }}" class="img-fluid rounded-4 shadow" alt="Ilustrasi lembar CV"></div>
        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="section-title mb-4"><i class="fa-solid fa-list-check text-bd me-2"></i>Cara membuat CV</h2>
    <div class="row g-3">
        @foreach ($langkah as $i => [$ikon, $judul, $teks])
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100"><div class="card-body">
                    <div class="fs-2 text-bd mb-2"><i class="fa-solid {{ $ikon }}"></i></div>
                    <h6>Langkah {{ $i + 1 }}: {{ $judul }}</h6>
                    <p class="text-muted mb-0">{{ $teks }}</p>
                </div></div>
            </div>
        @endforeach
    </div>
</section>

<section class="container pb-4">
    <h2 class="section-title mb-4"><i class="fa-solid fa-id-card text-bd me-2"></i>CV terbaru</h2>
    <div class="row g-4">
        @forelse ($biodatas as $b)
            @include('pages.guest._cv-card')
        @empty
            <p class="text-muted">Belum ada CV yang dibuat.</p>
        @endforelse
    </div>
    <div class="text-center mt-4"><a href="{{ route('cv') }}" class="btn btn-outline-primary"><i class="fa-solid fa-list me-1"></i>Semua CV</a></div>
</section>
@endsection
