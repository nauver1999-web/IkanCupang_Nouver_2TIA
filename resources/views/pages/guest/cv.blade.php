@extends('layouts.guest.app')
@section('title', 'CV')
@section('content')
<div class="container py-5">
    <h2 class="section-title mb-4"><i class="fa-solid fa-id-card text-bd me-2"></i>Daftar CV</h2>
    <div class="row g-4">
        @forelse ($biodatas as $b)
            @include('pages.guest._cv-card')
        @empty
            <p class="text-muted">Belum ada CV yang dibuat.</p>
        @endforelse
    </div>
</div>
@endsection
