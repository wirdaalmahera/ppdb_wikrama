<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'ppdb_id',
        'bank',
        'rekening',
        'tlp',
        'nominal',
        'image',
        'status',
        'user_id',
    ];
    
    public function siswa(){
        return $this->belongsTo(Ppdb::class, 'ppdb_id' );
    }
}
