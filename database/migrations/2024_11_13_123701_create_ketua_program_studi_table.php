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
        Schema::create('ketua_program_studi', function (Blueprint $table) {
            $table->id();
            $table->string('nidn_dosen', 10);
            $table->foreign('nidn_dosen')->references('nidn')->on('dosen');
            $table->unsignedBigInteger('id_program_studi');
            $table->foreign('id_program_studi')->references('id')->on('program_studi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketua_program_studi');
    }
};