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
        Schema::create('program_studi', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_program_studi');
            $table->string('ketua_program_studi');
            $table->unsignedBigInteger('id_ketua_program_studi');
            $table->foreign('id_ketua_program_studi')->references('id')->on('ketua_program_studi');
            $table->timestamps(); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_studi');
    }
};
