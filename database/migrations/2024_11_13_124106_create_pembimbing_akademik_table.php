<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembimbing_akademik', function (Blueprint $table) {
            $table->id();
            $table->string('nidn_dosen', 10);  // Ensure length matches 'nidn' in 'dosen'
            $table->foreign('nidn_dosen')->references('nidn')->on('dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembimbing_akademik');
    }
};
