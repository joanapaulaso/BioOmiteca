<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spectra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'nome_projeto',
        'nome_molecula',
        'espectro',
        'mz',
        'int',
    ];

    protected $casts = [
        'int' => 'array',
        'mz' => 'array',
    ];
}
