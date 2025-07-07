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
            ],
            [
                'nidn' => '0044779911',
                'nama' => 'Dr. Budi Santosa, M.Si',
                'email' => 'Budi@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 3, // Pastikan ada prodi dengan ID 3
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Dr. Budi memiliki fokus riset dalam bidang rekayasa perangkat lunak dan pengembangan sistem cerdas berbasis data real-time.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '1001001002',
                'nama' => 'Prof. Siti Rahmawati, M.T',
                'email' => 'Siti@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 4, // Pastikan ada prodi dengan ID 4
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Prof. Siti Rahmawati adalah Guru Besar di bidang teknik perangkat lunak, dengan kontribusi besar dalam penelitian kecerdasan buatan dan pengembangan software nasional.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '1001001099',
                'nama' => 'Dr. Ir. Diah Kartika, M.T',
                'email' => 'Diah@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 5, // Pastikan ada prodi dengan ID 5
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Dr. Ir. Diah Kartika adalah dosen muda energik dengan minat dalam bidang teknologi web dan UI/UX design, aktif membimbing mahasiswa dalam pengembangan startup digital.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nidn' => '100187653',
                'nama' => 'Teguh Prakoso, M.T',
                'email' => 'Teguh@gmail.com',
                'jabatan' => 'Lektor',
                'id_prodi' => 6, // Pastikan ada prodi dengan ID 6
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Teguh Prakoso, M.T adalah dosen bidang teknik komputer dan sistem tertanam, dikenal aktif dalam kolaborasi penelitian dengan industri.',
                'created_at' => now(),
                'updated_at' => now(),
            
            ],
            [
                'nidn' => '100162963',
                'nama' => 'Ir. Yudi Hartanto, M.Eng',
                'email' => 'Yudi@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 7, // Pastikan ada prodi dengan ID 7
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Ir. Yudi Hartanto adalah dosen berpengalaman di bidang teknik mesin dan otomatisasi, aktif membina mahasiswa dalam program kewirausahaan teknologi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '100115832',
                'nama' => 'Dr. Rendra Mahesa, M.Kom',
                'email' => 'Rendra@gmail.com',
                'jabatan' => 'Asisten Ahli',
                'id_prodi' => 8, // Pastikan ada prodi dengan ID 8
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Dr. Rendra Mahesa, M.Kom adalah dosen senior yang aktif mengajar mata kuliah arsitektur komputer dan sering menjadi pembicara dalam pelatihan nasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '100110731',
                'nama' => 'Dr. Hana Zahra, M.T',
                'email' => 'Hana@gmail.com',
                'jabatan' => 'Kepala Lektor',
                'id_prodi' => 8, // Pastikan ada prodi dengan ID 8
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Fokus dalam pengembangan sistem informasi kesehatan dan sering terlibat dalam proyek sosial berbasis teknologi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '100179549',
                'nama' => 'Farhan Naufal, M.Si',
                'email' => 'Fahran@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 9, // Pastikan ada prodi dengan ID 9
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Farhan Naufal, M.Si adalah Guru Besar dalam bidang rekayasa perangkat lunak dan manajemen proyek IT, sangat produktif dalam publikasi ilmiah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '100179550',
                'nama' => 'Dr. Sulastri Hidayah, M.Kom',
                'email' => 'Sulastri@gmail.com',
                'jabatan' => 'Guru Besar',
                'id_prodi' => 10, // Pastikan ada prodi dengan ID 10
                'foto' => 'foto-dosen/anisa.jpg',
                'profil' => 'Farhan Naufal, M.Si adalah Guru Besar dalam bidang rekayasa perangkat lunak dan manajemen proyek IT, sangat produktif dalam publikasi ilmiah.',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}