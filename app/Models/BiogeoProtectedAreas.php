<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiogeoProtectedAreas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_biogeo_pa';

    protected $fillable = [
        'project_id',
        'total',
        'federal',
        'estadual',
        'municipal',
    ];
}
