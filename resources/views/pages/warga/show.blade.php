@extends('layouts.admin.app')
@section('title', 'Detail ' . $title)
@section('content')
<x-page-header :title="'Detail ' . $title" :icon="$icon" />
<div class="card shadow-sm border-0"><div class="card-body">
    <dl class="row mb-4">
        <dt class="col-sm-3">Nama</dt><dd class="col-sm-9">{{ $item->nama }}</dd>
        <dt class="col-sm-3">NIK</dt><dd class="col-sm-9">{{ $item->nik }}</dd>
        <dt class="col-sm-3">Alamat</dt><dd class="col-sm-9">{{ $item->alamat }}</dd>
        <dt class="col-sm-3">Status</dt><dd class="col-sm-9"><x-badge :value="$item->status" /></dd>
    </dl>
    <div class="d-flex gap-2">
        <a href="{{ route($route . '.edit', $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</a>
        <a href="{{ route($route . '.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-1"></i>Kembali</a>
    </div>
</div></div>
@endsection
