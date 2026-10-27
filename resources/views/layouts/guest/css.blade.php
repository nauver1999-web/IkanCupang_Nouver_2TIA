@include('layouts.partials.base-css')
<style>
    .guest-nav { background:var(--bd-ink); }
    .guest-nav .navbar-brand { color:#fff; font-size:1.3rem; display:flex; align-items:center; gap:.6rem; }
    .guest-nav .navbar-brand img { height:34px; }
    .guest-nav .nav-link { color:#cfe0d6; }
    .guest-nav .nav-link:hover, .guest-nav .nav-link.active { color:#fff; }
    .guest-nav .nav-link.active { border-bottom:2px solid var(--bd-sun); }
    .hero { background:var(--bd-mint); }
    .hero h1 { font-size:clamp(2rem,5vw,3.2rem); line-height:1.1; }
    .section-title { font-size:1.8rem; }
    .card-cv { border:0; border-radius:.9rem; overflow:hidden; }
    .card-cv .card-photo { background:var(--bd-mint); }
    .card-cv .card-photo img { width:100%; height:220px; object-fit:cover; display:block; }
    .guest-footer { background:var(--bd-ink); color:#cfe0d6; }
    .guest-footer a { color:#cfe0d6; text-decoration:none; }
    .guest-footer a:hover { color:#fff; }
    .wa-float { position:fixed; bottom:24px; right:24px; z-index:1050; width:60px; height:60px; border-radius:50%; background:#25D366; color:#fff; font-size:34px; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 12px rgba(0,0,0,.3); text-decoration:none; transition:transform .15s; }
    .wa-float:hover { background:#1EBE5B; color:#fff; transform:scale(1.08); }
    @media print { .guest-nav, .guest-footer, .wa-float, .no-print { display:none !important; } body { background:#fff; } }
</style>
