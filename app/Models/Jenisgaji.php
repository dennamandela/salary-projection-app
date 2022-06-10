<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisgaji extends Model
{
    protected $table = 'jenisgaji';
    use HasFactory;
    
    protected $fillable = [
        'jenisgaji',
    ];
}
