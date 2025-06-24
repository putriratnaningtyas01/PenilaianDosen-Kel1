<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::table('kriteria_penilaians', function (Blueprint $table) {
        $table->unsignedTinyInteger('bobot')->default(1)->after('kriteria');
        $table->unsignedBigInteger('id_penilaian');
    }); 
}

public function down(): void
{
    Schema::table('kriteria_penilaians', function (Blueprint $table) {
    });
}

};
