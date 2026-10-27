@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('content')
<x-page-header title="Dashboard" icon="fa-gauge" />
<div class="row g-3 mb-4">
    @foreach ($stats as [$label, $value, $icon])
        <div class="col-6 col-lg-3"><x-stat-card :label="$label" :value="$value" :icon="$icon" /></div>
    @endforeach
</div>
<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <span class="fw-bold"><i class="fa-solid fa-id-card text-bd me-2"></i>CV terbaru</span>
        <a href="{{ route('biodata.create') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus me-1"></i>Buat CV</a>
    </div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light"><tr><th>Foto</th><th>Nama</th><th>Posisi</th><th>Dibuat</th></tr></thead>
            <tbody>
                @forelse ($terbaru as $b)
                    <tr>
                        <td><img src="{{ $b->foto_url }}" alt="Foto" class="rounded-circle" width="40" height="40" style="object-fit:cover"></td>
                        <td>{{ $b->nama_lengkap }}</td>
                        <td>{{ $b->posisi }}</td>
                        <td>{{ $b->created_at->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-4">Belum ada CV. Mulai dengan menekan Buat CV.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
