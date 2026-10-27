@php
    $ikon = ['administrasi' => 'fa-file-signature', 'kesehatan' => 'fa-heart-pulse', 'sosial' => 'fa-hands-holding-child'][$layanan->kategori] ?? 'fa-circle-info';
@endphp
<div class="col-md-6 col-lg-4">
    <div class="card card-layanan shadow-sm h-100">
        <div class="card-icon"><i class="fa-solid {{ $ikon }}"></i></div>
        <div class="card-body">
            <span class="badge bg-success mb-2">{{ ucfirst($layanan->kategori) }}</span>
            <h5 class="card-title">{{ $layanan->nama }}</h5>
            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($layanan->deskripsi, 100) }}</p>
        </div>
    </div>
</div>
