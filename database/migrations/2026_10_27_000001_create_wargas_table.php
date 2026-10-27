<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('wargas', function (Blueprint $t) {
            $t->id();
            $t->string('nama');
            $t->string('nik', 16)->unique();
            $t->text('alamat');
            $t->string('status')->default('aktif');
            $t->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('wargas'); }
};
