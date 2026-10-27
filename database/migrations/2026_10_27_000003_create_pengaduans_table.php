<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $t) {
            $t->id();
            $t->string('nama_pelapor');
            $t->string('judul');
            $t->text('isi');
            $t->string('status')->default('baru');
            $t->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('pengaduans'); }
};
