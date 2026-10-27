<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $fillable = ['biodata_id', 'perusahaan', 'posisi', 'tipe', 'tahun_mulai', 'tahun_selesai', 'deskripsi'];

    public function getTable()
    {
        return 'pengalaman_' . config('cv.nim');
    }

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
}
