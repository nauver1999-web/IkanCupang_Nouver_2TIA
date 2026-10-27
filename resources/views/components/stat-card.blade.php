@props(['label', 'value', 'icon'])
<div class="card shadow-sm border-0 h-100">
    <div class="card-body d-flex align-items-center gap-3">
        <div class="stat-icon"><i class="fa-solid {{ $icon }}"></i></div>
        <div>
            <div class="text-muted small">{{ $label }}</div>
            <div class="fs-3 fw-bold">{{ $value }}</div>
        </div>
    </div>
</div>
