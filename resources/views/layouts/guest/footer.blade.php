<footer class="guest-footer py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('img/logo.svg') }}" height="30" alt="Logo">
            <span class="brand">CVku</span>
            <span class="small ms-2"><i class="fa-regular fa-copyright"></i> {{ date('Y') }}</span>
        </div>
        <div class="d-flex gap-3 fs-5">
            <a href="https://wa.me/{{ config('cv.wa_number') }}" target="_blank" rel="noopener" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="{{ route('kontak') }}" title="Lokasi"><i class="fa-solid fa-location-dot"></i></a>
        </div>
    </div>
</footer>
