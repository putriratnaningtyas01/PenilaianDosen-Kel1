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
                'nama' => 'Dr. Sirojul Munir, S.Si, M.Kom',
                'email' => 'sirojul@gmail.com',
                'jabatan' => 'Lektor Kepala',
                'id_prodi' => 1, // Pastikan ada prodi dengan ID 1
                'profil' => 'Dr. Sirojul Munir, S.Si, M.Kom adalah dosen senior di bidang Teknik Informatika dengan pengalaman mengajar lebih dari 15 tahun.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '0055667788',
                'nama' => 'Misna Asqia, S.Kom, M.Kom',
                'email' => 'misna@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 2, // Pastikan ada prodi dengan ID 2
                'profil' => 'Misna Asqia, S.Kom, M.Kom aktif dalam penelitian kecerdasan buatan dan telah menerbitkan banyak jurnal internasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '0044779911',
                'nama' => 'Nasrul, S.Kom, M.Kom',
                'email' => 'nasrul@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 3, // Pastikan ada prodi dengan ID 3
                'profil' => 'Nasrul, S.Kom, M.Kom memiliki fokus riset dalam bidang rekayasa perangkat lunak dan pengembangan sistem cerdas berbasis data real-time.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '1001001002',
                'nama' => 'Krisna Panji, S.Kom., M.M',
                'email' => 'krisna@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 1, // Pastikan ada prodi dengan ID 4
                'profil' => 'Krisna Panji, S.Kom., M.M adalah Guru Besar di bidang teknik perangkat lunak, dengan kontribusi besar dalam penelitian kecerdasan buatan dan pengembangan software nasional.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '1001001099',
                'nama' => 'Davied Wahyu Wismanindra, S.Kom., M.M',
                'email' => 'david@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 2, // Pastikan ada prodi dengan ID 5
                'profil' => 'Davied Wahyu Wismanindra, S.Kom., M.M adalah dosen muda energik dengan minat dalam bidang teknologi web dan UI/UX design, aktif membimbing mahasiswa dalam pengembangan startup digital.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '100187653',
                'nama' => 'Drs. Rusmanto, M.M.',
                'email' => 'rusmanto@gmail.com',
                'jabatan' => 'Lektor',
                'id_prodi' => 3, // Pastikan ada prodi dengan ID 6
                'profil' => 'Drs. Rusmanto, M.M. adalah dosen bidang teknik komputer dan sistem tertanam, dikenal aktif dalam kolaborasi penelitian dengan industri.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '100162963',
                'nama' => 'Dr.Suhendi.,ST.,S.Kom., MMSI',
                'email' => 'suhendi@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 1, // Pastikan ada prodi dengan ID 7
                'profil' => 'Dr.Suhendi.,ST.,S.Kom., MMSI adalah dosen berpengalaman di bidang teknik mesin dan otomatisasi, aktif membina mahasiswa dalam program kewirausahaan teknologi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '100115832',
                'nama' => 'Henry Saptono, S.Si, M.Kom',
                'email' => 'henry@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 2, // Pastikan ada prodi dengan ID 8
                'profil' => 'Henry Saptono, S.Si, M.Kom adalah dosen senior yang aktif mengajar mata kuliah arsitektur komputer dan sering menjadi pembicara dalam pelatihan nasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
