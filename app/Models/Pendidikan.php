<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $fillable = ['biodata_id', 'institusi', 'jenjang', 'jurusan', 'tahun_mulai', 'tahun_selesai'];

    public function getTable()
    {
        return 'pendidikan_' . config('cv.nim');
    }

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
}
