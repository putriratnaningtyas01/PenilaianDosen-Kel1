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
                'jenis_kelamin' => 'Laki-Laki',
                'prodi' => 'Teknik Informatika',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Nadia Kusuma',
                'nim' => 2203411002,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Rizky Maulana',
                'nim' => 2203411003,
                'jenis_kelamin' => 'Laki-Laki',
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ahmad Rafiq',
                'nim' => 2203410004,
                'jenis_kelamin' => 'Laki-Laki',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Nadia Kusuma',
                'nim' => 2203411010,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2024,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Putri Melinda',
                'nim' => 2203411015,
                'jenis_kelamin' => 'perempuan',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Aulia Calista',
                'nim' => 2203411005,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Yara Alesya',
                'nim' => 2203411007,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2023,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Qhaira Avia',
                'nim' => 2203411008,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Felisha',
                'nim' => 2203411013,
                'jenis_kelamin' => 'Perempuan',
                'prodi' => 'Teknik Komputer',
                'angkatan' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
