<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiSkpd extends Model
{
    use HasFactory;

    protected $table='mutasi_skpd';

    protected $fillable = [
        'unitasal',
        'unittujuan',
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
