<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penilaian_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penilaian');
            $table->unsignedBigInteger('id_kriteria');
            $table->integer('nilai');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_penilaian')
                ->references('id')->on('penilaians')
                ->onDelete('cascade');

            $table->foreign('id_kriteria')
                ->references('id')->on('kriteria_penilaians')
                ->onDelete('cascade');

            // Unique constraint to avoid duplicate criteria per penilaian
            $table->unique(['id_penilaian', 'id_kriteria']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penilaian_details');
    }
};