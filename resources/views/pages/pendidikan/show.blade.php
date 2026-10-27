@extends('layouts.admin.app')
@section('title', 'Detail ' . $title)
@section('content')
<x-page-header :title="'Detail ' . $title" :icon="$icon" />
<div class="card shadow-sm border-0"><div class="card-body">
    <dl class="row mb-4">
        <dt class="col-sm-3">Biodata</dt><dd class="col-sm-9">{{ $item->biodata?->nama_lengkap }}</dd>
        <dt class="col-sm-3">Institusi</dt><dd class="col-sm-9">{{ $item->institusi }}</dd>
        <dt class="col-sm-3">Jenjang</dt><dd class="col-sm-9"><x-badge :value="$item->jenjang" /></dd>
        <dt class="col-sm-3">Jurusan</dt><dd class="col-sm-9">{{ $item->jurusan }}</dd>
        <dt class="col-sm-3">Tahun mulai</dt><dd class="col-sm-9">{{ $item->tahun_mulai }}</dd>
        <dt class="col-sm-3">Tahun selesai</dt><dd class="col-sm-9">{{ $item->tahun_selesai ?? 'sekarang' }}</dd>
    </dl>
    <div class="d-flex gap-2">
        <a href="{{ route($route . '.edit', $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</a>
        <a href="{{ route($route . '.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i>Kembali</a>
    </div>
</div></div>
@endsection
