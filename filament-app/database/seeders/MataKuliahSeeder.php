<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            [
                'kode_mk' => 'IF101',
                'nama_mk' => 'Pemrograman Dasar',
                'sks' => 3,
                'semester' => 'Ganjil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF202',
                'nama_mk' => 'Basis Data',
                'sks' => 3,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF303',
                'nama_mk' => 'Jaringan Komputer',
                'sks' => 2,
                'semester' => 'Ganjil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF404',
                'nama_mk' => 'Interaksi Manusia dan Komputer',
                'sks' => 2,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}