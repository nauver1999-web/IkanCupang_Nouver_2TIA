<div class="col-md-6 col-lg-4">
    <div class="card card-cv shadow-sm h-100">
        <div class="card-photo"><img src="{{ $b->foto_url }}" alt="Foto {{ $b->nama_lengkap }}"></div>
        <div class="card-body">
            <h5 class="card-title mb-0">{{ $b->nama_lengkap }}</h5>
            <p class="text-bd fw-semibold">{{ $b->posisi }}</p>
            <p class="text-muted">{{ \Illuminate\Support\Str::limit($b->tentang, 90) }}</p>
            <div class="d-flex gap-2 flex-wrap small">
                <span class="badge bg-success" title="Pendidikan"><i class="fa-solid fa-graduation-cap me-1"></i>{{ $b->pendidikans_count }}</span>
                <span class="badge bg-warning text-dark" title="Pengalaman"><i class="fa-solid fa-briefcase me-1"></i>{{ $b->pengalamans_count }}</span>
                <span class="badge bg-info text-dark" title="Keahlian"><i class="fa-solid fa-screwdriver-wrench me-1"></i>{{ $b->keahlians_count }}</span>
            </div>
        </div>
        <div class="card-footer bg-white border-0 pb-3">
            <a href="{{ route('cv.detail', $b->id) }}" class="btn btn-primary w-100"><i class="fa-solid fa-eye me-1"></i>Lihat CV</a>
        </div>
    </div>
</div>
