<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('img/logo.svg') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
{{-- Font Awesome (ganti URL ini bila ingin memakai versi 7; nama class ikon sama) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
    :root { --bd-ink:#16302A; --bd-green:#1F6B4A; --bd-green-dark:#17563B; --bd-mint:#E3F0E7; --bd-sun:#F0B429; --bd-bg:#F5F7F4; }
    body { font-family:'Nunito Sans',system-ui,sans-serif; background:var(--bd-bg); color:var(--bd-ink); }
    h1,h2,h3,h4,h5,.brand { font-family:'Fraunces',Georgia,serif; }
    .btn-primary { --bs-btn-bg:var(--bd-green); --bs-btn-border-color:var(--bd-green); --bs-btn-hover-bg:var(--bd-green-dark); --bs-btn-hover-border-color:var(--bd-green-dark); --bs-btn-active-bg:var(--bd-green-dark); --bs-btn-active-border-color:var(--bd-green-dark); }
    .btn-outline-primary { --bs-btn-color:var(--bd-green); --bs-btn-border-color:var(--bd-green); --bs-btn-hover-bg:var(--bd-green); --bs-btn-hover-border-color:var(--bd-green); }
    .text-bd { color:var(--bd-green) !important; }
    a:focus-visible, button:focus-visible { outline:3px solid var(--bd-sun); outline-offset:2px; }
</style>
