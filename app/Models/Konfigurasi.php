<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $table = 'konfigurasi';
    use HasFactory;
    
    protected $fillable = [
        'tahunanggaran',
        'bulanacuanmurni',
        'bulanacuanpak',
        'nilaiaccress',
    ];
}
