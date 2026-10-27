@extends('layouts.admin.app')
@section('title', 'Detail ' . $title)
@section('content')
<x-page-header :title="'Detail ' . $title" :icon="$icon" />
<div class="card shadow-sm border-0"><div class="card-body">
    <dl class="row mb-4">
        <dt class="col-sm-3">Nama lengkap</dt><dd class="col-sm-9">{{ $item->nama_lengkap }}</dd>
        <dt class="col-sm-3">Foto profil</dt><dd class="col-sm-9"><img src="{{ $item->foto_url }}" alt="Foto" class="rounded-circle border" width="96" height="96" style="object-fit:cover"></dd>
        <dt class="col-sm-3">Posisi / headline</dt><dd class="col-sm-9">{{ $item->posisi }}</dd>
        <dt class="col-sm-3">Email</dt><dd class="col-sm-9">{{ $item->email }}</dd>
        <dt class="col-sm-3">Telepon</dt><dd class="col-sm-9">{{ $item->telepon }}</dd>
        <dt class="col-sm-3">Alamat</dt><dd class="col-sm-9">{{ $item->alamat }}</dd>
        <dt class="col-sm-3">Tentang saya</dt><dd class="col-sm-9">{{ $item->tentang }}</dd>
    </dl>
    <div class="d-flex gap-2">
        <a href="{{ route($route . '.edit', $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</a>
        <a href="{{ route($route . '.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i>Kembali</a>
    </div>
</div></div>
@endsection
