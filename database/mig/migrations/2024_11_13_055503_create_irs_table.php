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
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->unsignedBigInteger('id_mata_kuliah');
            $table->foreign('id_mata_kuliah')->references('id')->on('mata_kuliah'); 
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->unsignedBigInteger('id_ruang');
            $table->foreign('id_ruang')->references('id')->on('ruang');
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
        Schema::dropIfExists('irs');
    }
};
