<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = ['nama_pelapor', 'judul', 'isi', 'status'];
}
