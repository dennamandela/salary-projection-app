<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiPensiun extends Model
{
    use HasFactory;

    protected $table='datagajipensiun';
    protected $fillable = [
        'namaunit',
        'tahun',
        'jenisgaji',
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
