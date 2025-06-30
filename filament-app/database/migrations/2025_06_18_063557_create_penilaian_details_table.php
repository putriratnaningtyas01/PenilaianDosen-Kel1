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
            $table->string('nilai');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_penilaian')
                ->references('id')->on('penilaians')
                ->onDelete('cascade');

            $table->foreign('id_kriteria')
                ->references('id')->on('kriteria_penilaians')
                ->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penilaian_details');
    }
};
