<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'jk',
        'asal_sekolah',
        'nomor_handphone',
        'nomor_ayah',
        'nomor_ibu',
        'email',
        'referensi',
    ];
}
