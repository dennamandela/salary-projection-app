<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyesuaian extends Model
{
    protected $table = 'penyesuaian';
    use HasFactory;
    
    protected $fillable = [
        'namaunit',
        'tahun',
        'gapok',
        'tkel',
        'tjab',
        'tfung',
        'tumum',
        'tberas',
        'tpph',
        'pembulatan',
        'bpjs',
        'jkk',
        'jkm',
        'tapera',
    ];
}
