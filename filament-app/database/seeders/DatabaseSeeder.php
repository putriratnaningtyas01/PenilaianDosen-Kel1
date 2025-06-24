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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            MahasiswaProfileSeeder::class,
            DosenSeeder::class,
            KriteriaPenilaianSeeder::class,
            PenilaianDetailSeeder::class, 
            PeriodePenilaianSeeder::class,
            MataKuliahSeeder::class,
            ProdiSeeder::class,
            SemesterSeeder::class,
            PengampuSeeder::class,
            LogAktivitasSeeder::class
        ]);

        // ✅ Tambahkan role
        Role::firstOrCreate(['name' => 'dosen']);
        Role::firstOrCreate(['name' => 'mahasiswa']);

        // ✅ Tambahkan user dosen
        $dosen = User::firstOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'Dosen',
                'password' => bcrypt('dosensatu'),
            ]
        );
        $dosen->assignRole('dosen');

        // ✅ Tambahkan user mahasiswa
        $mahasiswa = User::firstOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'Mahasiswa',
                'password' => bcrypt('mahasiswasatu'),
            ]
        );
        $mahasiswa->assignRole('mahasiswa');
    }
}
