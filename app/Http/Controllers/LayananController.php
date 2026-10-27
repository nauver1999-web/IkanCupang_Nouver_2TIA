<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends CrudController
{
    protected string $model = Layanan::class;
    protected string $view = 'modul-a';
    protected string $route = 'modul-a';
    protected string $title = 'Layanan';
    protected string $icon = 'fa-hand-holding-heart';

    protected function rules(?string $id = null): array
    {
        return [
            'nama'      => 'required|string|max:100',
            'kategori'  => 'required|in:administrasi,kesehatan,sosial',
            'deskripsi' => 'required|string',
            'status'    => 'required|in:aktif,nonaktif',
        ];
    }
}
