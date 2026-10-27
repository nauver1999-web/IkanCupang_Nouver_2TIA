@include('layouts.partials.base-css')
<style>
    .sidebar { position:fixed; inset:0 auto 0 0; width:260px; z-index:1040; background:var(--bd-ink); color:#cfe0d6; padding:1.25rem 1rem; overflow-y:auto; transition:transform .2s; }
    .sidebar .brand { color:#fff; font-size:1.35rem; display:flex; align-items:center; gap:.6rem; text-decoration:none; }
    .sidebar .brand img { height:34px; }
    .sidebar .menu-label { font-size:.75rem; color:#8fb0a0; margin:1.4rem .8rem .4rem; list-style:none; }
    .sidebar .nav-link { color:#cfe0d6; border-radius:.5rem; padding:.55rem .8rem; display:flex; align-items:center; gap:.7rem; }
    .sidebar .nav-link i { width:1.2rem; text-align:center; }
    .sidebar .nav-link:hover { background:rgba(255,255,255,.08); color:#fff; }
    .sidebar .nav-link.active { background:var(--bd-green); color:#fff; font-weight:700; }
    @media (max-width:991.98px) { .sidebar { transform:translateX(-100%); } .sidebar.open { transform:none; } }
    @media (min-width:992px) { .admin-main { margin-left:260px; } }
    @media (prefers-reduced-motion:reduce) { .sidebar { transition:none; } }
    .stat-icon { width:52px; height:52px; border-radius:50%; background:var(--bd-mint); color:var(--bd-green); display:flex; align-items:center; justify-content:center; font-size:1.3rem; }
</style>
