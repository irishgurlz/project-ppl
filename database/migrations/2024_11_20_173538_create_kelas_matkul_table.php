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
        Schema::create('kelas_matkul', function (Blueprint $table) {
            $table->id();
            $table->string('kodemk');
            $table->foreign('kodemk')->references('kodemk')->on('mata_kuliah');
            $table->string('kelas');
            $table->integer('kapasitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_matkul');
    }
};
