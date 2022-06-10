<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelengkap extends Model
{
    protected $table = 'pelengkap';
    use HasFactory;
    
    protected $fillable = [
        'namaunit',
        'tahun',
        'tambahantpp',
        'tpg',
        'tamsilguru',
        'insentif',
    ];
}
