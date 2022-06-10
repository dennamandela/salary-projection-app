<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table = 'tahun';
    use HasFactory;
    
    protected $fillable = [
        'tahun',
    ];

    public function pphpembulatan()
    {
        return $this->hasMany(Pphpembulatan::class);
    }
}
