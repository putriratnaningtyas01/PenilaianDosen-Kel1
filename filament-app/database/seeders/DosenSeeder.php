<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            [
                'nidn' => '0011223344',
                'nama' => 'Dr. Bambang Santosa',
                'email' => 'bambang@gmail.com',
                'jabatan' => 'Lektor Kepala',
                'id_prodi' => 1, // Pastikan ada prodi dengan ID 1
                'foto' => 'foto-dosen/bambang.jpg',
                'profil' => 'Dr. Bambang adalah dosen senior di bidang Teknik Informatika dengan pengalaman mengajar lebih dari 15 tahun.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '0055667788',
                'nama' => 'Prof. Anisa Putri',
                'email' => 'anisa@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 2, // Pastikan ada prodi dengan ID 2
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Prof. Anisa aktif dalam penelitian kecerdasan buatan dan telah menerbitkan banyak jurnal internasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
