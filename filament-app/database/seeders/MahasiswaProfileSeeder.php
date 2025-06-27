<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MahasiswaProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa_profiles')->insert([
            [
                'nama' => 'Ahmad Rafiq',
                'nim' => 2203411001,
                'prodi' => 'Teknik Informatika',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Nadia Kusuma',
                'nim' => 2203411002,
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Rizky Maulana',
                'nim' => 2203411003,
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
