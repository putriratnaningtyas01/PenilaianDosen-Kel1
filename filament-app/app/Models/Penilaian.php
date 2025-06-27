<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mahasiswa',
        'id_dosen',
        'id_periode',
        'komentar',
    ];

    // Relasi ke Mahasiswa (jika modelnya bernama User)
    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaProfile::class, 'id_mahasiswa');
    }

    // Relasi ke Pengampu
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    // Relasi ke Periode Penilaian
    public function periode()
    {
        return $this->belongsTo(PeriodePenilaian::class, 'id_periode');
    }

    // Relasi ke PenilaianDetail
    public function detail()
    {
        return $this->hasMany(PenilaianDetail::class, 'id_penilaian');
    }
}
