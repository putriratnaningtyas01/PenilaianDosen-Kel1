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
        Schema::create('pengampus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dosen')->index('id_dosen');
            $table->integer('id_mk')->index('id_mk');
            $table->integer('id_semester')->index('id_semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengampus');
    }
};
