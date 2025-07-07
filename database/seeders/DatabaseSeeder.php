<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Tambahkan role
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'dosen']);
        Role::firstOrCreate(['name' => 'mahasiswa']);


        // ✅ Tambahkan user admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('adminsatu'),
                'role' => 'admin',
            ]
        );
        $admin->assignRole('admin');

        // ✅ Tambahkan user dosen
        $dosen = User::firstOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'Dosen',
                'password' => bcrypt('dosensatu'),
                'role' => 'dosen',
            ]
        );
        $dosen->assignRole('dosen');

        // ✅ Tambahkan user mahasiswa
        $mahasiswa = User::firstOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'Mahasiswa',
                'password' => bcrypt('mahasiswasatu'),
                'role' => 'mahasiswa',
            ]
        );
        $mahasiswa->assignRole('mahasiswa');

        $this->call([
            ProdiSeeder::class,
            SemesterSeeder::class,
            MataKuliahSeeder::class,
            DosenSeeder::class,
            MahasiswaProfileSeeder::class,
            PengampuSeeder::class,
            PeriodePenilaianSeeder::class,
            KriteriaPenilaianSeeder::class,
            PenilaianSeeder::class,
            PenilaianDetailSeeder::class,
        ]);
    }
}
