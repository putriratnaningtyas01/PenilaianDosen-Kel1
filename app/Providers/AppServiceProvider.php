<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        {
            User::created(function ($user) {
                //Jika user baru belum punya role, kasih role 'mahasiswa'
                if (! $user->hasAnyRole(['kelompok1', 'mahasiswa'])) {
                    $user->assignRole('mahasiswa');
                }
            });
        }
    }
}
