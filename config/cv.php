<?php

return [
    // Isi CV_NIM di .env dengan NIM Anda (huruf kecil/angka saja).
    // Tabel yang dibuat: biodata_{NIM}, pendidikan_{NIM}, pengalaman_{NIM}, keahlian_{NIM}
    'nim' => env('CV_NIM', 'nim'),

    // Format internasional, tanpa "+" dan tanpa "0" di depan. 0812-3456-7890 => 6281234567890
    'wa_number' => env('WA_NUMBER', '6281234567890'),
];
