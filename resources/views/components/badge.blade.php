@props(['value'])
@php
    $warna = [
        'mahir' => 'success', 'menengah' => 'warning text-dark', 'pemula' => 'info text-dark',
        'magang' => 'info text-dark', 'organisasi' => 'secondary',
    ][strtolower($value)] ?? 'primary';
@endphp
<span class="badge bg-{{ $warna }}">{{ ucfirst($value) }}</span>
