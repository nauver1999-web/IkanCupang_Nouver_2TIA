@php
    $pesan = rawurlencode('Halo Admin CVku, saya ingin bertanya tentang pembuatan CV.');
@endphp
<a href="https://wa.me/{{ config('cv.wa_number') }}?text={{ $pesan }}" target="_blank" rel="noopener" class="wa-float" title="Chat via WhatsApp" aria-label="Chat via WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>
