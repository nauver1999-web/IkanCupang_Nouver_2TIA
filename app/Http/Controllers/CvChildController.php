<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

/** Dasar untuk tabel CV yang bergantung pada biodata (pendidikan, pengalaman, keahlian). */
abstract class CvChildController extends CrudController
{
    protected array $with = ['biodata'];

    protected function extra(): array
    {
        return ['biodatas' => Biodata::orderBy('nama_lengkap')->pluck('nama_lengkap', 'id')];
    }

    protected function biodataRule(): string
    {
        return 'required|exists:' . (new Biodata)->getTable() . ',id';
    }
}
