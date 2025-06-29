<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penilaians')->insert([
            [
                'id_mahasiswa' => 1,       // pastikan mahasiswa_profiles.id = 1 ada
                'id_dosen' => 1,        // pastikan pengampus.id = 1 ada
                'id_periode' => 1,         // pastikan periode_penilaians.id = 1 ada
                'komentar' => 'Dosen sangat komunikatif dan materi disampaikan dengan jelas.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mahasiswa' => 2,
                'id_dosen' => 2,
                'id_periode' => 1,
                'komentar' => 'Perlu perbaikan dalam penggunaan media presentasi.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mahasiswa' => 1,
                'id_dosen' => 1,
                'id_periode' => 2,
                'komentar' => 'Interaksi dosen dengan mahasiswa sangat baik.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}