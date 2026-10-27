@props(['title', 'icon', 'route' => null])
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="m-0"><i class="fa-solid {{ $icon }} text-bd me-2"></i>{{ $title }}</h4>
    @if ($route)
        <a href="{{ route($route . '.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Tambah</a>
    @endif
</div>
