<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;

class KeahlianController extends CvChildController
{
    protected string $model = Keahlian::class;
    protected string $view = 'keahlian';
    protected string $route = 'keahlian';
    protected string $title = 'Keahlian';
    protected string $icon = 'fa-screwdriver-wrench';

    protected function rules(?string $id = null): array
    {
        return [
            'biodata_id'    => $this->biodataRule(),
            'nama_keahlian' => 'required|string|max:100',
            'level'         => 'required|in:pemula,menengah,mahir',
        ];
    }
}
