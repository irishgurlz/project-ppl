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
            $table->string('kodemk');
            $table->foreign('kodemk')->references('kodemk')->on('mata_kuliah');
            $table->unsignedBigInteger('id_ruang');
            $table->foreign('id_ruang')->references('id')->on('ruang');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai')->default('01:00:00'); 
            $table->integer('kuota');
            $table->string('jenis_semester');
            $table->string('kelas_matkul');
            $table->unsignedTinyInteger('status')->default(0);
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
