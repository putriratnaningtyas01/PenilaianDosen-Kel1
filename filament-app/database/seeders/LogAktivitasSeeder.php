<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LogAktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $mahasiswa = User::where('email', 'mahasiswa@gmail.com')->first();

        if (!$mahasiswa) {
            $this->command->error('User mahasiswa tidak ditemukan. Seeder dibatalkan.');
            return;
        }
        
        DB::table('log_aktivitas')->insert([
            [
                'user_id' => $mahasiswa->id,
                'aktivitas' => 'Login ke sistem',
                'waktu' => Carbon::now()->subMinutes(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $mahasiswa->id,
                'aktivitas' => 'Mengisi evaluasi dosen',
                'waktu' => Carbon::now()->subMinutes(20),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $mahasiswa->id,
                'aktivitas' => 'Melihat hasil evaluasi',
                'waktu' => Carbon::now()->subMinutes(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
