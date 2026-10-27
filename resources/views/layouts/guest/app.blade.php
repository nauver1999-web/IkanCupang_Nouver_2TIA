<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Home') | CVku</title>
    @include('layouts.guest.css')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layouts.guest.header')
    <main class="flex-grow-1">
        @yield('content')
    </main>
    @include('layouts.guest.footer')
    @include('layouts.guest.whatsapp')
    @include('layouts.guest.js')
</body>
</html>
