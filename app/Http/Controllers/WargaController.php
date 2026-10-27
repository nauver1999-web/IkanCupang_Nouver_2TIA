<?php

namespace App\Http\Controllers;

use App\Models\Warga;

class WargaController extends CrudController
{
    protected string $model = Warga::class;
    protected string $view = 'warga';
    protected string $route = 'warga';
    protected string $title = 'Warga';
    protected string $icon = 'fa-people-roof';

    protected function rules(?string $id = null): array
    {
        return [
            'nama'   => 'required|string|max:100',
            'nik'    => 'required|digits:16|unique:wargas,nik,' . $id,
            'alamat' => 'required|string',
            'status' => 'required|in:aktif,pindah,meninggal',
        ];
    }
}
