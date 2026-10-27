<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        $nim = config('cv.nim');

        Schema::create("biodata_$nim", function (Blueprint $t) {
            $t->id();
            $t->string('nama_lengkap');
            $t->string('posisi');
            $t->string('email');
            $t->string('telepon', 20);
            $t->text('alamat');
            $t->text('tentang');
            $t->timestamps();
        });

        Schema::create("pendidikan_$nim", function (Blueprint $t) use ($nim) {
            $t->id();
            $t->foreignId('biodata_id')->constrained("biodata_$nim")->cascadeOnDelete();
            $t->string('institusi');
            $t->string('jenjang', 10);
            $t->string('jurusan');
            $t->unsignedSmallInteger('tahun_mulai');
            $t->unsignedSmallInteger('tahun_selesai')->nullable();
            $t->timestamps();
        });

        Schema::create("pengalaman_$nim", function (Blueprint $t) use ($nim) {
            $t->id();
            $t->foreignId('biodata_id')->constrained("biodata_$nim")->cascadeOnDelete();
            $t->string('perusahaan');
            $t->string('posisi');
            $t->string('tipe', 20);
            $t->unsignedSmallInteger('tahun_mulai');
            $t->unsignedSmallInteger('tahun_selesai')->nullable();
            $t->text('deskripsi');
            $t->timestamps();
        });

        Schema::create("keahlian_$nim", function (Blueprint $t) use ($nim) {
            $t->id();
            $t->foreignId('biodata_id')->constrained("biodata_$nim")->cascadeOnDelete();
            $t->string('nama_keahlian');
            $t->string('level', 20);
            $t->timestamps();
        });
    }

    public function down(): void
    {
        $nim = config('cv.nim');
        foreach (['keahlian', 'pengalaman', 'pendidikan', 'biodata'] as $tabel) {
            Schema::dropIfExists("{$tabel}_$nim");
        }
    }
};
