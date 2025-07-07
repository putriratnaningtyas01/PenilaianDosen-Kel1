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
                'nama_periode' => 'Semester Genap 2010/2011',
                'tanggal_mulai' => Carbon::create(2025, 2, 1),
                'tanggal_selesai' => Carbon::create(2025, 6, 30),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Ganjil 2011/2012',
                'tanggal_mulai' => Carbon::create(2024, 8, 1),
                'tanggal_selesai' => Carbon::create(2024, 12, 31),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2013/2014',
                'tanggal_mulai' => Carbon::create(2024, 10, 2),
                'tanggal_selesai' => Carbon::create(2024, 10, 29),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Ganjil 2015/2016',
                'tanggal_mulai' => Carbon::create(2024, 9, 3),
                'tanggal_selesai' => Carbon::create(2024, 8, 28),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2017/2018',
                'tanggal_mulai' => Carbon::create(2024, 2, 1),
                'tanggal_selesai' => Carbon::create(2024, 1, 31),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2019/2020',
                'tanggal_mulai' => Carbon::create(2024, 3, 2),
                'tanggal_selesai' => Carbon::create(2024, 7, 27),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Ganjil 2021/2022',
                'tanggal_mulai' => Carbon::create(2024, 5, 5),
                'tanggal_selesai' => Carbon::create(2024, 7, 31),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2023/2024',
                'tanggal_mulai' => Carbon::create(2024, 8, 1),
                'tanggal_selesai' => Carbon::create(2024, 1, 31),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2025/2026',
                'tanggal_mulai' => Carbon::create(2024, 2, 1),
                'tanggal_selesai' => Carbon::create(2024, 7, 31),
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_periode' => 'Semester Genap 2027/2028',
                'tanggal_mulai' => Carbon::create(2024, 8, 1),
                'tanggal_selesai' => Carbon::create(2024, 2, 31),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
