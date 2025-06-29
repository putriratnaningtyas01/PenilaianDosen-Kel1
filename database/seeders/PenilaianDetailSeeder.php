<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenilaianDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penilaian_details')->insert([
            [
                'id_penilaian' => 1, // pastikan ada data penilaian dengan ID 1
                'id_kriteria' => 1, // pastikan ada kriteria dengan ID 1
                'nilai' => 'Baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_penilaian' => 1,
                'id_kriteria' => 2,
                'nilai' => 'Sangat Baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_penilaian' => 1,
                'id_kriteria' => 3,
                'nilai' => 'Cukup',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_penilaian' => 2,
                'id_kriteria' => 1,
                'nilai' => 'Baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
