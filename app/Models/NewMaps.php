<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMaps extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mapa';

    protected $fillable = [
        'id_mapa',
        'user_id',
        'responsavel',
        'nome_projeto',
        'mapa',
        'mapa_desc',
    ];

}
