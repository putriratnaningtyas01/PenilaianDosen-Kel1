<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penilaian_detail')->insert([
            [
                'id_penilaian' => 1,
                'id_kriteria' => 1,
                'nilai' => 4,
            ],
            [
                'id_penilaian' => 1,
                'id_kriteria' => 2,
                'nilai' => 5,
            ],
            [
                'id_penilaian' => 2,
                'id_kriteria' => 1,
                'nilai' => 3,
            ],
            [
                'id_penilaian' => 2,
                'id_kriteria' => 3,
                'nilai' => 4,
            ],
            [
                'id_penilaian' => 3,
                'id_kriteria' => 1,
                'nilai' => 2,
            ],
        ]);
    }
}
