<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;

class PengalamanController extends CvChildController
{
    protected string $model = Pengalaman::class;
    protected string $view = 'pengalaman';
    protected string $route = 'pengalaman';
    protected string $title = 'Pengalaman';
    protected string $icon = 'fa-briefcase';

    protected function rules(?string $id = null): array
    {
        return [
            'biodata_id'    => $this->biodataRule(),
            'perusahaan'    => 'required|string|max:150',
            'posisi'        => 'required|string|max:100',
            'tipe'          => 'required|in:kerja,magang,organisasi',
            'tahun_mulai'   => 'required|integer|between:1980,2100',
            'tahun_selesai' => 'nullable|integer|between:1980,2100|gte:tahun_mulai',
            'deskripsi'     => 'required|string',
        ];
    }
}
