<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    use HasFactory;
    
    protected $fillable = [
        'kodeunit',
        'namaunit',
    ];

    public function pphpembulatan()
    {
        return $this->hasMany(Pphpembulatan::class);
    }
}
