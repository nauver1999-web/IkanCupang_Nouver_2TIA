<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;

class PendidikanController extends CvChildController
{
    protected string $model = Pendidikan::class;
    protected string $view = 'pendidikan';
    protected string $route = 'pendidikan';
    protected string $title = 'Pendidikan';
    protected string $icon = 'fa-graduation-cap';

    protected function rules(?string $id = null): array
    {
        return [
            'biodata_id'    => $this->biodataRule(),
            'institusi'     => 'required|string|max:150',
            'jenjang'       => 'required|in:SMA,D3,S1,S2',
            'jurusan'       => 'required|string|max:100',
            'tahun_mulai'   => 'required|integer|between:1980,2100',
            'tahun_selesai' => 'nullable|integer|between:1980,2100|gte:tahun_mulai',
        ];
    }
}
