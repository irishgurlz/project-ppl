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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nidn', 14)->primary(); 
            $table->string('nama_mahasiswa');
            $table->text('alamat');
            $table->year('angkatan');
            $table->unsignedBigInteger('id_program_studi');
            $table->foreign('id_program_studi')->references('id')->on('program_studi');
            $table->string('telepon');
            $table->string('nidn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
