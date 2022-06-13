<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PphThr extends Model
{
    use HasFactory;

    protected $table='pph13thr';

    protected $fillable = [
        'namaunit',
        'tahunanggaran',
        'nilaipphlalu',
        'pengali',
    ];
}
