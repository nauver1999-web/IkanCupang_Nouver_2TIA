<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;

class PengaduanController extends CrudController
{
    protected string $model = Pengaduan::class;
    protected string $view = 'modul-b';
    protected string $route = 'modul-b';
    protected string $title = 'Pengaduan';
    protected string $icon = 'fa-bullhorn';

    protected function rules(?string $id = null): array
    {
        return [
            'nama_pelapor' => 'required|string|max:100',
            'judul'        => 'required|string|max:150',
            'isi'          => 'required|string',
            'status'       => 'required|in:baru,diproses,selesai',
        ];
    }
}
