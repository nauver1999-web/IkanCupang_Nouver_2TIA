@php
    $menu = [
        ['label' => null, 'items' => [
            ['Dashboard', 'dashboard', 'fa-gauge', 'dashboard'],
        ]],
        ['label' => 'Data CV', 'items' => [
            ['Biodata', 'biodata.index', 'fa-id-card', 'biodata.*'],
            ['Pendidikan', 'pendidikan.index', 'fa-graduation-cap', 'pendidikan.*'],
            ['Pengalaman', 'pengalaman.index', 'fa-briefcase', 'pengalaman.*'],
            ['Keahlian', 'keahlian.index', 'fa-screwdriver-wrench', 'keahlian.*'],
        ]],
        ['label' => 'Master Data', 'items' => [
            ['User', 'user.index', 'fa-user-gear', 'user.*'],
        ]],
    ];
@endphp
<aside class="sidebar" id="sidebar">
    <a href="{{ route('dashboard') }}" class="brand mb-2">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo CVku"> CVku
    </a>
    <ul class="nav flex-column">
        @foreach ($menu as $group)
            @if ($group['label'])
                <li class="menu-label">{{ $group['label'] }}</li>
            @endif
            @foreach ($group['items'] as [$text, $route, $icon, $pattern])
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs($pattern) ? 'active' : '' }}" href="{{ route($route) }}">
                        <i class="fa-solid {{ $icon }}"></i> {{ $text }}
                    </a>
                </li>
            @endforeach
        @endforeach
        <li class="menu-label">Lainnya</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cv') }}" target="_blank">
                <i class="fa-solid fa-arrow-up-right-from-square"></i> Lihat CV Publik
            </a>
        </li>
    </ul>
</aside>
