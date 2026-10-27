# CVku - Aplikasi Pembuat CV (Laravel 11/12)

Salin isi folder ini ke project Laravel Anda (timpa file yang sama), lalu:

1. Hapus `resources/views/welcome.blade.php`.
2. Tambahkan di `.env`:
   ```
   CV_NIM=2403110123        # ganti dengan NIM Anda (huruf kecil/angka)
   WA_NUMBER=6281234567890  # nomor WhatsApp, format 62..., tanpa 0 di depan
   ```
3. `php artisan migrate`
4. `php artisan db:seed`
5. `php artisan storage:link`   (wajib, agar foto yang diunggah bisa tampil)
6. `php artisan serve`

Login admin: `admin@cvku.test` / `password`

## Tabel (empat tabel berelasi)
`biodata_{NIM}`, `pendidikan_{NIM}`, `pengalaman_{NIM}`, `keahlian_{NIM}`.
Tiga tabel terakhir punya foreign key `biodata_id`. Jika `CV_NIM` tidak diisi, namanya `biodata_nim`.

## Fitur
- Admin: CRUD Biodata (dengan foto), Pendidikan, Pengalaman, Keahlian, dan User.
- Foto profil: unggah saat membuat CV, ganti saat edit (ada pratinjau, foto lama otomatis terhapus). Maks 2 MB, JPG/PNG/WEBP.
- Guest: Home, Tentang, daftar CV (card), detail CV (bisa dicetak), Kontak, tombol WhatsApp melayang.

## Catatan
- `AppServiceProvider.php` dan `DatabaseSeeder.php` menimpa file bawaan Laravel; gabungkan manual bila Anda sudah mengubahnya.
- Jika sudah terlanjur migrate tabel lama, jalankan `php artisan migrate:fresh --seed`.
- Ganti gambar di `public/img/` (logo, hero, about, login) bila ingin tampilan sendiri.
