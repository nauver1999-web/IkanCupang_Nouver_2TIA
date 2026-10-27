@extends('layouts.guest.app')
@section('title', 'Tentang')
@section('content')
@php
    $alur = [
        ['fa-right-to-bracket', 'Masuk sebagai admin lewat halaman login.'],
        ['fa-pen-to-square', 'Isi biodata dan foto, lalu tambahkan pendidikan, pengalaman, dan keahlian.'],
        ['fa-eye', 'Lihat hasilnya di halaman CV publik, bagikan tautannya, atau cetak.'],
    ];
@endphp
<div class="container py-5">
    <h2 class="section-title mb-4"><i class="fa-solid fa-circle-info text-bd me-2"></i>Tentang CVku</h2>
    <div class="row align-items-center g-4 mb-5">
        <div class="col-md-6"><img src="{{ asset('img/about.svg') }}" class="img-fluid rounded-4 shadow" alt="Ilustrasi lembar CV"></div>
        <div class="col-md-6">
            <h5>Tujuan</h5>
            <p>CVku membantu mahasiswa dan pencari kerja menyusun CV yang terstruktur. Data disimpan dalam empat tabel terpisah sehingga mudah diubah tanpa menulis ulang seluruh CV.</p>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fa-solid fa-id-card text-bd me-2"></i><strong>Biodata:</strong> data diri dan foto profil.</li>
                <li class="mb-2"><i class="fa-solid fa-graduation-cap text-bd me-2"></i><strong>Pendidikan:</strong> riwayat sekolah dan kuliah.</li>
                <li class="mb-2"><i class="fa-solid fa-briefcase text-bd me-2"></i><strong>Pengalaman:</strong> kerja, magang, dan organisasi.</li>
                <li><i class="fa-solid fa-screwdriver-wrench text-bd me-2"></i><strong>Keahlian:</strong> kemampuan beserta tingkatnya.</li>
            </ul>
        </div>
    </div>

    <h4 class="mb-3">Alur penggunaan</h4>
    <div class="row g-3">
        @foreach ($alur as $i => [$ikon, $teks])
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100"><div class="card-body">
                    <div class="fs-2 text-bd mb-2"><i class="fa-solid {{ $ikon }}"></i></div>
                    <h6>Langkah {{ $i + 1 }}</h6>
                    <p class="text-muted mb-0">{{ $teks }}</p>
                </div></div>
            </div>
        @endforeach
    </div>
</div>
@endsection
