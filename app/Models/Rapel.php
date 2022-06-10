<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapel extends Model
{
    protected $table = 'rapel';
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
