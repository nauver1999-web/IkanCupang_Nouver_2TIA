<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['nama_lengkap', 'foto', 'posisi', 'email', 'telepon', 'alamat', 'tentang'];

    public function getTable()
    {
        return 'biodata_' . config('cv.nim');
    }

    /** URL foto; memakai avatar bawaan bila belum ada foto. */
    public function getFotoUrlAttribute(): string
    {
        return $this->foto ? asset('storage/' . $this->foto) : asset('img/avatar.svg');
    }

    public function pendidikans()
    {
        return $this->hasMany(Pendidikan::class, 'biodata_id')->orderByDesc('tahun_mulai');
    }

    public function pengalamans()
    {
        return $this->hasMany(Pengalaman::class, 'biodata_id')->orderByDesc('tahun_mulai');
    }

    public function keahlians()
    {
        return $this->hasMany(Keahlian::class, 'biodata_id');
    }
}
