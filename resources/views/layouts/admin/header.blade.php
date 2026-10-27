@php $baruHariIni = \App\Models\Biodata::whereDate('created_at', today())->count(); @endphp
<header class="bg-white border-bottom px-3 px-lg-4 py-2 d-flex align-items-center gap-3">
    <button class="btn btn-light d-lg-none" id="sidebarToggle" aria-label="Buka menu"><i class="fa-solid fa-bars"></i></button>
    <div class="ms-auto d-flex align-items-center gap-3">
        <a href="{{ route('biodata.index') }}" class="text-secondary position-relative" title="CV dibuat hari ini">
            <i class="fa-solid fa-bell fa-lg"></i>
            @if ($baruHariIni > 0)
                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill">{{ $baruHariIni }}</span>
            @endif
        </a>
        <span class="d-none d-sm-inline"><i class="fa-solid fa-circle-user fa-lg text-bd me-1"></i>{{ auth()->user()->name ?? 'Admin' }}</span>
        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-right-from-bracket me-1"></i>Logout</button>
        </form>
    </div>
</header>
