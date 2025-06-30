<?php

namespace App\Filament\Widgets;

use App\Models\Dosen;
use App\Models\MahasiswaProfile;
use App\Models\Penilaian;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Ambil data saat ini
        $dosenToday = Dosen::count();
        $mahasiswaToday = MahasiswaProfile::count();
        $penilaianToday = Penilaian::count();

        // Ambil data kemarin (atau 1 hari sebelumnya)
        $yesterday = Carbon::yesterday();

        $dosenYesterday = Dosen::whereDate('created_at', '<=', $yesterday)->count();
        $mahasiswaYesterday = MahasiswaProfile::whereDate('created_at', '<=', $yesterday)->count();
        $penilaianYesterday = Penilaian::whereDate('created_at', '<=', $yesterday)->count();

        // Hitung perubahan dan ikon
        $dosenDiff = $dosenToday - $dosenYesterday;
        $mahasiswaDiff = $mahasiswaToday - $mahasiswaYesterday;
        $penilaianDiff = $penilaianToday - $penilaianYesterday;

        return [
            Stat::make('Data Dosen', $dosenToday)
                ->description(($dosenDiff >= 0 ? '+' : '') . $dosenDiff . ' perubahan')
                ->descriptionIcon($dosenDiff >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($dosenDiff >= 0 ? 'success' : 'danger'),

            Stat::make('Data Mahasiswa', $mahasiswaToday)
                ->description(($mahasiswaDiff >= 0 ? '+' : '') . $mahasiswaDiff . ' perubahan')
                ->descriptionIcon($mahasiswaDiff >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($mahasiswaDiff >= 0 ? 'success' : 'danger'),

            Stat::make('Data Penilaian', $penilaianToday)
                ->description(($penilaianDiff >= 0 ? '+' : '') . $penilaianDiff . ' perubahan')
                ->descriptionIcon($penilaianDiff >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($penilaianDiff >= 0 ? 'success' : 'danger'),
        ];
    }
}
