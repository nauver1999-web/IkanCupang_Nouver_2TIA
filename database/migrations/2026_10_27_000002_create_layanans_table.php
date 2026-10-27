<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $t) {
            $t->id();
            $t->string('nama');
            $t->string('kategori');
            $t->text('deskripsi');
            $t->string('status')->default('aktif');
            $t->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('layanans'); }
};
