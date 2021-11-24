<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProjects extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_projeto';

    protected $fillable = [
        'user_id',
        'responsavel',
        'nome_projeto',
        'especie',
        'nome_popular',
        'familia',
        'publicacao',
        'resumo',
        'instituicao',
        'coordenacao',
        'financiamento',
        'experimento',
        'repositorio',
    ];
}
