<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Admin') | CVku</title>
    @include('layouts.admin.css')
</head>
<body>
    @include('layouts.admin.sidebar')
    <div class="admin-main d-flex flex-column min-vh-100">
        @include('layouts.admin.header')
        <main class="p-3 p-lg-4 flex-grow-1">
            @if (session('success'))
                <div class="alert alert-success"><i class="fa-solid fa-circle-check me-1"></i>{{ session('success') }}</div>
            @endif
            @yield('content')
        </main>
        @include('layouts.admin.footer')
    </div>
    @include('layouts.admin.js')
</body>
</html>
