@extends('layouts.guest.app')
@section('title', $biodata->nama_lengkap)
@section('content')
<div class="container py-5" style="max-width:900px">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4 d-flex flex-column flex-md-row gap-4 align-items-md-center">
            <img src="{{ $biodata->foto_url }}" alt="Foto {{ $biodata->nama_lengkap }}" class="rounded-circle border shadow-sm" width="140" height="140" style="object-fit:cover">
            <div class="flex-grow-1">
                <h2 class="mb-0">{{ $biodata->nama_lengkap }}</h2>
                <p class="text-bd fw-semibold fs-5 mb-2">{{ $biodata->posisi }}</p>
                <div class="d-flex flex-wrap gap-3 small text-muted">
                    <span><i class="fa-solid fa-envelope me-1"></i>{{ $biodata->email }}</span>
                    <span><i class="fa-solid fa-phone me-1"></i>{{ $biodata->telepon }}</span>
                    <span><i class="fa-solid fa-location-dot me-1"></i>{{ $biodata->alamat }}</span>
                </div>
            </div>
            <div class="no-print d-flex flex-column gap-2">
                <button onclick="window.print()" class="btn btn-outline-primary"><i class="fa-solid fa-print me-1"></i>Cetak</button>
                <a href="{{ route('cv') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i>Kembali</a>
            </div>
        </div>
    </div>

    <h4 class="mb-2"><i class="fa-solid fa-user text-bd me-2"></i>Tentang</h4>
    <p class="mb-4">{{ $biodata->tentang }}</p>

    <h4 class="mb-3"><i class="fa-solid fa-graduation-cap text-bd me-2"></i>Pendidikan</h4>
    @forelse ($biodata->pendidikans as $p)
        <div class="card border-0 shadow-sm mb-2"><div class="card-body d-flex justify-content-between flex-wrap gap-2">
            <div>
                <div class="fw-bold">{{ $p->institusi }}</div>
                <div class="text-muted">{{ $p->jurusan }}</div>
            </div>
            <div class="text-end">
                <x-badge :value="$p->jenjang" />
                <div class="small text-muted mt-1">{{ $p->tahun_mulai }} - {{ $p->tahun_selesai ?? 'sekarang' }}</div>
            </div>
        </div></div>
    @empty
        <p class="text-muted">Belum ada data pendidikan.</p>
    @endforelse

    <h4 class="mt-4 mb-3"><i class="fa-solid fa-briefcase text-bd me-2"></i>Pengalaman</h4>
    @forelse ($biodata->pengalamans as $x)
        <div class="card border-0 shadow-sm mb-2"><div class="card-body">
            <div class="d-flex justify-content-between flex-wrap gap-2">
                <div>
                    <div class="fw-bold">{{ $x->posisi }} - {{ $x->perusahaan }}</div>
                    <div class="small text-muted">{{ $x->tahun_mulai }} - {{ $x->tahun_selesai ?? 'sekarang' }}</div>
                </div>
                <x-badge :value="$x->tipe" />
            </div>
            <p class="mb-0 mt-2">{{ $x->deskripsi }}</p>
        </div></div>
    @empty
        <p class="text-muted">Belum ada data pengalaman.</p>
    @endforelse

    <h4 class="mt-4 mb-3"><i class="fa-solid fa-screwdriver-wrench text-bd me-2"></i>Keahlian</h4>
    <div class="d-flex flex-wrap gap-2">
        @forelse ($biodata->keahlians as $k)
            <span class="border rounded-pill bg-white px-3 py-2">{{ $k->nama_keahlian }} <x-badge :value="$k->level" /></span>
        @empty
            <p class="text-muted">Belum ada data keahlian.</p>
        @endforelse
    </div>
</div>
@endsection
