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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_pengampu');
            $table->unsignedBigInteger('id_periode');
            $table->text('komentar')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_mahasiswa')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_pengampu')->references('id')->on('pengampu')->onDelete('cascade');
            $table->foreign('id_periode')->references('id')->on('periode_penilaian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
