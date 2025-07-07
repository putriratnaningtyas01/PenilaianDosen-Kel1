<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenilaianDetail extends Model
{
    protected $table = 'penilaian_details';

    protected $fillable = [
        'id_penilaian',
        'id_kriteria',
        'nilai',
    ];

    public function penilaian()
    {
        return $this->belongsTo(Penilaian::class, 'id_penilaian');
    }

    public function kriteria()
    {
        return $this->belongsTo(KriteriaPenilaian::class, 'id_kriteria');
    }
}