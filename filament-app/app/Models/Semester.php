<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_semester',
    ];

    public function pengampus()
    {
        return $this->hasMany(Pengampu::class, 'id_semester');
    }
}
