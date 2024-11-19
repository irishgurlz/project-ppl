<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mata_kuliah');
            $table->foreign('id_mata_kuliah')->references('id')->on('mata_kuliah');
            $table->unsignedBigInteger('id_ruang');
            $table->foreign('id_ruang')->references('id')->on('ruang');
            $table->string('hari');
            $table->string('jam');
            $table->string('kelas');
            $table->string('tahun_ajaran');
            $table->string('jenis_semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
