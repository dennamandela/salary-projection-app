<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pphpembulatan extends Model
{
    protected $table = 'pphpembulatan';
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
