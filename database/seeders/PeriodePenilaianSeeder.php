<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PeriodePenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periode_penilaians')->insert([
            [
                'nama_periode' => 'Semester Genap 2024/2025',
                'tanggal_mulai' => Carbon::create(2025, 2, 1),
                'tanggal_selesai' => Carbon::create(2025, 6, 30),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Ganjil 2024/2025',
                'tanggal_mulai' => Carbon::create(2024, 8, 1),
                'tanggal_selesai' => Carbon::create(2024, 12, 31),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}