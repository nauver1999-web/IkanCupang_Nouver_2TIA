<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    protected $fillable = ['biodata_id', 'nama_keahlian', 'level'];

    public function getTable()
    {
        return 'keahlian_' . config('cv.nim');
    }

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
}
