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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            // Add an auto-increment id as the primary key column
            $table->id(); // This will create an auto-incrementing column 'id'
            $table->string('kodemk', 8)->unique(); // kodemk as unique key, not primary key
            $table->string('nama_mata_kuliah');
            $table->integer('sks');
            $table->string('nidn_dosen_1');
            $table->foreign('nidn_dosen_1')->references('nidn')->on('dosen');
            $table->string('nidn_dosen_2')->nullable(); 
            $table->foreign('nidn_dosen_2')->references('nidn')->on('dosen');
            $table->string('nidn_dosen_3')->nullable(); 
            $table->foreign('nidn_dosen_3')->references('nidn')->on('dosen');
            $table->unsignedBigInteger('id_program_studi');
            $table->foreign('id_program_studi')->references('id')->on('program_studi');
            $table->string('jenis_mata_kuliah');
            $table->integer('semester');
            $table->unsignedTinyInteger('status_jadwal')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
