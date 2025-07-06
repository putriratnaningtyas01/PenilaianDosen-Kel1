<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteria_penilaians')->insert([
            [
                'nama_kriteria' => 'Penyampaian materi',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Penguasaan materi',
                'bobot' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kedisiplinan',
                'bobot' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Interaksi dengan mahasiswa',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kedisiplinan dalam kehadiran',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Penilaian yang objektif',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Keterbukaan terhadap diskusi',
                'bobot' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Ketepatan waktu mengajar',
                'bobot' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kemampuan menjawab pertanyaan mahasiswa',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Penggunaan media pembelajaran',
                'bobot' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
