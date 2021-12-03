<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMolecules extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_molecula';

    protected $fillable = [
        'id_molecula',
        'user_id',
        'status',
        'responsavel',
        'nome_projeto',
        'especie',
        'nome_molecula',
        'formula',
        'massa',
        'IDPubChem',
        'aplicabilidade',
        'referencia',
        'espectro',
    ];

}
