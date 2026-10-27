<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder
{
    public function run(): void
    {
        $b = Biodata::updateOrCreate(['email' => 'mahasiswa@contoh.test'], [
            'nama_lengkap' => 'Nama Mahasiswa',
            'posisi'       => 'Web Developer',
            'telepon'      => '081234567890',
            'alamat'       => 'Pekanbaru, Riau',
            'tentang'      => 'Mahasiswa yang tertarik pada pengembangan web dan sistem informasi desa.',
        ]);

        $b->pendidikans()->firstOrCreate(['institusi' => 'SMA Negeri 1'], ['jenjang' => 'SMA', 'jurusan' => 'IPA', 'tahun_mulai' => 2019, 'tahun_selesai' => 2022]);
        $b->pendidikans()->firstOrCreate(['institusi' => 'Universitas Contoh'], ['jenjang' => 'S1', 'jurusan' => 'Sistem Informasi', 'tahun_mulai' => 2022, 'tahun_selesai' => null]);

        $b->pengalamans()->firstOrCreate(['perusahaan' => 'Dinas Kominfo'], ['posisi' => 'Magang Web', 'tipe' => 'magang', 'tahun_mulai' => 2025, 'tahun_selesai' => 2025, 'deskripsi' => 'Membantu membuat dan merawat website layanan publik.']);
        $b->pengalamans()->firstOrCreate(['perusahaan' => 'HIMA Sistem Informasi'], ['posisi' => 'Staf Media', 'tipe' => 'organisasi', 'tahun_mulai' => 2023, 'tahun_selesai' => null, 'deskripsi' => 'Mengelola konten dan desain publikasi kegiatan himpunan.']);

        foreach ([['PHP & Laravel', 'menengah'], ['HTML & CSS', 'mahir'], ['MySQL', 'menengah'], ['Figma', 'pemula']] as [$nama, $level]) {
            $b->keahlians()->firstOrCreate(['nama_keahlian' => $nama], ['level' => $level]);
        }
    }
}
