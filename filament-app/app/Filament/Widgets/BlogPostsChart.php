<?php

namespace App\Filament\Widgets;

use App\Models\Dosen;
use App\Models\MahasiswaProfile;
use App\Models\Penilaian;
use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Statistik Pengguna';

    protected function getData(): array
    {
        $jumlahDosen = Dosen::count();
        $jumlahMahasiswa = MahasiswaProfile::count();
        $jumlahPenilaian = Penilaian::count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah',
                    'data' => [$jumlahDosen, $jumlahMahasiswa, $jumlahPenilaian],
                    'backgroundColor' => ['#36A2EB', '#FF6384', '#56f091'], // Warna pie
                ],
            ],
            'labels' => ['Dosen', 'Mahasiswa', 'Penilaian'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
