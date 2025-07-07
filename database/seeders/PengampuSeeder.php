<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengampus')->insert([
            [
                'id_dosen' => 1,         // Pastikan dosen dengan ID 1 ada
                'id_mk' => 1,            // Pastikan mata kuliah dengan ID 1 ada
                'id_semester' => 1,      // Pastikan semester dengan ID 1 ada
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 2,
                'id_mk' => 2,
                'id_semester' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 1,
                'id_mk' => 3,
                'id_semester' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 2,
                'id_mk' => 3,
                'id_semester' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 1,
                'id_mk' => 2,
                'id_semester' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'id_dosen' => 2,
                'id_mk' => 3,
                'id_semester' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 2,
                'id_mk' => 3,
                'id_semester' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 3,
                'id_mk' => 3,
                'id_semester' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 1,
                'id_mk' => 3,
                'id_semester' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_dosen' => 2,
                'id_mk' => 3,
                'id_semester' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}