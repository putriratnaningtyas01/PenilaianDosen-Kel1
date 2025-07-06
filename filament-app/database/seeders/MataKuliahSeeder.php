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
            [
                'kode_mk' => 'IF405',
                'nama_mk' => 'Sistem Operasi',
                'sks' => 2,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'kode_mk' => 'IF406',
                'nama_mk' => 'User Interface dan User Experience',
                'sks' => 4,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'kode_mk' => 'IF407',
                'nama_mk' => 'Statistik',
                'sks' => 2,
                'semester' => 'Ganjil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF408',
                'nama_mk' => 'Dasar Dasar Pemrograman',
                'sks' => 2,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF409',
                'nama_mk' => 'Matematika Komputer',
                'sks' => 2,
                'semester' => 'Genap',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_mk' => 'IF4010',
                'nama_mk' => ' Pemrograman Web',
                'sks' => 2,
                'semester' => 'Ganjil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
