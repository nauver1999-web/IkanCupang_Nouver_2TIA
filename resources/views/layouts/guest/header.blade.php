@php
    $nav = [
        ['Home', 'home', 'fa-house'],
        ['Tentang', 'about', 'fa-circle-info'],
        ['CV', 'cv', 'fa-id-card'],
        ['Kontak', 'kontak', 'fa-phone'],
    ];
@endphp
<nav class="navbar navbar-expand-lg guest-nav" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.svg') }}" alt="Logo CVku"> CVku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#guestNav" aria-label="Menu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="guestNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                @foreach ($nav as [$text, $route, $icon])
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs($route, $route . '.*') ? 'active' : '' }}" href="{{ route($route) }}"><i class="fa-solid {{ $icon }} me-1"></i>{{ $text }}</a>
                    </li>
                @endforeach
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-sm btn-warning" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket me-1"></i>Login Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
