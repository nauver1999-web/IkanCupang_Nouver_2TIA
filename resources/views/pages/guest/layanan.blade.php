@extends('layouts.guest.app')
@section('title', 'Layanan')
@section('content')
<div class="container py-5">
    <h2 class="section-title mb-4"><i class="fa-solid fa-hand-holding-heart text-bd me-2"></i>Layanan desa</h2>
    <div class="row g-4">
        @forelse ($layanans as $layanan)
            @include('pages.guest._layanan-card')
        @empty
            <p class="text-muted">Belum ada layanan yang tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
